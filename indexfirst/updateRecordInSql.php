<?php

$conn = mysqli_connect("localhost", "root", "", "MynewDb");
if(!$conn){
    die("connection was not connection". mysqli_connect_error());
}else{
   echo "connection succesfully..<br/>";
}





$sql = " UPDATE mytable3 SET password = '&^%$#@!' WHERE email = 'KJHV@KJG.COM' ";
$result = mysqli_query($conn, $sql);
if(!$result ){
    die("updated was not connection". mysqli_connect_error());
}else{
   echo " update succesfull <br/> <br/>";
}


//find the no. record in table5
$num = mysqli_affected_rows($conn);
echo $num;
echo " record found in DB<br/><br/>";

//$sql = "UPDATE `data2` SET `sno.` = '4' WHERE `data2`.`sno.` = 2";
$sql = "SELECT * FROM `mytable3` ";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
    echo "your email is ".$row['email'] . "and pass is " . $row['password'];
    // echo  $row['email'] . "<br> " .$row['password'];
    echo "<br>";
}

?>
