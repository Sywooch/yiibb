<?php

namespace app\commands;

use yii;
use yii\console\Controller;

class GroupController extends Controller
{
    public function actionInit()
    {
        $groupManager = Yii::$app->groupManager;
        $groupManager->removeAll();


        /**
         * Creates groups...
         */

        $adminGroup = $groupManager->createGroup('administrator');
        $adminGroup->title = 'Администраторы';
        $groupManager->addGroup($adminGroup);

        $userGroup = $groupManager->createGroup('user');
        $userGroup->title = 'Пользователи';
        $groupManager->addGroup($userGroup);


        /**
         * Creates permissions...
         */

        $updatePost = $groupManager->createPermission('updatePost');
        $updatePost->description = 'Редактирование сообщения';
        $groupManager->addPermission($updatePost);

        $updateProfile = $groupManager->createPermission('updateProfile');
        $groupManager->addPermission($updateProfile);


        /**
         * Assign permissions and groups...
         */

        $groupManager->assign($userGroup, $updateProfile);
        $groupManager->assign($adminGroup, $updatePost);
        $groupManager->assign($adminGroup, $updateProfile);
    }
}