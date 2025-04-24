<?php
$conn = mysqli_connect('localhost', 'root', '','MynewDb');
if(!$conn){
   Die("not connect".mysqli_connect_error());
}else{
    echo "connection!"; 
}


$sql = "SELECT * FROM `mytable3` ";
$result = mysqli_query($conn, $sql);

//find the no. of record  in table to return
$num = mysqli_num_rows($result);

echo $num;
// Didsplay the row returnd by the sql query

// if($num>0){
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
// }

while($row = mysqli_fetch_assoc($result)){
    echo "your email is ".$row['email'] . "and pass is " . $row['password'];
    // echo  $row['email'] . "<br> " .$row['password'];
    echo "<br>";
}
// email  and password are  coloumns name in mytable3 in db  MynewDb









?>
