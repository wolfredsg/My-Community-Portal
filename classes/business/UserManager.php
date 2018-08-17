<?php
/**
 * Namespaces provide a way to group related classes.
 * The ability to refer to an external fully qualified name with an alias,
 * or importing, is an important feature of namespaces.
 * In PHP, aliasing is accomplished with the use operator.
 * Classes User and UserManagerDB are imported.
 *
 */
namespace M5\classes\business;
use M5\classes\entity\User;
//use M5\entity\Admin;
use M5\classes\data\UserManagerDB;

/**
 * This is the business tier.
 * This is a set of PHP Classes 
 * consisting of Business logic 
 * that can handle Caching Database data.
 * This Tier Uses Database tier to store and retrieve data.
 * @author WOLFREDSG
 *
 */
class UserManager
{
    /**
     * Method to cache request
     * to view all users.
     * @return \M5\classes\entity\User
     */
    public static function getAllUsers(){
        return UserManagerDB::getAllUsers();
    }
    /**
     * Method to cache request for
     * validation of email and password
     * to log in.
     * @param string $email
     * @param string $password
     * @return NULL|\M5\classes\entity\Admin
     */
    public static function getUserByEmailPassword($email,$password){
        return UserManagerDB::getUserByEmailPassword($email,$password);
    }
    /**
     * Method to cache request 
     * for user with the given email
     * @param string $email
     * @return NULL|\M5\classes\entity\Admin
     */
    public static function getUserByEmail($email){
        return UserManagerDB::getUserByEmail($email);
    }
    /**
     * Method to cache request for
     * populating details of searched user
     * @param string $str
     * @return \M5\classes\entity\User|NULL
     */
    public static function searchUserBy($str){
        return UserManagerDB::getUser($str);
    }
    /**
     * Method to cache request
     * to save new registration of user
     * @param User $user
     * @return boolean
     */
    public static function saveUser(User $user){
        return UserManagerDB::saveUser($user);
    }
    /**
     * Method to cache request
     * to update the profile of user
     * @param User $user
     * @return boolean
     */
    public static function updateUser(User $user){
        return UserManagerDB::updateUser($user);
    }
    /**
     * Method to cache the
     * password of a registered user
     * @param string $password
     * @return boolean
     */
    public static function updatePassword($password){
        return UserManagerDB::updatePassword($password);
    }
    /**
     * Method availabel to Admin only
     * to cache request to delete registered user
     * @param string $email
     * @return boolean
     */
    public static function deleteUser($email){
        return UserManagerDB::deleteUser($email);
    }

    public static function updateSubscription($mailingListValue){
        return UserManagerDB::updateSubscription($mailingListValue);
    }
   
   
}

?>