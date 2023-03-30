let fitnessSelector = document.getElementById("fitnessGoalSelector");
let strengthSelector = document.getElementById("strengthSelector");
let muscleSelector = document.getElementById("muscleSelector");
let focusSelector = document.getElementById("focusSelector");
let upperFocusSelector = document.getElementById("upperFocusSelector");
let lowerFocusSelector = document.getElementById("lowerFocusSelector");
let fitnessGoal = fitnessSelector.value;
let currentFocus = upperFocusSelector.value;
let upperLowerStrength = strengthSelector.value;
let upperLowerMuscle = muscleSelector.value;
let isStrength = true;
let isUpper = true;
let isWeightLoss = false;

initialize();

function initialize() {

    if (fitnessGoal === fitnessSelector.options[0].value) {
        enable(strengthSelector);
    }
    if (upperLowerStrength === strengthSelector.options[0].value) {
        enable(upperFocusSelector);
    }

    strengthSelector.addEventListener('change', function () {
        upperLower = strengthSelector.value;
        upperLowerStrength = strengthSelector.value;
        editUpperLower(upperLower);
    });

    muscleSelector.addEventListener('change', function () {
        upperLower = muscleSelector.value;
        upperLowerMuscle = muscleSelector.value;
        editUpperLower(upperLower);
    });

    lowerFocusSelector.addEventListener('change', function () {
        goal = fitnessSelector.value;
        if (goal === fitnessSelector.options[0].value) {
            upperorlower = strengthSelector.value;
            if (upperorlower === strengthSelector.options[0].value) {
                currentFocus = upperFocusSelector.value;
            } else if (upperorlower === strengthSelector.options[1].value) {
                currentFocus = lowerFocusSelector.value;
            }
        } else if (goal === fitnessSelector.options[2].value) {
            upperorlower = muscleSelector.value;
            if (upperorlower === muscleSelector.options[0].value) {
                currentFocus = upperFocusSelector.value;
            } else if (upperorlower === muscleSelector.options[1].value) {
                currentFocus = lowerFocusSelector.value;
            }
        }
    });

    upperFocusSelector.addEventListener('change', function () {
        goal = fitnessSelector.value;
        if (goal === fitnessSelector.options[0].value) {
            upperorlower = strengthSelector.value;
            if (upperorlower === strengthSelector.options[0].value) {
                currentFocus = upperFocusSelector.value;
            } else if (upperorlower === strengthSelector.options[1].value) {
                currentFocus = lowerFocusSelector.value;
            }
        } else if (goal === fitnessSelector.options[2].value) {
            upperorlower = muscleSelector.value;
            if (upperorlower === muscleSelector.options[0].value) {
                currentFocus = upperFocusSelector.value;
            } else if (upperorlower === muscleSelector.options[1].value) {
                currentFocus = lowerFocusSelector.value;
            }
        }
    });

    fitnessSelector.addEventListener('change', function () {
        fitnessGoal = fitnessSelector.value;
        editOptions(fitnessGoal);
        editUpperLower(upperLowerStrength);
        console.log("isUpper: ", isUpper);
        console.log("isStrength: ", isStrength);
        console.log("currentFocus: ", currentFocus);
    });
}

function editUpperLower(upperLower) {
    goal = fitnessSelector.value;
    if (goal === fitnessSelector.options[0].value) {
        if (upperLower === strengthSelector.options[0].value) {
            isUpper = true;
            enable(upperFocusSelector);
            disable(lowerFocusSelector);
            currentFocus = upperFocusSelector.value;
        } else if (upperLower === strengthSelector.options[1].value) {
            isUpper = false;
            enable(lowerFocusSelector);
            disable(upperFocusSelector);
            currentFocus = lowerFocusSelector.value;
        }
    } else if (goal === fitnessSelector.options[2].value) {
        if (upperLower === muscleSelector.options[0].value) {
            isUpper = true;
            enable(upperFocusSelector);
            disable(lowerFocusSelector);
            currentFocus = upperFocusSelector.value;
        } else if (upperLower === muscleSelector.options[1].value) {
            isUpper = false;
            enable(lowerFocusSelector);
            disable(upperFocusSelector);
            currentFocus = lowerFocusSelector.value;
        }
    }
}

function editOptions(fitnessGoal) {
    if (fitnessGoal === fitnessSelector.options[0].value) {
        disable(muscleSelector);
        enable(strengthSelector);
        editUpperLower(upperLowerStrength);
        isStrength = true;
    } else if (fitnessGoal === fitnessSelector.options[2].value) {
        disable(strengthSelector);
        enable(muscleSelector);
        editUpperLower(upperLowerMuscle);
        isStrength = false;
    } else if (fitnessGoal === fitnessSelector.options[1].value) {
        disable(strengthSelector);
        disable(muscleSelector);
        disable(upperFocusSelector);
        disable(lowerFocusSelector);
        isWeightLoss = true;
    }
}

function disable(selector) {
    selector.classList.add("hide");
    selector.classList.remove("show");
}

function enable(selector) {
    selector.classList.add("show");
    selector.classList.remove("hide");
}


// How to read a file that is in the directory using JQuery
// Place to display data
let display = document.getElementById("displayPlan");

// Use JQuery's .get function to read the file
$.get('workoutPlans/test.txt', function (data) {
   // Do something with the data we got from the file
   content = data;
   console.log(content);
}, "text");
