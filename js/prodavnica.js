document.getElementById('proizvodi').addEventListener("submit", ukupanIznos);

function ukupanIznos(event) {
    event.preventDefault();
    // console.log("U redu je!");
    if(document.getElementById('s-grad').value === '') {
        alert(" --- Unesite grad --- ");
    }
    var kolPrvi = parseInt(document.getElementById('jedan').value),  // .value 10) || 0,
        kolDrugi = parseInt(document.getElementById('dva').value),   // .value 10) || 0,
        kolTreci = parseInt(document.getElementById('tri').value),   // .value 10) || 0,
        grad = document.getElementById('s-grad').value;

    var methods = document.getElementById('proizvodi').r_method, isporukaMetod;

    for(let i=0; i<methods.length; i++) {
        if(methods[i].checked==true) {
            isporukaMetod = methods[i].value;
        }
    }

    var pdvIznos = 1;
    if(grad === "DR") {
        pdvIznos = 1.20;
    }

    var cenaIsporukePo = 0;
    switch(isporukaMetod) {
        case 'preuzimanje' : cenaIsporukePo = 0;
        break;
        case 'kompanijski' : cenaIsporukePo = 2;
        break;
        case 'postexpres' : cenaIsporukePo = 3;
        break;
    }

    var isporukaCena = (kolPrvi + kolDrugi + kolTreci) * cenaIsporukePo;

    var ukupno = ((kolPrvi*10) + (kolDrugi*8) + (kolTreci*12)) * pdvIznos;

    var izracunaj = ukupno + isporukaCena;

    document.getElementById('txt-izracunaj').value = izracunaj + "€";

    document.getElementById('rezultati').innerHTML = "Ukupno proizvoda: " + (kolPrvi + kolDrugi + kolTreci) + "<br>";
    document.getElementById('rezultati').innerHTML += "Cena isporuke: " + isporukaCena.toFixed(2) + "<br>";
    document.getElementById('rezultati').innerHTML += "PDV: " + pdvIznos;
}