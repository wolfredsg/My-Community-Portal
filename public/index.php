<?php
/*
 * Unconditionally include the 
 * files Config.php, DBUtil.php,
 * UserManager.php, UserManagerDB.php,
 * User.php and Admin.php pages.
 * Defines path too.  
 */
require_once '../classes/util/Config.php';
require_once '../classes/util/DBUtil.php';
require_once '../classes/entity/User.php';
require_once '../classes/entity/Admin.php';
require_once '../classes/data/UserManagerDB.php';
require_once '../classes/business/UserManager.php';

define('ALIASROOT', __DIR__);

/*
 * Starts session. Check posted variable.
 * Validates User. Sets Session variable.
 * 
 */
session_start();
if (isset($_POST['submit']) && ($_POST['submit'] == 'Log In')) {
    $password = md5($_POST['password']);
    $email = $_POST['email'];

    $user = M5\classes\business\UserManager::getUserByEmailPassword($email, $password);

    if ($user == NULL) {
        header("LOCATION:./?login");
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['firstname'] = ucfirst($user->firstname);
        $_SESSION['approvedid'] = md5($_SESSION['email'] . $_SESSION['firstname']);
        $_SESSION['is_admin'] = $user->is_admin;
    }
}

if ($_SERVER['QUERY_STRING'] == 'login') {
    unset($_SESSION['approvedid']);
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
    <?php
    require_once './inc/header.php';
    ?>
    <body style="background-color: #000000  ;">
        <div class="container">
            <div class="row">
                <div class="col-lg-9" style="padding-top:25px;">
                    <a href="./?home"><img class="img-responsive" src="image/logosml.png" alt="Logo"></a>
                </div>
                <?php
                if (isset($_SESSION['approvedid'])) {
                    ?>
                    <div class="col-lg-3" style="padding-top:60px;">
                        <div class="col-lg-6" style="float: right">
                            <form method='post' action="./?login">
                                <input type="submit" value="Log Out" class="btn btn-default btn-lg" />
                            </form>
                        </div>
                        <div class="col-lg-6" style="float: right">
                            <h4 style="color: #FFF056;">Welcome, <?php echo $_SESSION['firstname']; ?>!&nbsp;&nbsp;&nbsp;</h4>
                        </div>
					</div>
                <div class="row" >
				<style>
					.linkheader {
						color: #FFF056;
					}
					a:hover {
						color: #b3b300;
					}
				</style>
				<br/><br/>
			        <div  class="col-md-2" > <a class="linkheader" href="./?home">Home</a></div>
                    <div class="col-md-2" > <a class="linkheader" href="./?update" >Update Profile</a></div>
                    <div class="col-md-2" > <a class="linkheader" href="./?updatepassword" >Change Password</a></div>
                    <div class="col-md-2" > <a class="linkheader" href="./?mailinglist" >Mailing List</a></div>
                    <?php 
                        if ($_SESSION['is_admin']==1){ 
                ?>
                        <div class="col-md-2" > <a class="linkheader" href="./?viewallusers" >Edit Users</a></div>
                        <div class="col-md-2" > <a class="linkheader" href="./?sendbulkmail" >Send Bulk Mail</a></div>
                        <?php
                        }
                        ?>
                </div>

                <?php
                } else {
                ?>
                <div class="col-lg-3" style="padding-top:60px;">
                    <div style="float: right">
                        <form method='post' action="./?login">
                            <input type="submit" value="Log in" class="btn btn-default btn-lg" />  
                        </form>
                    </div>
                    <div style="float: right">
                        <form method='post' action="./?registration">
                            <input type="submit" value="Sign Up" class="btn btn-default btn-lg" />  
                        </form>
                    </div>
                </div>
            </div>
                <?php
                }
                ?>
        <div>
        <?php
        $qstr = explode("=",$_SERVER['QUERY_STRING']);
        if (isset($_SERVER['QUERY_STRING'])) {
            require_once $qstr[0] . '.php';
        } else {
            require_once './main.php';
        }
        require_once './inc/footer.php';
        ?>
        </div>
    </div>
</body>
</html>