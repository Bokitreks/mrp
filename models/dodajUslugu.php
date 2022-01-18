<?php

session_start();
include("../config/connection.php");
$greske=0;
if(isset($_POST['naslov']) || trim($_POST['naslov'])!=''){
    $naslov=$_POST['naslov'];
   
}
else{
    $greske++;
}
if(isset($_POST['desc']) || trim($_POST['desc'])!=''){
    $opis=$_POST['desc'];
}
else{
    $greske++;
}


if($greske==0){

//Dodavanje slike u img folder
$uploadDir='../assets/img/';

$fileName=$_FILES['slika']['name'];
$tmpName=$_FILES['slika']['tmp_name'];
$filSize=$_FILES['slika']['size'];
$fileType=$_FILES['slika']['type'];
$filePath=$uploadDir.$fileName;


$rezultat=move_uploaded_file($tmpName,$filePath);
$src='assets/img/'.$fileName;
$upit="INSERT INTO usluge VALUES(null,'$naslov','$opis','$src')";


$db->query($upit);

header("Location:../admin");
}
else{
    header("Location:../admin");
}










