<?php
@include('../config/connection.php');
$uploadDir='../assets/img/galerija/';

$fileName=$_FILES['slikad']['name'];
$tmpName=$_FILES['slikad']['tmp_name'];
$filSize=$_FILES['slikad']['size'];
$fileType=$_FILES['slikad']['type'];
$filePath=$uploadDir.$fileName;


$rezultat=move_uploaded_file($tmpName,$filePath);
$src='assets/img/galerija/'.$fileName;
$upit="INSERT INTO galerija VALUES(null,'$src')";


$db->query($upit);


header("Location:../admin");