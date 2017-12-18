<?php
$host = 'localhost';
$dbname = 'dbbh_laptop';
$usname = 'root';
$pw = '';


function ConnectDatabase()
{
	try 
	{
	    $db = new PDO("mysql:host=localhost;dbname=dbbh_laptop", "root", "");
	} 
	catch (PDOException $e) 
	{
	    echo $e->getMessage();
	    return "";
	}
	return $db;
}


?>