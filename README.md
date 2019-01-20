#  Fruit selling website

 
    The program contains four source files index.html, validate.js, formAction.php, receipt.php.

The program uses the index file as a base and then the index file then references the validate and the formAction files.The index file is the structure of the first page of our program and serves as a forefront. We give users space to enter their input on this page and then use java script to then take this input and validate it.

The validate file has functions written in javascript that make sure all the inputs are correct and if not then shows NaN for the total cost and also disables the Submit button if the inputs are not valid. When the inputs are all checked the index file gets a return value( true or false) from the appropriate called functions from the validate file and then if the inputs are valid it processes the form after the submit button is clicked.

The index file now references the formAction.php file after the form is complete. Here the input is stored and worked on as needed. We also use a receipt.php file to show the output properly. We use the header function of php to reference this receipt file which finally shows you the last output.

    Bootstrapcss:

This folder contains the framework files that are compiled and ready to run. The js and css subfolders contain the javascript and css frameworks respectively. The validate.js file is placed in the bootstrapcss/js directory I did not have to make a custom css file as all the formatting I needed was already present.
