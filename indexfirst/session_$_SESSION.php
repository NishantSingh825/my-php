<?php
//What si session:
//used to manage infromation across difference pages..
//Verify the user login info/-----------------


session_start();// starting me he likhna hai..  
$_SESSION['username'] = "Nishant";
$_SESSION['favcat'] = "Books";
echo "We have saved your session";

// or also use and get-----
//  $_SESSION['name'] = 'John';
// echo "<br>";
//  echo $_SESSION['username'];
// echo "<br>";
//session_destroy();

//  echo $_SESSION['name'];
// echo "<br>";



?>