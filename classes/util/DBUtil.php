<?php
/**
 * Namespaces provide a way to group related classes.
 * The ability to refer to an external fully qualified name with an alias,
 * or importing, is an important feature of namespaces.
 * In PHP, aliasing is accomplished with the use operator.
 * Class Config is imported.
 *
 */
namespace M5\classes\util;    
use M5\classes\util\Config as Config;
use \mysqli;
/**
 * Method to get 
 * connection to the database
 * @author WOLFREDSG
 *
 */
class DBUtil
{
    public static function getConnection(){
        $config= Config::getConfig();
        $conn = new mysqli($config->mysqlServer, $config->mysqlUser, $config->mysqlPassword,$config->mysqlDB);
      //  var_dump($conn);
        return $conn;
    }
}


        