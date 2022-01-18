window.onload=function(){
    dohvatiGaleriju();
    
  }//pozivanje funkcija

function dohvatiGaleriju(){
    $.ajax({
      url:"models/slikeGalerije.php",
      method:"GET",
      dataType:"JSON",
  
      success:function(data){
        ispisiProizvode(data);
        ispisiSliku(data[0]);
      },
      error:function(){
        console.log("error dohvati proizvode");
      }
    });
  }//dohvati proizvode izdvojeno iz ponude
  
  function ispisiProizvode(data){
    var lista = document.getElementById("galerija-slika-traka");
    var stavke ="";
  for(var d of data){
          stavke += `
          <img onclick="promeniSliku(this)" src="${d[1]}" alt="">`;
        }
    lista.innerHTML = stavke;
  }//ispis proizvoda izdvojeno iz ponude
  //--dohvati izdvajamo iz ponude proizvode

  function ispisiSliku(data){
    var lista = document.getElementById("vlk-slk");
    var stavke ="";
  for(var d of data){
          stavke = `
          <img id="velika-slika" src="${d}" alt="">`;
        }
    lista.innerHTML = stavke;
  }