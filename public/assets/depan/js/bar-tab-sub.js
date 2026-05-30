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