<?php

$hostname = "localhost";
$username = "root";
$password = "";

$dbName = "alphacrm";
$dbConnected = @mysqli_connect($hostname,$username,$password,$dbName);

$dbSuccess = true;

if($dbConnected)
{
	}
	else{
		echo "SQL Connection FAILED<br /><br />";
		$dbSuccess =false;	
	}

 
if($dbSuccess)
{
	
	$company = "INSERT INTO tCompany (
	name ,address ,email	
	)
	VALUES
	(
	'PAWAN','CHANDERKOTE(J&K)','pawprabhu17@gmail.com'	
	)";
	mysqli_select_db($dbConnected,$dbName);
	if(mysqli_query($dbConnected,$company))
	{
		echo "INSERT INTO tCompany - Successful.<br /><br />";	
	}else{
    	echo "ERROR: Could not able to execute $company . ". mysqli_error($dbConnected);
	}
}
?>