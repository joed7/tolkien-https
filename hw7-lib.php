<?php
//Name: hw7-lib.php
//Purpose: DB connection file
//Author: Rohit Gupta rohit.gupta@colorado.edu
//Version: 1.0
//Date : 13-Mar-2016

function connect(&$db){
	$mycnf="/etc/hw5-mysql.conf";
	if(!file_exists($mycnf)){
		echo "Error file not found: $mycnf";
		exit;
		
	}

	$mysql_ini_array=parse_ini_file($mycnf);
	$db_host=$mysql_ini_array["host"];
	$db_user=$mysql_ini_array["user"];
	$db_pass=$mysql_ini_array["pass"];
	$db_port=$mysql_ini_array["port"];
	$db_name=$mysql_ini_array["dbName"];

	$db = mysqli_connect($db_host,$db_user,$db_pass,$db_name,$db_port);
	
	if(!$db){
	
		print "Error connecting to DB:" . mysqli_connect_error();
		exit;

	}else{

	}	
}

function getWhiteListIP(){
	$ipList = array();
	array_push($ipList,'198.18.2.22');
	return $ipList;
}
#$a = Null;
#connect($a);

?>
