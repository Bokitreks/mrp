<?php 
function utf8ize($d) {
    if (is_array($d)) {
        foreach ($d as $k => $v) {
            $d[$k] = utf8ize($v);
        }
    } else if (is_string ($d)) {
        return utf8_encode($d);
    }
    return $d;
}

include("../config/connection.php");
mysqli_set_charset($db, "utf8");
$upit = "SELECT * FROM usluge";
$rezultat = $db->query($upit);
while($row = $rezultat->fetch_all()){
    echo json_encode(($row));
}

//uzimanje svih ponuda iz baze
?>