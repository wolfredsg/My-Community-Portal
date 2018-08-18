<?php
//$user = new \M5\entity\User();
//$user = M5\data\UserManagerDB::getUser($user);
if (!isset($_SESSION['approvedid'])) {
	require_once 'login.php';
}else{
    /*
 * Email of the user is passed to the
 * databse and then processed.
 * Validates whether user is logged in.
 * If record is found, populate the data
 * in the searchlist page.
 */
$str = $_POST['searchbar'];
$user = M5\classes\business\UserManager::searchUserBy($str);
	
?>
<div class="row">
    <p></p>
    <div class="col-lg-12" style="height:606px;background-color: #FFF056;border-style: solid; border-color: #FFF056;border-width: 1px;">
        
        <?php

        if ($user[0] == "") {
            echo "<h3>No Record Found!</h3>";
        }else{
            if ($_SESSION['is_admin']==1){
                $link='editusers';

            }
            else {
                $link='userprofile';
            }
        ?>    
            <h3>Please click first name to view user.</h3>
        <?php
            foreach ($user as $u) {
        ?> 
            
		   <ul>
                <li>First Name: <a style="color:black"  href = './?<?php echo $link."=".urlencode($u->email)?>'><?php echo $u->firstname; ?></a></li>
                <li>Last Name: <?php echo $u->lastname; ?></li>
                <li>Company: <?php echo $u->company; ?></li>
                <li>City: <?php echo $u->city; ?></li>
                <li>Country: <?php echo $u->country; ?></li>
                
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