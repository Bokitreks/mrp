window.onload=function(){
    dohvatiUsluge();
  }//pozivanje funkcija
//dohvati izdvajamo iz ponude proizvode

function dohvatiUsluge(){
    $.ajax({
      url:"models/uzmiSveUsluge.php",
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
    var lista = document.getElementById("usluge");
    var stavke ="";
  for(var d of data){
          stavke += `
          <div class="row" id="row-usluge">
            <div class="col-lg-6" id="lg-slika">
              <img src="${d[3]}" alt="slika" class="usluga-slika">
            </div>
            <div class="col-lg-6">
              <h1>${d[1]}</h1>
              <p>${d[2]}</p>
              <a class="dugme" href="/Ponuda">Pitajte nas <i class="fa fa-long-arrow-left"></i></a> 
            </div>
          </div>`;
        }
    lista.innerHTML = stavke;
  }//ispis proizvoda izdvojeno iz ponude
  //--dohvati izdvajamo iz ponude proizvode