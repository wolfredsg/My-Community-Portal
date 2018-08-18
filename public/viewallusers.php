<?php
/*
 * Validates whether user is logged in
 */
if (!isset($_SESSION['approvedid'])) {
	require_once 'login.php';
} else {
    $user = M5\classes\business\UserManager::getAllUsers();


?>
<div class="row">
    <p></p>
    <div class="col-lg-12" style="background-color: #FFF056;border-style: solid; 
    border-color: #FFF056;border-width: 1px;">
        <p><h3>Please click first name to edit user.</h3></p>
        <?php
        if ($user == "") {
            echo "<h3>No Record Found!</h3>";
        } else {
            if ($_SESSION['is_admin']==1) {
                $link='editusers';
            }
            foreach ($user as $u) {
        ?> 
            <style>
            .contentlink {
                color:black;
            }
            </style>
		    <ul>
                <li>First Name: <a class='contentlink' href = './?<?php echo $link."=".urlencode($u->email)?>'>
                <?php echo $u->firstname; ?></a></li>
                <li>Last Name: <?php echo $u->lastname; ?></li>
            </ul>
            <hr style="border-top: 3px solid #999966;">
        <?php
            }
        }
        ?>
    </div>
</div>
<?php 
}
?>