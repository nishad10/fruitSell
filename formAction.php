<?php

 if(isset($_POST["Submit"]))
{	
	$name = $_POST["name"];
	$payment = $_POST["payment"];
    $apples = $_POST['apples'];
    $oranges = $_POST['oranges'];
    $bananas = $_POST['bananas'];
    $total = $_POST["totalCost"];
    initiatePrint($apples, $oranges, $bananas);
    header("Location: receipt.php?" .
			"name=$name&" .
            "apples=$apples&" .
            "oranges=$oranges&" .
            "bananas=$bananas&" .
            "payment=$payment&" .
            "total=$total");
}
else
    exit;

function initiatePrint($apples, $oranges, $bananas)
{
    $temp = openToRead();
    $temp["apples"] += $apples;
    $temp["oranges"] += $oranges;
    $temp["bananas"] += $bananas;
    WriteToFile($temp);
}

function openToRead()
{
    $file = fopen("order.txt", "r") or exit("Cant read from file order.txt!");
    $arrayofEntries = array("apples" => 0, "oranges" => 0, "bananas" => 0);
    foreach ($arrayofEntries as $fruit => $quantity)
    {
        $line = fgets($file);
        $quantity = explode(":", $line);
        $arrayofEntries[$fruit] = (int)$quantity[1];
    }
    fclose($file);
    return $arrayofEntries;
}


function WriteToFile($arrayofEntries)
{
    $file = fopen("order.txt", "w");
   
    foreach ($arrayofEntries as $fruit => $quantity)
        fwrite($file, "Total number of " .$fruit. " : " .$quantity. "\r\n");
    fclose($file);
}
?>