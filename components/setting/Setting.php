<?php

namespace app\components\setting;

use yii;
use yii\base\Component;
use yii\caching\Cache;
use yii\db\Connection;
use yii\db\Query;
use yii\di\Instance;

class Setting extends Component
{
    /**
     * @var Connection|array|string the DB connection object or the application component ID of the DB connection.
     */
    public $db = 'db';
    /**
     * Configuration Table Name
     * @var string
     */
    public $settingTable = '{{%setting}}';
    /**
     * @var Cache|array|string
     */
    public $cache = 'cache';
    /**
     * @var string
     */
    public $cacheKey = 'setting';
    /**
     * @var boolean whether to enable caching
     */
    public $enableCaching = false;
    /**
     * Configuration data
     * @var array
     */
    private $_data;


    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->db = Instance::ensure($this->db, Connection::className());
        if ($this->enableCaching) {
            $this->cache = Instance::ensure($this->cache, Cache::className());
        }
    }

    public function get($name, $default = null)
    {
        $this->loadData();

        $value = $this->_data[$name];
        if (!isset($value) && $default !== null) {
            return $default;
        }

        return $value;
    }

    public function set($name, $value = null)
    {

    }

    /**
     *
     */
    private function loadData()
    {
        if (isset($this->_data)) {
            return;
        }

        if ($this->enableCaching && $this->cache instanceof Cache) {
            $data = $this->cache->get($this->cacheKey);
            if (isset($data)) {
                $this->_data = $data;
                return;
            }
        }

        $query = (new Query)->from($this->settingTable);
        foreach ($query->all($this->db) as $row) {
            $this->_data[$row['name']] = $row['value'];
        }

        if ($this->enableCaching && $this->cache instanceof Cache) {
            $this->cache->set($this->cacheKey, $this->_data);
        }
    }
}
