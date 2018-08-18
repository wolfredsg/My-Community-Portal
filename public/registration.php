<div class="row"><p><br></p></div>
<div class="row">
    <div class="col-lg-7" style="height:606px;background-color: #FFF056;border-style: solid; border-color: #FFF056;border-width: 1px;">
        <form class="form-horizontal" method="post" action="./?registrationconfirmationemail" onsubmit = "return validatePassword();">
            <div class="form-group">
                <div class="col-lg-offset-3 col-lg-8">
                    <h2>Join now for free!</h2>
                </div>
            </div>
            <div class="form-group">
                <label for="firstname" class="control-label col-lg-3">First Name:</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="firstname" id="firstname"  placeholder="e.g. John">
                </div>
            </div>
            <div class="form-group">
                <label for="lastname" class="control-label col-lg-3">Last Name:</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="lastname" id="lastname"  placeholder="e.g. Lemon">
                </div>
            </div>
            <div class="form-group">
                <label for="company" class="control-label col-lg-3">Company Name</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="company" id="company"  placeholder="e.g. ABC Company">
                </div>
            </div>
            <div class="form-group">
                <label for="city" class="control-label col-lg-3">City</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="city" id="city"  placeholder="e.g. London">
                </div>
            </div>
            <div class="form-group">
                <label for="country" class="control-label col-lg-3">Country</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="country" id="country"  placeholder="e.g. United Kingdom">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="control-label col-lg-3">Your Email</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="email" id="email"  placeholder="e.g. email@sdlink.com">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="control-label col-lg-3">Password</label>
                <div class="col-lg-8">
                    <input type="password" class="form-control" name="password" id="password"  placeholder="Type your password.">
                </div>
            </div>
            <div class="form-group">
                <label for="confirm_password" class="control-label col-lg-3">Confirm Password</label>
                <div class="col-lg-8">
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password"  placeholder="Type your password again.">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-3 col-lg-8">
                    <label><input type="checkbox">I accept Privacy Policy and Terms and Conditions</label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-3 col-lg-8">
                    <input type="submit" value="Register Now!" class="btn btn-default btn-lg" />    
                </div>
            </div>
        </form>
        <script>
        function validatePassword(event){
            var password = document.getElementById("password") , confirm_password = document.getElementById("confirm_password");
            var firstname = document.getElementById("firstname");
            var lastname = document.getElementById("lastname");
            var email = document.getElementById("email");
            var company = document.getElementById("company");
            var city = document.getElementById("city");
            var country = document.getElementById("country");
            
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
            if (email.value === ""){
                alert("Please enter email");
                return false;
            }
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
    </div>
    <div class="col-lg-5" style="height:606px;border-style: solid; border-color: #FFF056;border-width: 5px;">
        <img class="img-responsive" style="display:block;" src="image/registrationpage.png" alt="Logo">
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <p><br></p>
    </div>
</div>


