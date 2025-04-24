<?php
$conn = mysqli_connect("localhost", "root", "", "MynewDb");
if(!$conn){
    die("connection was not connection". mysqli_connect_error());
}else{
   echo "connection succesfully..<br/>";
}

$sql  = "DELETE FROM `mytable3` WHERE `sno.` > 10";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br/>".$aff." row affected";
if($result){
    echo "Delete successfully!";
}else{
    $err = mysqli_error($conn);
    echo "Not deleted due to this error ".$err;
}

?>