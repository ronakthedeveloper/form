<?php

$user = $_POST['uname'];
$pass = $_POST['upass'];
$save = new mysqli('localhost','root','','form');
if($save -> connect_error){
    echo "Connection failed".$save->connect_error;
}
else{
    $statement = $save->prepare("insert into login values(Username, Password) values(?,?)");

    $statement -> bind_param("ss",$user,$pass);
    $statement -> execute();
    echo "<h1>Data Send Successfully</h1>";
    $statement -> close();
    $save -> close();
}


?>