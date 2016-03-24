<?php

namespace app\migrations\linuxforum;

use yii\db\Migration as YiiMigration;
use yii\db\Connection;
use yii\di\Instance;

class Migration extends YiiMigration
{
    /**
     * @var Connection|array|string
     */
    public $linuxforumDb = 'linuxforumDb';
    /**
     * @var Connection|array|string
     */
    public $punDb = 'punDb';


    public function init()
    {
        parent::init();

        $this->linuxforumDb = Instance::ensure($this->linuxforumDb, Connection::className());
        $this->linuxforumDb->getSchema()->refresh();

        $this->punDb = Instance::ensure($this->punDb, Connection::className());
        $this->punDb->getSchema()->refresh();
    }

    public function getPunDb()
    {
        return $this->punDb;
    }

    public function getLinuxforumDb()
    {
        return $this->linuxforumDb;
    }
}
