function citati() {
    quotes = new Array(6);
    authors = new Array(6);
    quotes[0] = "Toliko je bilo stvari u životu kojih smo se bojali. A nije trebalo. Trebalo je živeti.";
    authors[0] = "Ivo Andrić";
    quotes[1] = "Prijateljstvo se ne bira, ono biva, ko zna zbog čega, kao ljubav.";
    authors[1] = "Meša Selimović";
    quotes[2] = "Zdrav čovek ima hiljadu želja, a bolestan samo jednu - da ozdravi.";
    authors[2] = "Narodna izreka";
    quotes[3] = "Nemojte da hendikepirate svoju decu time što ćete im život učiniti suviše lakim.";
    authors[3] = "Duško Radović";
    quotes[4] = "Čast se ne može oduzeti, ona se može samo izgubiti.";
    authors[4] = "Čehov";
    quotes[5] = "Nema sunca bez svetlosti, ni čoveka bez ljubavi.";
    authors[5] = "Gete";

    index = Math.floor(Math.random() * quotes.length);
    document.getElementById('citat').innerHTML = quotes[index];
    document.getElementById('autor').innerHTML = authors[index];

}