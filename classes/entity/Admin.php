<?php
namespace M5\classes\entity;
//Use M5\entity\User;
/**
 * Additional properties of Admin
 * When $is_admin is set to 0, user is just a simple user.
 * When $is_admin is set to 1, user becomes administrator.
 * When $is_block is set to 0, user is not blocked from using the portal.
 * When $is_admin is set to 1, user is blocked from using the portal.
 * Default value for both $is_admin and $is_block is 0.
 * Admin inherits properties from class User
 * 
 */
class Admin extends User
{
   public $is_admin="0";
   public $is_block="0";
}
?>