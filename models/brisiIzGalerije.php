<?php
@include('../config/connection.php');
$id=$_POST['id'];
$upit="DELETE FROM galerija WHERE id = '$id' ";
$db->query($upit);
echo "Obrisano iz galerije";