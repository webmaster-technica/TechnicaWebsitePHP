var update = setInterval(checkBreedte, 100);                            //de functie checkBreedte() om de 100ms oproepen om de breedte van het scherm up te daten

function checkBreedte() {
    var schermBreedte = window.innerWidth;                              //variabele die de schermbreedte bepaald
    if (schermBreedte <= 490) {
        document.getElementById("openKn").style.color = "#e5b61f"
        document.getElementById("openKn").innerHTML = "<b>&#9776;</b>";   //als het scherm smal genoeg is voor de mobiele versie dan zal er een drukbare menu bovenkomen
        document.getElementById("hoofdMENU").style.top = "-54px";
    }
    else {
        document.getElementById("openKn").innerHTML = null; 
        document.getElementById("mijnSlideMenu").style.width = "0";
        document.getElementById("main").style.marginLeft = "0"
        document.getElementById("hoofdMENU").style.top = "0";
    } 
}
function Openen() {
    document.getElementById("mijnSlideMenu").style.width = "250px";     //menu breder maken en "slide" open
    document.getElementById("main").style.marginLeft = "250px";
    document.getElementById("main").style.marginRight = "-250px";
    // document.getElementsByClassName("foto1").style.marginLeft = "250px";
}
function Sluiten() {
    document.getElementById("mijnSlideMenu").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementById("main").style.marginRight = "0";
    // document.getElementsByClassName("foto1").style.marginLeft = "0";
}