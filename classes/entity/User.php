<?php
namespace M5\classes\entity;
/**
 * Properties of user that 
 * will be saved to the database.
 * On log in, user will use
 * email and password. 
 * Email is unique.
 *
 */
class User
{
   public $firstname;
   public $lastname;
   public $company;
   public $country;
   public $city;
   public $email;
   public $password;
   public $is_subscribed="0";
}
?>
