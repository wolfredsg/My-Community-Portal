<?php
if (!isset($_SESSION['approvedid'])) {
	require_once 'login.php';
} else {
$email = urldecode($qstr[1]);
$user = M5\classes\business\UserManager::getUserByEmail($email);   
?>
<div class="row">
    <p></p>
    <div class="col-lg-12" style="height:606px;background-color: #FFF056;border-style: solid; border-color: #FFF056;border-width: 1px;">
        <br>
        <ul>
            <li>First Name: <?php echo $user->firstname; ?></li>
            <li>Last Name: <?php echo $user->lastname; ?></li>
            <li>Email: <?php echo $user->email; ?></li>
            <li>Company: <?php echo $user->company; ?></li>
            <li>City: <?php echo $user->city; ?></li>
            <li>Country: <?php echo $user->country; ?></li>
            <li>Is_Admin: <?php echo $user->is_admin; ?></li>
            <li>Is_Block: <?php echo $user->is_block; ?></li>
            <li>Is_Subscribed: <?php echo $user->is_subscribed; ?></li>
	    </ul>
	</div>
</div>
<?php
}
?>

