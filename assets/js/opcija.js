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
    var lista = document.getElementById("ponudaUsluga");
    var stavke ="";
  for(var d of data){
          stavke += `
          <option value="${d[1]}" class="opcija">${d[1]}</option>
          `;
        }
    lista.innerHTML = stavke;
  }//ispis proizvoda izdvojeno iz ponude
  //--dohvati izdvajamo iz ponude proizvode