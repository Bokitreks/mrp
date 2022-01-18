<?php
@include('../config/connection.php');
$upit="SELECT * FROM galerija";
$rezultat=$db->query($upit);
$rezultat=$rezultat->fetch_all();
echo json_encode($rezultat);