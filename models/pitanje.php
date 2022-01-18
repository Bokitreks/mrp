<?php
session_start(); 
use PHPMailer\PHPMailer\PHPMailer;
include("../config/connection.php");
require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";


$ime = trim($_POST['ime']);
$ime_kompanije = trim($_POST['ime_komp']);
$email = trim($_POST['email']);
$naslov = trim($_POST['naslov']);
$usluga = trim($_POST['usluga']);
$datum = trim($_POST['datum']);
$lokacijaOd = trim($_POST['lokacijaOd']);
$lokacijaDo = trim($_POST['lokacijaDo']);
$teret = trim($_POST['teret']);
$napomena = trim($_POST['napomena']);
$ip = $_SERVER['REMOTE_ADDR'];

$secretKey = "6Ldwg1QdAAAAAP-IfKJYKaE8aI2nST4R9cHcjYZN";
$responseKey = $_POST['g-recaptcha-response'];
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$ip";
$response = file_get_contents($url);
$response = json_decode($response);

$message = "<strong>Primili ste poruku od:</strong>" .$ime ."<br /><strong>Ime firme:</strong> " .$ime_kompanije ."<br /><strong>Email:</strong> " .$email ."<br />";
$message .= "<strong>Naslov:</strong> ".$naslov ."<br /><strong>Usluga:</strong> ".$usluga ."<br />
<strong>Datum:</strong> ".$datum ."<br /><strong>Lokacija(od - do):</strong> ".$lokacijaOd." - ".$lokacijaDo."<br />
<strong>Tip tereta:</strong> ".$teret ."<br /><strong>Napomena:</strong> ".$napomena ."<br /><strong>IP:</strong> " .$ip;

$mail = new PHPMailer();

$mail->isSMTP();
$mail->SMTPDebug = 3;
$mail->Host = "s2.webhostingsrbija.net";
$mail->SMTPAuth = true;
$mail->Username = "robot@mrp.rs";
$mail->Password = 'robotmrp123';
$mail->Port = 465;
$mail->SMTPSecure = "ssl";

$mail->isHTML(true);
$mail->setFrom($email, "MRP mail system notifikacija");
$mail->addAddress("petar.mitic@mrp.rs");
$mail->Subject = ("$naslov");
$mail->Body = $message;

$upit = "INSERT INTO pitanje VALUES (null ,'$ime' , '$ime_kompanije' , '$email' , '$naslov' , '$usluga', '$datum', '$lokacijaOd', '$lokacijaDo', '$teret', '$napomena')";

if($response -> success){

if(!$mail->send()) {
    header("Location: ../../Ponuda");
} else {
    if($db->query($upit) === TRUE){
        $_SESSION["kontakt-uspesan"] = "Poruka je uspesno poslata, potrudicemo se da vas uskoro kontakiramo.";
        header("Location:../Ponuda");
    }
    else{
        header("Location:../../Ponuda");
    }
}
}
else{
    $_SESSION["kontakt-neuspesan"] = "Molimo vas potvrdite da niste robot.";
        header("Location:../Ponuda");
}

?>
<script type="text/javascript">location.href = '../../Ponuda';</script>

