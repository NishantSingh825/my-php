<?php

//LOGOUT------------
session_start();
session_unset();//sare variable ke unset krne ke liye
session_destroy();//session ko destroy krne ke liye

echo "You have been LogOut"
?>