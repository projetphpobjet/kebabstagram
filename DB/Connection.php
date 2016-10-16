<?php
namespace DB;

use Illuminate\Database\Capsule\Manager as Capsule;

class Connection {

        private static $caps;

        //fonction qui démarre eloquent
        public static  function run($file_name) {
            $params=parse_ini_file($file_name);
            //create a new instance of Capsule
            static::$caps= new Capsule();
            static::$caps->addConnection($params);
            //make this instance available globally
            static::$caps->setAsGlobal();
            //set up the ORM Eloquent
            static::$caps->bootEloquent();
        }
        //fonction de logs
        public static function logs() {

            return Capsule::getQueryLog();
        }





}