<?php
$servername = 'localhost';
$username = 'root';
$databasename = 'lycee';
$password = "";
//creation of connection
$connect = mysqli_connect('localhost', 'root', '','lycee');
if ($connect) {
    echo 'connected successful<br>';
}
else {
    echo 'failed to connect<br>';
}
 $insert="insert into user(user_id, user_name, email) values(2, 'sony','sony@gmail.com')";
 if (mysqli_query($connect,$insert)) {
     echo "data inserted<br>";
}
 else {
     echo "failed<br>";
 }
?>