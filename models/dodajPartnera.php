<?php

@include('../config/connection.php');

$nazivp=$_POST['nazivp'];
$link=$_POST['linkp'];

$uploadDir='../assets/img/partneri/';

$fileName=$_FILES['slikap']['name'];
$tmpName=$_FILES['slikap']['tmp_name'];
$filSize=$_FILES['slikap']['size'];
$fileType=$_FILES['slikap']['type'];
$filePath=$uploadDir.$fileName;


$rezultat=move_uploaded_file($tmpName,$filePath);
$src='assets/img/partneri/'.$fileName;
$upit="INSERT INTO partneri VALUES(null,'$nazivp','$src','$link')";


$db->query($upit);

header("Location:../admin");