<?php
/*
 * Gets email of the user.
 * Passed to the method getUserByEmail.
 * Validates whether user is logged in.
 * If record is found, populate the data 
 * in the searchlist page.
 */
$email = $_POST['email'];
$user = M5\classes\business\UserManager::getUserByEmail($email);

if (!isset($_SESSION['approvedid'])) {
	require_once 'login.php';
}else{
?>
<div class="row">
    <p>
    <div class="col-lg-12" style="height:606px;background-color: #FFF056;border-style: solid; border-color: #FFF056;border-width: 1px;">
        <br>
        <?php
        if ($user == NULL) {
            echo "<h3>No Record Found!</h3>";
        }else{
        ?>
		    <ul>
                <li>First Name: <?php echo $user->firstname; ?></li>
                <li>Last Name: <?php echo $user->lastname; ?></li>
                <li>Email: <?php echo $user->email; ?></li>
                <li>Company: <?php echo $user->company; ?></li>
                <li>City: <?php echo $user->city; ?></li>
                <li>Country: <?php echo $user->country; ?></li>
                <li>Is_Admin: <?php echo $user->is_admin; ?></li>
                <li>Is_Block: <?php echo $user->is_block; ?></li>
            </ul>
	    <?php
        }
        ?>
    </div>
</div>
<?php 
}
?>