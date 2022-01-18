window.onload=function(){
    dohvatiUsluge();
    dohvatiPonude();
    dohvatiPoruke();
    dohvatiPartnerte();
    dohvatiSlike();
  }


function dohvatiUsluge(){
    $.ajax({
      url:"models/uzmiSveUsluge.php",
      method:"GET",
      dataType:"JSON",
  
      success:function(data){
       ispisUsluga(data);
      },
      error:function(xhr,status,error){
        console.log(error);
      }
    });
  }

  function dohvatiPonude(){
    $.ajax({
      url:"models/uzmiSvePonude.php",
      method:"GET",
      dataType:"JSON",
  
      success:function(data){
       ispisPonuda(data);
      },
      error:function(xhr,status,error){
        console.log(error);
      }
    });
  }

  function dohvatiPoruke(){
    $.ajax({
      url:"models/dohvatiSvePoruke.php",
      method:"GET",
      dataType:"JSON",
  
      success:function(data){
       ispisPoruke(data);
      },
      error:function(xhr,status,error){
        console.log(error);
      }
    });
  }

  function dohvatiPartnerte(){
    $.ajax({
      url:"models/dohvatiSvePartnere.php",
      method:"GET",
      dataType:"JSON",

      success:function(data){
        ispisPartnera(data);
        console.log(data);
      },
      error:function(xhr,status,error){
        console.log(error);
      }

    });
  }
  function dohvatiSlike(){
    $.ajax({
      url:"models/dohvatiSveSlike.php",
      method:"GET",
      dataType:"JSON",
      success:function(data){
        ispisSlika(data);
        console.log(data);
      },
      error:function(xhr,status,error){
        console.log(xhr);
      }

    });
  }
  function ispisPartnera(data){
    let div=document.getElementById("partneri");
    let ispis="";
    for(let d of data){
      ispis+=`<tr><td><a class="obrisiPartnera"  data-id="${d[0]}" href="#">Obrisi</a></td><td>${d[1]}</td><td><img class="logoPartnerAdmin" src='${d[2]}'/></td><td><a target="blank" href='${d[3]}'>${d[3]}</a></td></tr>`;
    }
    div.innerHTML=ispis;
    let obrisiPartnera=document.getElementsByClassName("obrisiPartnera");
    for(let i=0;i<obrisiPartnera.length;i++){
      obrisiPartnera[i].addEventListener('click',function(){
            $.ajax({
              url:"models/brisiPartnera.php",
              method:"POST",
              data:{
                "id":this.dataset.id
              },
              success:function(data){
                alert(data);
                location.reload();
              },
              error:function(xhr,status,error){
                console.log(xhr);
              }
            })
      });
    }
  }
  document.getElementById("dp").addEventListener('click',function(e){

    e.preventDefault();
    $('#dodajPartneraDiv').slideToggle();

  });
  function ispisSlika(data){
    let div=document.getElementById("galerija");
    let ispis="";
    console.log(data);
    for(let d of data){
      ispis+=`<tr><td><a class="obrisiSliku" data-id="${d[0]}" href="#">Obrisi</a></td><td><img class="cc" src="${d[1]}" alt="slika"/></td></tr>`;
    }
    div.innerHTML=ispis;

    let obrisiSliku=document.getElementsByClassName("obrisiSliku");
    for(let i=0;i<obrisiSliku.length;i++){
      obrisiSliku[i].addEventListener('click',function(){
            $.ajax({
              url:"models/brisiIzGalerije.php",
              method:"POST",
              data:{
                "id":this.dataset.id
              },
              success:function(data){
                alert(data);
                location.reload();
              },
              error:function(xhr,status,error){
                console.log(xhr);
              }
            })
      });
    }
  }
  document.getElementById("ds").addEventListener('click',function(e){

    e.preventDefault();
    $('#dodajSlikuDiv').slideToggle();

  });




  function ispisUsluga(data){
    let tabela=document.getElementById('usluge');
    let ispis="";
    for(var d of data){
        console.log(d);
        ispis+=`<tr><td><a class="obrisi" data-id="${d[0]}" href="">Obrisi</a></td>
        <td><p>${d[1]}<p></td>
        <td><p>${d[2].substring(0,100)}...<p></td>
        <td><img width="200" height="200" src="${d[3]}" alt="slika"/></td>
        </tr>`
    }

    tabela.innerHTML=ispis;

    let brisanje=document.getElementsByClassName('obrisi');
    for(let i=0;i<brisanje.length;i++){
      brisanje[i].addEventListener('click',function(){
        var id=this.dataset.id;

        $.ajax({
          url:"models/brisiUslugu.php",
          method:"POST",
          data:{
            "id":id
          },
          success:function(data){
            alert("Usluga obrisana");
          },
          error:function(xhr,status,error){
            //Izbacuje server error?? A radi sve.. 
            alert("Usluga obrisana");
          }
        });
        

      });
    }
  }

  document.getElementById("dodajD").addEventListener('click',function(e){

    e.preventDefault();
    $('#skriveni').slideToggle();

  });

  function ispisPonuda(data){
    let tabela=document.getElementById('ponude');
    let ispis="";
    for(var d of data){
        console.log(d);
        ispis+=`
        <tr>
        <td><a data-id="${d[0]}" class="obrisiP" href="">Obrisi</a></td>
        <td>${d[1]}</td>
        <td>${d[2]}</td>
        <td>${d[3]}</td>
        <td>Naslov: ${d[4]} Usluga: ${d[5]} Lokacija od: ${d[7]} Lokacija do:${d[8]} </td>
        <td>${d[6]}</td>
        <td>Napomena: ${d[9]}  Teret: ${d[10]} </td>
        </tr>`
    }

    tabela.innerHTML=ispis;

    let brisanje=document.getElementsByClassName('obrisiP');
    for(let i=0;i<brisanje.length;i++){
      brisanje[i].addEventListener('click',function(){
        var id=this.dataset.id;

        $.ajax({
          url:"models/brisiPonudu.php",
          method:"POST",
          data:{
            "id":id
          },
          success:function(data){
            alert("Ponuda obrisana");
          },
          error:function(xhr,status,error){
            //Izbacuje server error?? A radi sve.. 
            alert("Ponuda obrisana");
          }
        });
        

      });
    }
  }

  function ispisPoruke(data){
    let tabela=document.getElementById('poruke');
    let ispis="";
    for(var d of data){
        console.log(d);
        ispis+=`
        <tr>
        <td><a data-id="${d[0]}" class="obrisiPoruku" href="">Obrisi</a></td>
        <td>${d[1]}</td>
        <td>${d[2]}</td>
        <td>${d[3]}</td>
        <td>${d[4]}</td>
        <td>${d[5]}</td>
        </tr>`
    }

    tabela.innerHTML=ispis;

    let brisanje=document.getElementsByClassName('obrisiPoruku');
    for(let i=0;i<brisanje.length;i++){
      brisanje[i].addEventListener('click',function(){
        var id=this.dataset.id;

        $.ajax({
          url:"models/brisiPoruku.php",
          method:"POST",
          data:{
            "id":id
          },
          success:function(data){
            alert("Poruka obrisana");
            
          },
          error:function(xhr,status,error){
            //Izbacuje server error?? A radi sve.. 
            alert("Poruka obrisana");
          }
        });
        

      });
    }
  }

  //Logout

  document.getElementById('logout').addEventListener('click',function(){

    $.ajax({
      url:"models/logout.php",
      method:"POST",
      success:function(data){
        window.location.href="https://mrp.rs";
        
      },
      error:function(xhr,status,error){
        window.location.href="https://mrp.rs";
      }
    });
  });