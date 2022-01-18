<?php 
$server = "s2";
$user = "mrp_admin";
$pass = "adminmrp123";
$sql = "mrp_mrp";
$db = mysqli_connect($server, $user, $pass, $sql);

if(!$db){
    die("Greska pri konekciji sa serverom" + $db_error);
}
//konekcija sa bazom

?>