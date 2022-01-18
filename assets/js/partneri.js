window.onload=function(){
    dohvatiPartnere();
    
  }//pozivanje funkcija

function dohvatiPartnere(){
    $.ajax({
      url:"models/dohvatiPartnere.php",
      method:"GET",
      dataType:"JSON",
  
      success:function(data){
        ispisiProizvode(data);
      },
      error:function(){
        console.log("error dohvati proizvode");
      }
    });
  }//dohvati proizvode izdvojeno iz ponude
  
  function ispisiProizvode(data){
    var lista = document.getElementById("partneri-slider");
    var stavke ="";
  for(var d of data){
          stavke += `
          <a href="${d[3]}" class="par-kar" target="blank">
        <img src="${d[2]}" alt="slika">
        <h2>${d[1]}</h2>
        </a>`;
        }
    lista.innerHTML = stavke;
  }//ispis proizvoda izdvojeno iz ponude
  //--dohvati izdvajamo iz ponude proizvode