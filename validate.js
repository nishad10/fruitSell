var empty;
var totalcost;
var nameValid = false;
var applesValid = false;
var orangesValid = false;
var bananasValid = false;

document.addEventListener("DOMContentLoaded", function(event)
{
    totalcost = document.getElementById('totalcost');

    empty = true;
    b = document.getElementById("submitBtn");
    b.disabled = true;
});

// Check whether name is valid everytime user changes input
function validateName(event)
{
    var item = event.id; // Get id of trigger object
    var value = event.value; // Get value of trigger object

    if (value === "" || !(/^[a-zA-Z0-9 ]*$/.test(value)))
    {
        alert("You did not enter a valid name.");
        document.getElementById(item).focus();
        nameValid = false;
    }
    else
        nameValid = true;


    CheckForm();
}

// Check whether number of fruits is valid everytime user changes input
function validateNumber(event)
{
    var item = event.id; // Get id of trigger object
    var value = event.value; // Get value of trigger object

    if (isNaN(value))
    {
        alert("This is not a number. Please enter a number!");
        document.getElementById(item).focus();

        if (item == "apples")
            applesValid = false;
        else if (item == "oranges")
            orangesValid = false;
        else if (item == "bananas")
            bananasValid = false;

        totalcost.value = 'NaN';
    }
    else
    {
        if (item == "apples")
            applesValid = true;
        else if (item == "oranges")
            orangesValid = true;
        else if (item == "bananas")
            bananasValid = true;

        CalculateTotalCost();
    }

    CheckForm();
}

// Calculate the total cost of the fruits
function CalculateTotalCost()
{
    var apples = document.getElementById('apples').value;
    var oranges = document.getElementById('oranges').value;
    var bananas = document.getElementById('bananas').value;

    totalcost.value = ((apples * 0.69) + (oranges * 0.59) + (bananas * 0.39)).toFixed(2);
}

function CheckForm()
{
    b.disabled = !(nameValid && applesValid && orangesValid && bananasValid);
}