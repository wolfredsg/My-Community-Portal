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
        <form class="form-horizontal" method="post" action="./?editsubscriptionconfirmation" >
           <div class="form-group">
                <div class="col-lg-offset-3 col-lg-8">
                    <h2>Subscribe To Mailing List</h2>
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
                <label for="password" class="control-label col-lg-3"></label>
                <div class="col-lg-8">
                <label for="mailingList">Select list (select one):</label>
                    <select class="form-control" name="mailingList">
                        <option value="1">Subscribe to mailing list.</option>
                        <option value="0">Unsubscribe to mailing list.</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label for="confirm" class="control-label col-lg-3"></label>
                <div class="col-lg-8">
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-lg-offset-3 col-lg-8">
                    <input type="submit" name = "editSubscription" value="Submit" class="btn btn-default btn-lg" />    
                </div>
            </div>
        </form>
    </div>
</div>


<div class="row">
    <div class="col-lg-12"><p><br></p>
    </div>
</div>

<?php 
}
?>
