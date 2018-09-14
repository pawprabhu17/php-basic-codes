<?php

$dbName ="alphacrm";

$drop ="DROP DATABASE".$dbName;

if(mysqli_query($drop))
{
	echo "DROP DATABASE".$dbName."-Successful.";
	
}
else
{
	echo "DROP DATABASE ".$dbName." -Failed";
}
?>