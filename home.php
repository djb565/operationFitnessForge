<?php
require 'database.php';

if (isset($_SESSION['id'])) {
    $loggedin = True;
    $userID = $_SESSION['id'];
} else {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="home.css">
    </head>
    <body>
        <form id="logoutForm">
            <button id="logoutbtn" formaction="logout.php">Logout</button>
        </form>
        <div id="optioncontainer">
            <form id="optionform" method="post">
                <div id="createplan" class="not-selectable" onclick='goToCreatePlan()'>
                    Create a new plan
                </div>
                <div id="deleteplan" class="not-selectable" onclick='goToDeletePlan()'>
                    Delete a plan
                </div>
                <div id="viewplan" class="not-selectable" onclick='goToViewPlan()'>
                    View created plans
                </div>
                <div id="viewtrackprogress" class="not-selectable" onclick='goToTrackProgress()'>
                    View/Track Progress
                </div>    
            </form>
        </div>
    </body>
    <script src="home.js"></script>
</html>