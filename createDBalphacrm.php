<?php

$hostname ="localhost";
$username ="root";
$password ="";

$databaseName ="alphacrm";

$dbConnected= @mysqli_connect($hostname,$username,$password);


$dbSuccess= true;

if($dbConnected)
{
		
} else {
		echo "MySQL connection FAILED<br /><br />";
		$dbSuccess= false;
}
//Execute only if connections are successful
if($dbSuccess)
{
	$dbName = "alphacrm";

	
	if(mysqli_query($dbConnected,"Create DATABASE ".$dbName))
	{
		echo "Create DATABASE ".$dbName."'- Successful.";	
	}
	else
	{
		echo "Create DATABASE ".$dbName."'- Failed.";	
	}
}
?>