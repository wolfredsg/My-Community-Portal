<?php
/*
 * Delete user.
 * Edit user
 * 
 */
if (!isset($_SESSION['approvedid'])) {
	require_once 'login.php';
}else{

    require_once './bulkmail.php';

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
