
<?php
/**
 * Validates whether user is
 * logged in before accessing page
 */
if (!isset($_SESSION['approvedid'])) {
	require_once 'login.php';
}else{
?>

<div class="row"><p><br></p></div>
<div class="row">
    <p></p>
    <form method="post" action="./?searchlist" >
        <input type="text" name="searchbar" placeholder="Search User"/>
        <input type="submit" name="search" value="Find" />
    </form>
    <p></p>
</div>
<div class="row"><p><br></p></div>
<div class="row">
    <div class="col-lg-7" style="height:314px;background-color: #FFF056;border-style: solid; border-color: #FFF056;border-width: 1px;">
        <img src="image/window.png" alt="Projects" style="width:100%">
    </div>
    <div class="col-lg-5" style="height:314px;border-style: solid; border-color: #FFF056;border-width: 5px;">
        <img class="img-responsive" style="width:95%;display:block;" src="image/homepage.png" alt="homepage">
    </div>
</div>
<div class="row"><p><br></p></div>
<div class="row">
    <div class="col-lg-3">
        <div class="thumbnail" style="background-color: #DFE2DB;">
            <a href="image/projects.png" target="_blank">
                <img src="image/projects.png" alt="Projects" style="width:100%">
                <div class="caption">
                    <p class="text-center" style="color: #191919"> <br><br>PROJECTS <br><br>
                        Find the right <br>projects.
                    </p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="thumbnail" style="background-color: #FFFFFF;">
            <a href="image/news.png" target="_blank">
                <img src="image/news.png" alt="News" style="width:100%">
                <div class="caption">
                    <p class="text-center" style="color: #191919"> <br><br>NEWS <br><br>
                        Get in touch with <br>the community.
                    </p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="thumbnail" style="background-color: #DFE2DB;">
            <a href="image/activity.png" target="_blank">
                <img src="image/activity.png" alt="Activity" style="width:100%">
                <div class="caption">
                    <p class="text-center" style="color: #191919"> <br><br>ACTIVITIES <br><br>
                        Fancy improving your skills? <br>Find out here.
                    </p>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="thumbnail" style="background-color: #FFFFFF;">
            <a href="image/partners.png" target="_blank">
                <img src="image/partners.png" alt="Partners" style="width:100%">
                <div class="caption">
                    <p class="text-center" style="color: #191919"> <br><br>PARTNERS <br><br>
                        Looking for a new job? <br> Find out here.
                    </p>
                </div>
            </a>
        </div>
    </div>
</div>
<?php 
}
?>