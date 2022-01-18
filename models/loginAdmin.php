<?php

session_start();
@include('../config/connection.php');

$username=$_POST['username'];
$password=$_POST['password'];
$hashPassword=md5($password);

$upit="SELECT * from admin WHERE username = '$username' AND password = '$hashPassword'";

$admin=$db->query($upit);
$rezultat=$admin->num_rows;
if($rezultat==1){
$_SESSION['admin']=true;
header('Location: ../admin');
}
else{
    header('Location: ../admin');
}