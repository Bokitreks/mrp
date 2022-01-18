<?php

include("../config/connection.php");

$id=$_POST['id'];

$upit="DELETE FROM usluge WHERE sifra_usluge = '$id' ";

$db->query($upit);

header("Location : ../admin");