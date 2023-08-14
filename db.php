<?php

$fnmae = $_POST['ufname'];
$lname = $_POST['ulname'];
$faname = $_POST['ufaname'];
$email = $_POST['uemail'];
$number = $_POST['unumber'];
$dob = $_POST['udob'];
$check = $_POST['ucheck'];
$gender = $_POST['uradio'];
$select = $_POST['uselect'];

$save = new mysqli('localhost','root','','form');
if($save -> connect_error){
    echo "Connection failed".$save->connect_error;
}
else{
    $statement = $save->prepare("insert into register values(first_name,last_name,father_name,email,ph_number,dob,qualification,gender,city) values(?,?,?,?,?,?,?,?,?)");

    $statement -> bind_param("s,s,s,s,s,s,s,s,s",$fnmae,$lname,$faname,$email,$number,$dob,$check,$gender,$select);
    $statement -> execute();
    echo "<h1>Data Send Successfully</h1>";
    $statement -> close();
    $save -> close();
}


?>