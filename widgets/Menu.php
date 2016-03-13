<?php
namespace app\widgets;

use Yii;
use yii\widgets\Menu as YiiMenu;

class Menu extends YiiMenu
{
    public $activeCssClass = 'isactive';


    public function init()
    {
        $this->items = $this->getItems();
    }

    /**
     * @return array
     */
    protected function getItems()
    {
        $links = [
            'index' => ['label' => Yii::t('app/common', 'Index'), 'url' => ['home/index'], 'options' => ['id' => 'navindex']],
            'userlist' => ['label' => Yii::t('app/common', 'User list'), 'url' => ['user/list'], 'options' => ['id' => 'navuserlist']],
            'rules' => ['label' => Yii::t('app/common', 'Rules'), 'url' => ['home/terms'], 'options' => ['id' => 'navrules']],
            'search' => ['label' => Yii::t('app/common', 'Search'), 'url' => ['site/search'], 'options' => ['id' => 'navsearch']],
            'register' => ['label' => Yii::t('app/common', 'Register'), 'url' => ['auth/auth/register-form'], 'options' => ['id' => 'navregister']],
            'login' => ['label' => Yii::t('app/common', 'Login'), 'url' => ['auth/auth/login-form'], 'options' => ['id' => 'navlogin']],
            'logout' => ['label' => Yii::t('app/common', 'Logout'), 'url' => ['user/logout'], 'options' => ['id' => 'navlogout']],
            'profile' => ['label' => Yii::t('app/common', 'Profile'), 'url' => ['user/view', 'id' => Yii::$app->user->id], 'options' => ['id' => 'navprofile']],
            'admin' => ['label' => Yii::t('app/common', 'Administration'), 'url' => ['admin-index/index'], 'options' => ['id' => 'navadmin']],
        ];

        $items[] = $links['index'];
        $items[] = $links['userlist'];
        $items[] = $links['rules'];
        $items[] = $links['search'];
        $items[] = $links['register'];
        $items[] = $links['login'];
        //$items[] = $links['profile'];
        //$items[] = $links['admin'];
        //$items[] = $links['logout'];

        return $items;
    }
}
