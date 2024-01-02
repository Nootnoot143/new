    var form = document.forms[0],
        height = document.getElementById('height'),
        length = document.getElementById('length'),
        x,
        y,
        p,
        cena;
    function raschitat() {
        // length = length.replace(".", ",");
        x = document.getElementById('length').value.replace(",", ".")/2.1;
        y = document.getElementById('height').value/0.215;
        p = y*338;
        cena = p*x;
        console.log(cena);
        document.getElementById("price").childNodes[0].nodeValue=parseInt (cena);

    }
    height.oninput = function first() {
        if(length.value == 0);
        else {
            raschitat();
        }
      }
      length.oninput = function second() {
        if(height.value == 0);
        else {
            raschitat();
        }
      }


      el = document.getElementsByClassName("select-items");

      el.addEventListener("click", handler, false);

function handler() {
    alert("click");
    if(length.value == 0);
    else {
        raschitat();
    }
 }