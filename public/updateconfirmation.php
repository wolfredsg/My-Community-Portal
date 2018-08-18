<?php
/*
 * Delete user.
 * Edit user
 * 
 */
if (!isset($_SESSION['approvedid'])) {
	require_once 'login.php';
}else{

if(isset($_POST['delete'])){
    \M5\classes\business\UserManager::deleteUser($_POST['email']);
    $message = "User has been deleted";
} else{
    if(isset($_POST['edit'])){
        $user = new \M5\classes\entity\Admin();
        $user->is_admin=$_POST['is_admin'];
        $user->is_block=$_POST['is_block'];
        $user->is_subscribed = $_POST['is_subscribed'];
        $user->email=$_POST['email'];
        $message = "Edit success!";
    } else {
        $user = new \M5\classes\entity\User();
        $user->email = $_SESSION['email'];
        $message = "Profile has been updated!";
    }
    $user->firstname = $_POST['firstname'];
    $user->lastname = $_POST['lastname'];
    $user->company = $_POST['company'];
    $user->country = $_POST['country'];
    $user->city = $_POST['city'];
    $user->is_subscribed = $_POST['is_subscribed'];

    if (!\M5\classes\business\UserManager::updateUser($user)) {
        header("LOCATION:./?update");
    } 
}
?>
<div class="row"><p><br></p></div>
<div class="row">
    <div class="col-lg-12" style="height:550px;background-color: #FFF056;border-style: solid; border-color: #FFF056;border-width: 1px;">
        <div class="col-lg-offset-2 col-lg-8">
            <h2><?php echo $message;?></h2>
            <br><br>
        </div>
        <div class="col-lg-offset-2 col-lg-8" style="background-color: #FFF056;border-style: solid; border-color: #FFFFFF;border-width: 3px;">
            <br><br><br><h4>Enjoy using our portal.</h4><br><br><br>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <p>
            <br>
        </p>
    </div>
</div>

<?php
}
?>
