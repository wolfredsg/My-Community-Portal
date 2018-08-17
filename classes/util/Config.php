<?php
/**
 * Namespaces provide a way to group related classes.
 * The ability to refer to an external fully qualified name with an alias,
 * or importing, is an important feature of namespaces.
 * In PHP, aliasing is accomplished with the use operator.
 *
 */
namespace M5\classes\util;
/**
 * This class configures the connection
 * of the USerManagerDB 
 * to the database utilizing the 
 * phpcrud.ini file in the config folder
 * 
 * @author WOLFREDSG
 *
 */
class Config
{
    /**
     * Properties of the connection
     * to the database
     * @var string
     */
    public static $config;
    public $mysqlServer;
    public $mysqlUser;
    public $mysqlPassword;
    public $mysqlDB;
    /**
     * Method to configure the 
     * database connection for the UserManagerDB class
     * @param boolean $reload
     * @return \M5\classes\util\Config
     */
    public static function getConfig($reload = false){
        if(isset($config)==false || $reload==true){
            $ini =  parse_ini_file(ALIASROOT." ..\..\config\phpcrud.ini");
            $config=new Config();
            $config->mysqlServer=$ini['mysqlserver'];
            $config->mysqlUser=$ini['mysqluser'];
            $config->mysqlPassword=$ini['mysqlpassword'];
            $config->mysqlDB=$ini['mysqldb'];
            return $config;
        }
        return $config;
    }
    /**
     * Configuration of the path
     * @return string
     */
    public static function getApplicationRoot(){
        $path = __DIR__;
        return $path;
    }
}

