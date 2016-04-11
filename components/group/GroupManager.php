<?php

namespace app\components\group;

use yii;
use yii\base\Component;
use yii\caching\Cache;
use yii\db\Connection;
use yii\db\Query;
use yii\di\Instance;

class GroupManager extends Component
{
    /**
     * @var Connection|array|string the DB connection object or the application component ID of the DB connection.
     */
    public $db = 'db';
    /**
     * @var string the name of the table storing groups.
     */
    public $groupTable = '{{%user_group}}';
    /**
     * @var string the name of the table storing permission.
     */
    public $permissionTable = '{{%user_group_permission}}';
    /**
     * @var string the name of the table storing items assignment.
     */
    public $assignmentTable = '{{%user_group_assignment}}';
    /**
     * @var Cache|array|string the cache used to improve Group performance.
     */
    public $cache;
    /**
     * @var string the key used to store Group data in cache
     * @see cache
     */
    public $cacheKey = 'group';


    /**
     * Initializes the application component.
     * This method overrides the parent implementation by establishing the database connection.
     */
    public function init()
    {
        parent::init();
        $this->db = Instance::ensure($this->db, Connection::className());
        if ($this->cache !== null) {
            $this->cache = Instance::ensure($this->cache, Cache::className());
        }
    }

    /**
     * Checks if the user has the specified permission.
     * @param string|integer $userGroup the user group.
     * @param string $permissionName the name of the permission to be checked against
     * @param array $params name-value pairs that will be passed to the rules associated
     * with the groups and permissions assigned to the user.
     * @return boolean whether the user has the specified permission.
     */
    public function checkAccess($userGroup, $permissionName, $params = [])
    {
        $assignments = $this->getAssignments($userId);
        $this->loadFromCache();
        if ($this->items !== null) {
            return $this->checkAccessFromCache($userId, $permissionName, $params, $assignments);
        } else {
            return $this->checkAccessRecursive($userId, $permissionName, $params, $assignments);
        }
    }

    /**
     * Creates a new Group object.
     * @param string $name the group name, must be unique.
     * @return Group the new Group object
     */
    public function createGroup($name)
    {
        $group = new Group();
        $group->name = $name;
        return $group;
    }

    /**
     * Adds group to the Group system.
     * @param Group $group
     * @return bool
     */
    public function addGroup(Group $group)
    {
        $time = date('Y-m-d H:i:s');
        if ($group->created_at === null) {
            $group->created_at = $time;
        }
        if ($group->updated_at === null) {
            $group->updated_at = $time;
        }

        $this->db->createCommand()
            ->insert($this->groupTable, [
                'name' => $group->name,
                'title' => $group->title,
                'description' => $group->description,
                'created_at' => $group->created_at,
                'updated_at' => $group->updated_at,
            ])->execute();

        $this->invalidateCache();

        return true;
    }

    /**
     * Creates a new Group object.
     * @param string $name the group name, must be unique.
     * @return Permission the new Group object
     */
    public function createPermission($name)
    {
        $group = new Permission();
        $group->name = $name;
        return $group;
    }

    /**
     * Adds permission to the Group system.
     * @param Permission $permission
     * @return bool
     */
    public function addPermission(Permission $permission)
    {
        $time = date('Y-m-d H:i:s');
        if ($permission->created_at === null) {
            $permission->created_at = $time;
        }
        if ($permission->updated_at === null) {
            $permission->updated_at = $time;
        }

        $this->db->createCommand()
            ->insert($this->permissionTable, [
                'name' => $permission->name,
                'description' => $permission->description,
                'created_at' => $permission->created_at,
                'updated_at' => $permission->updated_at,
            ])->execute();

        $this->invalidateCache();

        return true;
    }

    /**
     * Assigns a group to a permission.
     *
     * @param Group $group
     * @param Permission $permission
     * @return Assignment the role assignment information.
     */
    public function assign(Group $group, Permission $permission)
    {
        $assignment = new Assignment([
            'group_name' => $group->name,
            'permission_name' => $permission->name,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
        $this->db->createCommand()
            ->insert($this->assignmentTable, [
                'group_name' => $assignment->group_name,
                'permission_name' => $assignment->permission_name,
                'created_at' => $assignment->created_at,
            ])->execute();

        return $assignment;
    }

    public function invalidateCache()
    {
        if ($this->cache !== null) {
            $this->cache->delete($this->cacheKey);
        }
    }

    /**
     * Removes all data, including groups, permissions and assignments.
     */
    public function removeAll()
    {
        $this->db->createCommand()->delete($this->groupTable)->execute();
        $this->db->createCommand()->delete($this->permissionTable)->execute();
        $this->db->createCommand()->delete($this->assignmentTable)->execute();
        $this->invalidateCache();
    }

    /**
     * Removes all assignments.
     */
    public function removeAllAssignments()
    {
        $this->db->createCommand()->delete($this->assignmentTable)->execute();
    }
}