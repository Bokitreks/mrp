<div class="container">
<div class="row">
<div class="col-lg-12">
<form action="models/pitanje.php" method="POST" class="poruka-forma" onsubmit="loaderDugme()">
    <div class="row" id="form-row">
    <div class="col-lg-6">
        <label for="ime">* Ime:</label>
    <input type="text" name="ime" id="ime" placeholder="Unesite vase ime..." class="input-forma" autocomplete="off" required>
    </div>
    <div class="col-lg-6">
    <label for="imek">Ime kompanije:</label>
    <input type="text" name="ime_komp" id="imek" placeholder="Unesite ime vase kompanije..." class="input-forma" autocomplete="off">
    </div>
    </div>
    <div class="row" id="form-row">
    <div class="col-lg-6">
        <label for="email">* Email:</label>
    <input type="email" name="email" id="email" placeholder="Unesite vas email..." class="input-forma" autocomplete="off" required>
    </div>
    <div class="col-lg-6">
    <label for="naslov">* Naslov:</label>
    <input type="text" name="naslov" id="naslov" placeholder="Unesite naslov poruke..." class="input-forma" autocomplete="off" required>
    </div>
    </div>
    <div class="row" id="form-row">
    <div class="col-lg-6">
        <label for="usluga">* Usluga:</label>
    <select id="ponudaUsluga" name="usluga" id="usluga" placeholder="Unesite vas email..." class="input-forma" autocomplete="off" required>
  
    </select>
    </div>
    <div class="col-lg-6">
    <label for="datetime">* Datum koji bi vam odgovarao:</label>
    <input type="date" name="datum" id="datetime" placeholder="Unesite naslov poruke..." class="input-forma" autocomplete="off" required>
    </div>
    </div>

    <div class="row" id="form-row">
    <div class="col-lg-6">
        <label for="lok">* Lokacija od:</label>
    <input id="ime" type="text" name="lokacijaOd" id="lok" placeholder="Unesite lokaciju..." class="input-forma" autocomplete="off" required>
    </div>
    <div class="col-lg-6">
    <label for="lokd">* Lokacija do:</label>
    <input type="text" name="lokacijaDo" id="lokd" placeholder="Unesite lokaciju..." class="input-forma" autocomplete="off" required>
    </div>
    </div>
    
    <div class="row" id="form-row">
    <div class="col-lg-6">
        <label for="teret">* Teret:</label>
    <textarea type="text" name="teret" id="teret" placeholder="Unesite opis tereta..." class="input-forma" autocomplete="off" height="200px" required></textarea>
    </div>
    <div class="col-lg-6">
        <label for="napomena">Napomena:</label>
    <textarea type="text" name="napomena" id="napomena" placeholder="Unesite vasu napomenu..." class="input-forma" autocomplete="off" height="200px"></textarea>
    </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="g-recaptcha" data-sitekey="6Ldwg1QdAAAAABikLAfYdpNyGlkyqYhmYx3MZ1p0
"></div><br>
        </div>
    </div>
    <div class="o-nama-dugme">
        <button type="submit" class="dugme btn-dugme" id="btnPotvrda">Posaljite <i class="fa fa-paper-plane"></i></button>
        <i id="lod" class="fa fa-spinner fa-spin"></i>
    </div>
</form>

</div>
</div>

</div>
<?php 
        if(isset($_SESSION["kontakt-uspesan"])){
            echo '<div class="alert-box">
            <h3>'.$_SESSION["kontakt-uspesan"].'</h3>
            <button onclick="ukloniAlert()" class="dugme btn-dugme btn-crna">Nastavite</button>
        </div>';
            session_destroy();
        }
        elseif(isset($_SESSION["kontakt-neuspesan"])){
        echo '<div class="alert-box">
            <h3>'.$_SESSION["kontakt-neuspesan"].'</h3>
            <button onclick="ukloniAlert()" class="dugme btn-dugme btn-crna">Nastavite</button>
        </div>';
            session_destroy();
        }
        else{
            echo '';
        }
?>

<script src="assets/js/opcija.js"></script>