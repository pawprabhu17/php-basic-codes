<?php

$hostname ="localhost";
$username ="root";
$password ="";



$dbConnected= @mysqli_connect($hostname,$username,$password);
$dbSuccess= true;
$dbName= "alphacrm";

if($dbConnected)
{
	if(!dbName)
	{
		echo "DB connectipon FAILED<br /><br />";
		$dbSuccess= false;	
	}

} else {
		echo "MySQL connection FAILED<br /><br />";
		$dbSuccess= false;
}


if($dbSuccess)
{
	//SQL SCRIPT TO CREATE TABLE tCompany
	
	$createCoyTable = "CREATE TABLE tCompany(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    address VARCHAR(50) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
	)";
	
	mysqli_select_db($dbConnected,$dbName);
	if(mysqli_query($dbConnected,$createCoyTable))
	{
		echo "CREATE TABLE tCompany - Successful.<br /><br />";	
	}else{
    echo "ERROR: Could not able to execute $createCoyTable . ". mysqli_error($dbConnected);
		}
	

   
	$createPersonTable = "CREATE TABLE tPerson(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
	)";
	
	mysqli_select_db($dbConnected,$dbName);
	if(mysqli_query($dbConnected,$createPersonTable))
	{
		echo "CREATE TABLE tPerson - Successful.<br /><br />";	
	}else{
    echo "ERROR: Could not able to execute $createPersonTable. " . mysqli_error($dbConnected);
	}
}
?>