<?php
$onoroff = $_GET["state"]; // Declares the request from index.html as a variable
$textfile = "OnOff.html"; // Declares the name and location of the .txt file
 
$fileLocation = "$textfile";
$fh = fopen($fileLocation, 'w') or die("Something went wrong!"); // Opens up the .txt file for writing and replaces any previous content
if($onoroff == 1) {
	fwrite($fh, "$");}
else {
	fwrite($fh, "@");}
fclose($fh); 
 
header("Location: index.html"); // Return to frontend (index.html)
?>