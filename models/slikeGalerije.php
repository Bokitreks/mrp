<?php 
include("../config/connection.php");
$upit = "SELECT * FROM galerija";
$rezultat = $db->query($upit);
while($row = $rezultat->fetch_all()){
    echo json_encode($row);
}


?>