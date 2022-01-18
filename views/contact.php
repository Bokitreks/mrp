<div class="container-fluid">
<div class="row">
<div class="col-lg-8">
<form action="models/poruka.php" method="POST" class="poruka-forma" onsubmit="ubaciLoader()">
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
    <div class="col-lg-12">
        <label for="poruka">* Poruka:</label>
    <textarea maxlength="100" type="text" name="poruka" id="poruka" placeholder="Unesite vasu poruku..." class="input-forma" autocomplete="off" height="200px" required></textarea>
    </div>
    <div class="row">
        <div class="g-recaptcha" data-sitekey="6Ldwg1QdAAAAABikLAfYdpNyGlkyqYhmYx3MZ1p0
"></div>
    </div>
    </div>
    <div class="o-nama-dugme">
        <button type="submit" class="dugme btn-dugme" name="btnPosalji">Posaljite <i class="fa fa-paper-plane"></i></button>
        <a class="dugme" href="/Ponuda">Posaljite ponudu <i class="fa fa-long-arrow-left"></i></a>  
        <i id="lod" class="fa fa-spinner fa-spin"></i>

    </div>
</form>

</div>

<div class="col-lg-4" id="kontakt-podaci">
    <div class="logo-kontakt">
        <img src="assets/img/CeoLogoCrni.png" alt="">
    </div>
    <div class="podaci-firme">
        <p>MR.P d.o.o. Beograd <br>office@mrp.rs <br>PIB: 112711183 <br> +381 621983883<br>PETNAESTOG OKTOBRA 10, DOBANOVCI</p>
    </div><br>
    <div class="podaci-firme">
        <p>&copy MR.P d.o.o. Beograd</p>
    </div>
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