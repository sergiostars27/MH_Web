
function busqueda() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.querySelectorAll(".galleryMonster");
  
    for (i = 0  ; i < ul.length; i++) {
      a = (ul[i].getElementsByTagName("img"));
      console.log(a.innerHTML);
      console.log(a[0]);
      console.log('-----');
      a1 = (a[0].getAttribute('alt'));  
      if (a1.toUpperCase().indexOf(filter) > -1) {
        ul[i].style.display = "";
      } else {
        ul[i].style.display = "none";
      }
    }
  }