<?php
/*
 * Validates whether user is logged in
 */
if (!isset($_SESSION['approvedid'])) {
	require_once 'login.php';
}else{
?>
<div class="row"><p><br></p></div>
<div class="row">
    <div class="col-lg-7" style="height:606px;background-color: #FFF056;border-style: solid; border-color: #FFF056;border-width: 1px;">
        <form class="form-horizontal" method="post" action="./?updatepasswordconfirmation" onsubmit="return validatePassword()" >
           <div class="form-group">
                <div class="col-lg-offset-3 col-lg-8">
                    <h2>Update Password</h2>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-8">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-8">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-8">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-8">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-8">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="control-label col-lg-3">Password</label>
                <div class="col-lg-8">
                    <input type="password" class="form-control" name="password" id="password"  placeholder="Type your password.">
                </div>
            </div>
            <div class="form-group">
                <label for="confirm" class="control-label col-lg-3">Confirm Password</label>
                <div class="col-lg-8">
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password"  placeholder="Type your password again.">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-3 col-lg-8">
                    <input type="submit" id = "updatepwd" value="Update Now!" class="btn btn-default btn-lg" />    
                </div>
            </div>
        </form>
    </div>
</div>
<script>
        function validatePassword(event){
            var password = document.getElementById("password") , confirm_password = document.getElementById("confirm_password");
            if (password.value === ""){
                alert("Please enter password");
                return false;
            }
            if (confirm_password.value === ""){
                alert("Please validate password");
                return false;
            }
            if(password.value != confirm_password.value) {
                alert("Passwords Don't Match");
                return false;
            } 
        }
</script>
<div class="row">
    <div class="col-lg-12"><p><br></p>
    </div>
</div>

<?php 
}
?>
