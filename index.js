

function busqueda() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.querySelectorAll(".galleryMonster");
  
    for (i = 0  ; i < ul.length; i++) {
      a = (ul[i].getElementsByTagName("img"));
      a1 = (a[0].getAttribute('alt'));  
      if (a1.toUpperCase().indexOf(filter) > -1) {
        ul[i].style.display = "";
      } else {
        ul[i].style.display = "none";
      }
    }
  }

function getLista() {
    var divs = document.getElementsByClassName("col-lg-4 py-2");
    var array = [];
    for (i = 0  ; i < divs.length; i++) {
      array.push(divs[i].getElementsByTagName("span")[0].innerText);
    }
    localStorage.setItem('lista', array);
    var jsonString = JSON.stringify(array);
    $.ajax({
      data:  {lista: jsonString}, //datos que se envian a traves de ajax
      url:   'result.php', //archivo que recibe la peticion
      type:  'post', //método de envio
      success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
        $("#prueba").html(response);
}
});
}

 function getId(id){
  return id
  }

  function realizaProceso(){
    var parametros = {
            "valorCaja1" : 4,
            "valorCaja2" : 3
    };
    $.ajax({
            data:  parametros, //datos que se envian a traves de ajax
            url:   'result.php', //archivo que recibe la peticion
            type:  'post', //método de envio
            beforeSend: function () {
                    $("#resultado").html("Procesando, espere por favor...");
            },
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    $("#resultado").html(response);
            }
    });
}