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
        <form class="form-horizontal" method="post" action="./?messagesentconfirmation" onsubmit = "return validateMail()">
           <div class="form-group">
                <div class="col-lg-offset-3 col-lg-8">
                    <h2>Send Mail To Subscribed Users</h2>
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
                <label for="subject" class="control-label col-lg-3">Subject:</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="subject" id="subject"  placeholder="Type Subject Here...">
                    
                </div>
            </div>
            <div class="form-group">
                <label for="mailmessage" class="control-label col-lg-3">Message:</label>
                <div class="col-lg-8">
                    <textarea class="form-control rounded-0" rows="15" name="mailmessage" id="mailmessage"  placeholder="Type Your Message Here..."></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-3 col-lg-8">
                    <input type="submit" value="Send" name = "sendbulkmessage" class="btn btn-default btn-lg" />  
                    <input type="reset" value="Clear" name = "clear" class="btn btn-default btn-lg" />    
                </div>
            </div>
       </form>
       <script>
        function validateMail(event){
            var subject = document.getElementById("subject");
            var message = document.getElementById("mailmessage");
            
            if (subject.value === ""){
                alert("Empty Subject");
                return false;
            }
            if (message.value === ""){
                alert("Empty Message");
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
