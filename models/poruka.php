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
$poruka = trim($_POST['poruka']);
$ip = $_SERVER['REMOTE_ADDR'];

$secretKey = "6Ldwg1QdAAAAAP-IfKJYKaE8aI2nST4R9cHcjYZN";
$responseKey = $_POST['g-recaptcha-response'];
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$ip";
$response = file_get_contents($url);
$response = json_decode($response);

$message = "<strong>Primili ste poruku od:</strong>" .$ime ."<br /><strong>Ime firme:</strong> " .$ime_kompanije ."<br /><strong>Email:</strong> " .$email ."<br />";
$message .= "<strong>Naslov:</strong> ".$naslov ."<br /><strong>Poruka:</strong> ".$poruka ."<br /><strong>IP:</strong> " .$ip;

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

$upit = "INSERT INTO kontakt VALUES (null ,'$ime' , '$ime_kompanije' , '$email' , '$naslov' , '$poruka')";

if($response -> success){

if(!$mail->send()) {
    echo 'Greska';
} else {
    if($db->query($upit) === TRUE){
        $_SESSION["kontakt-uspesan"] = "Poruka je uspesno poslata, potrudicemo se da vas uskoro kontakiramo.";
        header("Location:../Kontakt");
    }
    else{
        header("Location:../Kontakt");
    }
}
}
else{
    $_SESSION["kontakt-neuspesan"] = "Molimo vas potvrdite da niste robot.";
        header("Location:../Kontakt");
}

?>
<script type="text/javascript">location.href = '../../Kontakt';</script>

<!--upis u bazu-->