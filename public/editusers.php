<?php
/*
 *Validates connection
 *Validates email of user 
 */
if (!isset($_SESSION['approvedid'])) {
	require_once 'login.php';
}else{
    if(empty($qstr[1])){
        $email = $_SESSION['email'];
        } else {
            $email = urldecode($qstr[1]);
        }
$user = M5\classes\business\UserManager::getUserByEmaiL($email);
?>

<div class="row"><p><br></p></div>
<div class="row">
    <div class="col-lg-7" style="height:606px;background-color: #FFF056;border-style: solid; border-color: #FFF056;border-width: 1px;">
        <form class="form-horizontal" method="post" action="./?updateconfirmation" onsubmit = "return validateEdit()">
           <div class="form-group">
                <div class="col-lg-offset-3 col-lg-8">
                    <h2>Edit Users</h2>
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
                <label for="firstname" class="control-label col-lg-3">First Name:</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="firstname" id="firstname"  value="<?php echo $user->firstname ?>">
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="lastname" class="control-label col-lg-3">Last Name:</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="lastname" id="lastname"  value="<?php echo $user->lastname ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="company" class="control-label col-lg-3">Company Name</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="company" id="company"  value="<?php echo $user->company ?>">
                </div>
            </div>
           <div class="form-group">
                <label for="city" class="control-label col-lg-3">City</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="city" id="city"  value="<?php echo $user->city ?>">
               </div>
            </div>
            <div class="form-group">
                <label for="country" class="control-label col-lg-3">Country</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="country" id="country" value="<?php echo $user->country ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="is_admin" class="control-label col-lg-3">Set Admin (1 or 0)</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="is_admin" id="is_admin" value="<?php echo $user->is_admin ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="is_block" class="control-label col-lg-3">Block User (1 or 0)</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="is_block" id="is_block" value="<?php echo $user->is_block ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="is_subscribed" class="control-label col-lg-3">Subscribe (1 or 0)</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="is_subscribed" id="is_subscribed" value="<?php echo $user->is_subscribed ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-3 col-lg-8">
                    <input type="submit" value="Edit User" name = "edit" class="btn btn-default btn-lg" />  
                    <input type="submit" value="Delete User" name = "delete" class="btn btn-default btn-lg" />    
                </div>
            </div>
       </form>
       <script>
        function validateEdit(event){
            var firstname = document.getElementById("firstname");
            var lastname = document.getElementById("lastname");
            var company = document.getElementById("company");
            var city = document.getElementById("city");
            var country = document.getElementById("country");
            var is_admin = document.getElementById("is_admin");
            var is_block = document.getElementById("is_block");
            var is_subscribed = document.getElementById("is_subscribed");
            if (firstname.value === ""){
                alert("Please enter first name");
                return false;
            }
            if (lastname.value === ""){
                alert("Please enter last name");
                return false;
            }
            if (company.value === ""){
                alert("Please enter company");
                return false;
            }
            if (city.value === ""){
                alert("Please enter city");
                return false;
            }
            if (country.value === ""){
                alert("Please enter country");
                return false;
            }
            if (is_admin.value === ""||(is_admin.value !="1"&&is_admin.value !="0")){
                alert("Please enter 0 for user or 1 for admin");
                return false;
            }
            if (is_block.value === ""||(is_block.value !="1"&&is_block.value !="0")){
                alert("Please enter 0 if user is not blocked, or 1 for blocked");
                return false;
            }
            if (is_subscribed.value === ""||(is_subscribed.value !="1"&&is_subscribed.value !="0")){
                alert("Please enter 0 if user is not subscribed, or 1 if subscribed to bulk mail.");
                return false;
            }
            
        }
        </script>
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
