<?php

namespace DB;

use Illimunate\Database\Capsule\Manager;

class Connection
{

    public static function bootEloquent($file)
    {
        $conf = parse_ini_file($file);
        $db = new Manager();
        $db->addConnection($conf);
        $db->setAsGlobal();
        $db->bootEloquent();
    }

    public static function logs()
    {
        return Manager::getQueryLog();
    }


}