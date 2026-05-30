function openCountry(evt, countryName) {

    var i;
    var countryContent;
    var countryLinks;

    countryContent = document.getElementsByClassName("country-content");

    for (i = 0; i < countryContent.length; i++) {
        countryContent[i].style.display = "none";
    }

    countryLinks = document.getElementsByClassName("country-links");

    for (i = 0; i < countryLinks.length; i++) {
        countryLinks[i].className =
            countryLinks[i].className.replace(" active", "");
    }

    document.getElementById(countryName).style.display = "block";

    evt.currentTarget.className += " active";
}

function bukaNegara(evt, negaraNama) {

    var j;
    var negaraKonten;
    var negaraTautan;

    negaraKonten = document.getElementsByClassName("country-content");

    for (j = 0; j < negaraKonten.length; j++) {
        negaraKonten[j].style.display = "none";
    }

    negaraTautan = document.getElementsByClassName("country-links");

    for (j = 0; j < negaraTautan.length; j++) {
        negaraTautan[j].className =
            negaraTautan[j].className.replace(" active", "");
    }

    document.getElementById(negaraNama).style.display = "block";

    evt.currentTarget.className += " active";
}