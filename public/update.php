<?php
/*
 * 
 * Validates whether user is logged in.
 * Use seesion variable containing email
 * If record is found, populate the data
 * in the update page.
 */
if (!isset($_SESSION['approvedid'])) {
	require_once 'login.php';
}else{
    $user = M5\classes\business\UserManager::getUserByEmaiL($_SESSION['email']);
?>

<div class="row"><p><br></p></div>
<div class="row">
    <div class="col-lg-7" style="height:606px;background-color: #FFF056;border-style: solid; border-color: #FFF056;border-width: 1px;">
        <form class="form-horizontal" method="post" action="./?updateconfirmation" onsubmit = "return validateEntry();">
           <div class="form-group">
                <div class="col-lg-offset-3 col-lg-8">
                    <h2>Update Profile</h2>
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
                <label for="is_subscribed" class="control-label col-lg-3">Subscribe (1 or 0)</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="is_subscribed" id="is_subscribed" value="<?php echo $user->is_subscribed ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-3 col-lg-8">
                    <input type="submit" value="Update Now!" class="btn btn-default btn-lg" />    
                </div>
            </div>
        </form>
        <script>
        function validateEntry(event){
            var firstname = document.getElementById("firstname");
            var lastname = document.getElementById("lastname");
            var company = document.getElementById("company");
            var city = document.getElementById("city");
            var country = document.getElementById("country");
            var is_subscribed = document.getElementById("is_subscribed");
            //console.log(password.value)
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
            if (is_subscribed.value === ""||(is_subscribed.value !="1"&&is_subscribed.value !="0")){
                alert("Please enter 0 if you do not want, or 1 if you want to subscribe to bulk mail.");
                return false;
            }
            
        }
        </script>
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
