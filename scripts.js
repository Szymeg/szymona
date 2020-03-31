/*kontrolki do ew.dodania funkcja zmieniająca bg-c selecta
function funkcja() {
    var opcja = document.getElementsByClassName.value;
    console.log(opcja);
}*/

//pracownicy przypisuje na bazie klasy -> każdy kolejny wiersz musi mieć odd/even
function color(y,z) {
    var color = document.getElementById(y).value;
    var x = document.getElementsByClassName(z);    
    for (var i = 0; i < x.length; i++) {
        x[i].style.backgroundColor = color;
    }
}

//vat
//kwotabrutto
function kwotabrutto(nr) {
    var span = document.getElementsByClassName("kwotabrutto")[nr];
    var value = span.innerText;
    console.log(value);
    
    var kwotabrutto = parseInt(value);
    console.log(kwotabrutto);
    
    var a = document.getElementsByClassName("kwotanetto")[nr].innerText;
    var c = document.getElementsByClassName("vat")[nr].value; 
    console.log(a,c);

    var x = parseInt(a);
    var z = parseInt(c);
    console.log(x,z);
    
    kwotabrutto = x + x*z/100;
    console.log(kwotabrutto);

    var str = kwotabrutto.toString();
    console.log(str);
    
    span.innerText = str;
  }

//wartosc netto
function wartoscnetto(nr) {
    var span = document.getElementsByClassName("wartoscnetto")[nr];
    var value = span.innerText;
    console.log(value);
    
    var kwotanetto = parseInt(value);
    console.log(kwotanetto);
    
    var a = document.getElementsByClassName("kwotanetto")[nr].innerText;
    var b = document.getElementsByClassName("ilosc")[nr].innerText;
    console.log(a,b);

    var x = parseInt(a);
    var y = parseInt(b);
    console.log(x,y);
    
    kwotanetto = x*y;
    console.log(kwotanetto);

    var str = kwotanetto.toString();
    console.log(str);
    
    span.innerText = str;
  }

//wartosc brutto
function wartoscbrutto(nr) {
    var span = document.getElementsByClassName("wartoscbrutto")[nr];
    var value = span.innerText;
    console.log(value);
    
    var wartoscbrutto = parseInt(value);
    console.log(wartoscbrutto);
    
    var a = document.getElementsByClassName("kwotabrutto")[nr].innerText;
    var b = document.getElementsByClassName("ilosc")[nr].innerText;
    console.log(a,b);

    var x = parseInt(a);
    var y = parseInt(b);
    console.log(x,y);
    
    wartoscbrutto = x*y;
    console.log(wartoscbrutto);

    var str = wartoscbrutto.toString();
    console.log(str);
    
    span.innerText = str;
  }

//zielone netto > 1000
function zielony() {
    var span = document.getElementsByClassName("kwotanetto");
    for (var i = 0; i < span.length; i++) {
        var kwotanetto = parseInt(span[i].innerText);
        if (kwotanetto>1000) {
            span[i].style.backgroundColor = "green";
        }
    }
}