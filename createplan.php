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
        <title>Create Plan</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="createplan.css">
    </head>
    <div id="title">The Fitness Forge</div>
    <body>
        <div id="setupPlanContainer">
            <select id="fitnessGoalSelector">
                <option id="gainStrength">Gain Strength</option>
                <option id="loseWeight">Lose Weight</option>
                <option id="gainMuscle">Gain Muscle</option>
            </select>
            <select id="strengthSelector" class="hide">
                <option id="upperBody">Gain strength in upper body (chest/triceps/back/biceps)</option>
                <option id="lowerBody">Gain strength in lower body (glutes/hamstrings/quads/calves)</option>
            </select>
            <select id="muscleSelector" class="hide">
                <option id="muscleUpperBody">Gain muscle in upper body (chest/triceps/back/biceps)</option>
                <option id="muscleLowerBody">Gain muscle in lower body (glutes/hamstrings/quads/calves)</option>
            </select>
            <select id="upperFocusSelector" class="hide">
                <option id="focusBack">Prioritize back</option>
                <option id="focusChest">Prioritize chest</option>
                <option id="focusTricep">Prioritize triceps</option>
                <option id="focusBicep">Prioritize biceps</option>
            </select>
            <select id="lowerFocusSelector" class="hide">
                <option id="focusHamstrings">Prioritize hamstrings</option>
                <option id="focusQuads">Prioritize quads</option>
                <option id="focusCalves">Prioritize calves</option>
            </select>
            <form id="generateplan" method="post">
                <button type="submit" id="genbtn">Generate</button>
            </form>
        </div>
        <div id="displayPlanContainer">
            <div id="displayPlan">

            </div>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="createplan.js"></script>
</html>