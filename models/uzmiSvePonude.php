<?php 
include("../config/connection.php");
$upit = "SELECT * FROM pitanje";
$rezultat = $db->query($upit);
while($row = $rezultat->fetch_all()){
    echo json_encode($row);
}

//uzimanje svih ponuda iz baze
?>