<?php
//Name: logout.php
//Purpose: Logout Page
//Author: Rohit Gupta rohit.gupta@colorado.edu
//Version: 1.0
//Date : 13-Mar-2016
session_start();
session_destroy();
header("Location: /hw7/login.php");
?>