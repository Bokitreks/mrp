<?php

include("../config/connection.php");

$id=$_POST['id'];

$upit="DELETE FROM kontakt WHERE id = '$id' ";

$db->query($upit);

header("Location : ../admin");