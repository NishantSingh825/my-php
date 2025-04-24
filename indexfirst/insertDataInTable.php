<?php
$servername= "localhost";  //your server name or IP address
$username = "root";  	//your username of MySQL
$password = "";        // your password for the above user
$mydb = "MynewDb";       //Name of your database

//Create connection
$conn = mysqli_connect($servername, $username, $password, $mydb);
if($conn){
 echo "connection succesfully!";

}else{
    Die("not connection");
}

$id = "";
$email = "nishant@gmail.com";
$sql = "INSERT INTO mytable (id, name) VALUE ('$id', '$email')";

if(mysqli_query($conn, $sql)){
    echo "record has been succsefully!";
}else{
    Die("not succesfully".mysqli_error($conn));
}
?> 