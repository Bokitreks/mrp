<?php 
session_start();
if(trenutni_url() == '/Admin' || trenutni_url() == '/admin'){
    include("views/fixed/head.php");
}
else{
    include("views/fixed/head.php");
    include("views/fixed/navbar.php");
    include("views/loader.php");
    include("views/scroler.php");
}

if(trenutni_url()){
if(trenutni_url() == '/'){
    include("views/home.php");
}
elseif(trenutni_url() == '/About'){
    include("views/about.php");
}
elseif(trenutni_url() == '/Usluge'){
    include("views/services.php");
}
elseif(trenutni_url() == '/Kontakt'){
    include("views/contact.php");
}
elseif(trenutni_url() == '/Ponuda'){
    include("views/ponuda.php");
}
elseif(trenutni_url() == '/Galerija'){
    include("views/galerija.php");
}
elseif(trenutni_url() == '/Admin' || trenutni_url() == '/admin'){
    if(isset($_SESSION['admin'])){
        include("views/admin.php");
    }else{
        include("views/login.php");
    }
    
}
else{
    include("views/404.php");
}

}
include("views/fixed/head_close.php");


function trenutni_url()
{
    $url = $_SERVER['REQUEST_URI'];
    $validacija = str_replace("&" , "&amp" , $url);
    return $validacija;
}
?>