<?php

/*
 * Object assigned the properties 
 * to be saved in the database
 * regarding the user.
 */
$user = new \M5\classes\entity\User();
$user->firstname = $_POST['firstname'];
$user->lastname = $_POST['lastname'];
$user->company = $_POST['company'];
$user->country = $_POST['country'];
$user->city = $_POST['city'];
$user->password = md5($_POST['password']);
$user->email = $_POST['email'];

if (!M5\classes\business\UserManager::saveUser($user)) {
    header("LOCATION:./?registration");
}
?>

<div class="row"><p><br></p></div>
<div class="row">
    <div class="col-lg-12" style="height:550px;background-color: #FFF056;border-style: solid; border-color: #FFF056;border-width: 1px;">
        <div class="col-lg-offset-2 col-lg-8">
            <h2>Thank you for registering!</h2>
            <br><br>
        </div>
        <div class="col-lg-offset-2 col-lg-8" style="background-color: #FFF056;border-style: solid; border-color: #FFFFFF;border-width: 3px;">
            <p><br><br><br><h4>Please check your email and confirm your email address.</h4><br><br><br></p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <p><br></p>
    </div>
</div>


