<?php
if (!isset($_SESSION['approvedid'])) {
	require_once 'login.php';
}else{

if (! \M5\classes\business\UserManager::updatePassword($_POST['password'])) {
    header("LOCATION:./?updatepassword");
}
?>

<div class="row"><p><br></p></div>
<div class="row">
    <div class="col-lg-12" style="height:550px;background-color: #FFF056;border-style: solid; border-color: #FFF056;border-width: 1px;">
        <div class="col-lg-offset-2 col-lg-8">
            <h2>Your password has been updated!</h2>
            <br><br>
        </div>
        <div class="col-lg-offset-2 col-lg-8" style="background-color: #FFF056;border-style: solid; border-color: #FFFFFF;border-width: 3px;">
            <p><br><br><br><h4>Please check your email for confirmation.</h4><br><br><br></p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <p><br></p>
    </div>
</div>

<?php
}
?>