<?php
$onoroff = $_GET["state"]; // Declares the request from index.html as a variable
$textfile = "OnOff.html"; // Declares the name and location of the .txt file
 
$fileLocation = "$textfile";
$fh = fopen($fileLocation, 'w') or die("Something went wrong!"); // Opens up the .txt file for writing and replaces any previous content
fwrite($fh, $onoroff); // Writes it to the .txt file
fclose($fh); 
 
header("Location: index.php"); // Return to frontend (index.html)
?>