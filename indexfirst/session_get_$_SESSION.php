<?php

//same domain ke alag  alag pages me session ko access krne ke liye----

session_start();
if(isset($_SESSION['username'])){
  echo "wellcome '" . $_SESSION['username'] ."'";
echo "<br/>";
echo "your fav catogry is '" . $_SESSION['favcat']."'";
echo "<br/>we have saved your session";
}else{
    echo "<br/>Please login to continue...";
}




?>