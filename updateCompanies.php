<?php

$hostname ="localhost";
$username ="root";
$password ="";



$dbConnected= @mysqli_connect($hostname,$username,$password);
$dbSuccess= true;
$dbName= "alphacrm";

if($dbConnected)
{
	

} else {
		echo "MySQL connection FAILED<br /><br />";
		$dbSuccess= false;
}


if($dbSuccess)
{
	$companyUpdate = "UPDATE tCompany SET name ='SUFIYAAN' WHERE id > 1";
	mysqli_select_db($dbConnected,$dbName);
	if(mysqli_query($dbConnected,$companyUpdate))
	{
		echo "UPDATE INTO tCompany - Successful.<br /><br />";	
	}else{
    	echo "ERROR: Could not able to execute $company . ". mysqli_error($dbConnected);
	}
}
?>