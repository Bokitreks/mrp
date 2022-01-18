<div id="admin" class="container-fluid">

<h2>Admin panel</h2>

<a id="logout" href="#">Logout</a>


<h3>Usluge</h3>


<table class="table" id="tabela-admin">

<thead>
<tr>
<th scope="col">Obrisi uslugu</th>
<th scope="col">Naslov Usluge</th>
<th scope="col">Tekst</th>
<th scope="col">Slika</th>

</tr>
</thead>


<tbody id="usluge"> 


</tbody>


</table>


<a id="dodajD" href="#">DODAJ USLUGU</a>



<div id="skriveni" class="container-fluid">

<h3>Nova usluga</h3>

<table class="table" id="tabela-admin">

<thead>
<tr>

<th scope="col">Naslov Usluge</th>
<th scope="col">Tekst</th>
<th scope="col">Slika</th>
<th scope="col">Dodaj</th>

</tr>
</thead>


<tbody id="dodaj"> 

<tr>
<form action="models/dodajUslugu.php" method="POST" enctype="multipart/form-data">
        <td><input type="text" name="naslov" id="naslov"></td>
        <td><Textarea name="desc" id="desc"></Textarea></td>
        <td><input type="file" name="slika" id="slika"></td>
        <td><input type="submit" name="dodaj" id="dodaj" value="Dodaj"></td>
        </form>
        </tr>

</tbody>


</table>

</div>

<div class="container-fluid"  id="ponudeDiv">


<h3>Ponude</h3>

<table class="table" id="tabela-admin">

<thead>
<tr>

<th scope="col">Obrisi Ponudu</th>
<th scope="col">Ime</th>
<th scope="col">Ime Firme</th>
<th scope="col" id="ponudaEmail">Email</th>
<th scope="col">Usluga</th>
<th scope="col">Datum</th>
<th scope="col">Napomena</th>

</tr>
</thead>


<tbody id="ponude"> 


</tbody>


</table>



</div>


<div class="container-fluid"  id="porukeDiv">


<h3>Poruke</h3>

<table>

<thead>
<tr>

<th>Obrisi Poruku</th>
<th>Ime</th>
<th>Ime Firme</th>
<th>Email</th>
<th>Naslov</th>
<th>Poruka</th>


</tr>
</thead>


<tbody id="poruke"> 

 
</tbody>


</table>



</div>

<div class="container-fluid"  id="partneriDiv">


<h3>Partneri</h3>

<table>

<thead>
<tr>

<th>Obrisi partnera</th>
<th>Naziv partnera</th>
<th>Slika</th>
<th>Link</th>

</tr>
</thead>


<tbody id="partneri"> 

 
</tbody>


</table>


<a id="dp" href="#">Dodaj partnera</a>
<div id="dodajPartneraDiv">
<tr>
<form action="models/dodajPartnera.php" method="POST"  enctype="multipart/form-data">
<td>
<input type="text" name="nazivp" id="nazivp" placeholder="Naziv partnera" required/></td>
<td>
<input type="text" name="linkp" id="linkp" placeholder="Link partnera" required/></td>
<td>
<input type="file" name="slikap" id="slikap"></td>

<td><input type="submit" name="dodajp" id="dodajp" value="Dodaj partnera"/></td>
</form>
</tr>

</div>
</div>

<div class="container-fluid"  id="galerijaDiv">


<h3>Galerija</h3>

<table>

<thead>
<tr>

<th>Obrisi sliku</th>
<th>Slika</th>

</tr>
</thead>


<tbody id="galerija"> 

 
</tbody>


</table>

<a id="ds" href="#">Dodaj sliku</a>

<div id="dodajSlikuDiv">

<form action="models/dodajSliku.php" method="POST" enctype="multipart/form-data">

<input type="file" name="slikad" id="slikad" required/>
<input type="submit" name="dodajs" id="dodajs" value="Dodaj sliku"/>
</form>

</div>

</div>



</div>








<script src="assets/js/admin.js"></script>

