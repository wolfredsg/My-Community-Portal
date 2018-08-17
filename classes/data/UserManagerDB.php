<?php
/**
 * Namespaces provide a way to group related classes.
 * The ability to refer to an external fully qualified name with an alias, 
 * or importing, is an important feature of namespaces. 
 * In PHP, aliasing is accomplished with the use operator.
 * Classes Config, DBUtil, and User are imported.
 * 
 */
namespace M5\classes\data;
use M5\classes\entity\User;
use M5\classes\util\DBUtil;
use M5\classes\entity\Admin;
/**
 * The class UserManagerDB connects to the database
 * and return result of sql queries back to the webpage.
 * This is a set of PHP Classes
 * This tier consist of logic to retrieve and store databases
 * This Tier uses the facilities of Database to do its functions
 * @author WOLFREDSG
 *
 */
class UserManagerDB
{
    /**
     * Method to return object user with the 
     * properties below. 
     * @param array $row 
     * @return \M5\classes\entity\User
     */
    public static function fillUser($row){
        $user=new User();
        $user->firstname=$row["firstname"];
        $user->lastname=$row["lastname"];
        $user->email=$row["email"];
        $user->password=$row["password"];
        $user->city=$row['city'];
        $user->company=$row['company'];
        $user->country=$row['country'];
        $user->is_subscribed=$row['is_subscribed'];
            
        return $user;
    }
    
    /**
     * Method to return object admin with the 
     * properties below. 
     * @param array $row 
     * @return \M5\classes\entity\Admin
     */
    public static function fillAdmin($row){
        $admin=new Admin();
        $admin->firstname=$row["firstname"];
        $admin->lastname=$row["lastname"];
        $admin->email=$row["email"];
        $admin->password=$row["password"];
        $admin->city=$row['city'];
        $admin->company=$row['company'];
        $admin->country=$row['country'];
        $admin->is_admin=$row['is_admin'];
        $admin->is_block=$row['is_block'];
        $admin->is_subscribed=$row['is_subscribed'];
     
        return $admin;
    }
    /**
     * Method to return user with 
     * given email and corresponding password
     * to be able to validate the log in
     * @param $email string
     * @param string $password 
     * @return NULL|\M5\classes\entity\Admin
     */
    public static function getUserByEmailPassword($email,$password){
        $admin    = NULL;
        $conn     = DBUtil::getConnection();
        $email    = mysqli_real_escape_string($conn,$email);
        $password = mysqli_real_escape_string($conn,$password);
        $sql      = "select * from tb_user where email='$email' and password='$password' and is_block = '0'";
        $result   = $conn->query($sql);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()){
                $admin=self::fillAdmin($row);
            }
        }
        $conn->close();
        return $admin;
    }
	
    /**
     * Method to return properties of 
     * searched user with 
     * corresponding email
     * @param string $email 
     * @return NULL|\M5\classes\entity\Admin
     */
    public static function getUserByEmail($email){
        $user   = NULL;
        $conn   = DBUtil::getConnection();
        $email  = mysqli_real_escape_string($conn,$email);
        $sql    = "select * from tb_user where email='$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()){
                $user=self::fillAdmin($row);
            }
        }
        $conn->close();
        return $user;
    } 
    /**
     * Method to return searched user 
     * using the five properties
     * stated in the query.
     * @param string $valueString 
     * @return \M5\classes\entity\User|NULL
     */
    public static function getUser($valueString){
        $conn=DBUtil::getConnection();
        //$user[]="";
        $sql = "SELECT * FROM tb_user WHERE FIRSTNAME = '{$valueString}' OR LASTNAME = '{$valueString}'
        OR EMAIL = '{$valueString}' OR CITY ='{$valueString}' OR COUNTRY = '{$valueString}'";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                $user[]=self::fillUser($row);    
            }
            $conn->close();
            return $user;
        } else {
            $conn->close();
            return null;
        }
    }
    /**
     * Save user details entered
     * in the registration page
     * on successful submit.
     * @param User $user
     * @return boolean
     */
    public static function saveUser(User $user){
        $conn     = DBUtil::getConnection();
        $is_admin = 0;
        $is_block = 0;
        $is_subscribed = 0;
        $data     = get_object_vars($user);
        
        $fieldString = $valueString = '';
        foreach ($data as $field => $value) {
            $fieldString .= "`".$field."`,";
            $valueString .= "'".$value."',";  
        }

        $fieldString = trim($fieldString,',');
        $valueString = trim($valueString,',');
        $sql = "INSERT INTO tb_user (".$fieldString.") values ({$valueString})";
        if ($conn->query($sql)) {
            $conn->close();
            return true;
        }else{
            $conn->close();
            return false;
        }
        
    }
	/**
	 * Method to save properties
	 * of user on update.
	 * @param User $user
	 * @return boolean
	 */
	public static function updateUser(User $user){
        $conn = DBUtil::getConnection();
        $data = get_object_vars($user);
        unset($data['password']);
        $tobeupdated = '';
        foreach ($data as $field => $value) {
            $tobeupdated .= "`{$field}` = '{$value}',";   
        }
        $tobeupdated = trim($tobeupdated,',');
        $sql = "UPDATE tb_user SET {$tobeupdated} WHERE `email`='{$data['email']}'";
        if ($conn->query($sql)) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }
    /**
     * Method to save password
	 * of user on update.
     * @param string $password
     * @return boolean
     */
    public static function updatePassword($password){
        $conn = DBUtil::getConnection();
        $pw   = md5($password);
        $sql  = "UPDATE tb_user SET `password`='{$pw}' WHERE `email`='{$_SESSION['email']}'";
        if ($conn->query($sql)) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
        
    }
    /**
     * Method available to Admin only
     * to delete reigstered users.
     * @param string $email
     * @return boolean
     */
    public static function deleteUser($email){
        $conn = DBUtil::getConnection();
        $sql  = "DELETE FROM tb_user WHERE `email`='{$email}'";
        if ($conn->query($sql)) {
            $conn->close();
            return true;
        }else{
            $conn->close();
            return false;
        }
    }
	/**
	 * Method available to Admin only
	 * to view all registered users which
	 * the Admin can then edit.
	 * @return User
	 */
    public static function getAllUsers(){
        //$users[]=array();
        $conn   = DBUtil::getConnection();
        $sql    = "select * from tb_user";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $user=self::fillUser($row);
                $users[]=$user;
            }
        }
        $conn->close();
        return $users;
    }

    public static function updateSubscription($mailingListValue){
        $conn = DBUtil::getConnection();
        $val  = $mailingListValue;
        $sql  = "UPDATE tb_user SET `is_subscribed`='{$val}' WHERE `email`='{$_SESSION['email']}'";
        if ($conn->query($sql)) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
        
    }
}

?>