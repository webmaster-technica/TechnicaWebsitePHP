var datum = new Date().getDay();
console.log(datum);
// datum = 5;
var dagNrs = ["12", "13", "14", "15", "16", "17", "11"];
var dag    = ["ZONDAG", "MAANDAG", "DINSDAG", "WOENSDAG", "DONDERDAG", "VRIJDAG", "ZATERDAG"];
var acti   = ["NIKSEN", "KROEGENTOCHT", "BANANEN FOAF", "CANTUS","BUBBLE SOCCER", "OVERWINNINGSVAT", "NIKSEN"];
var uur    = ["21:00", "21:00", "21:00", "20:30 (Io Vivat)", "18:00", "21:00", "21:00"];
var locatie    = ["Thuis", "@Barbier (Stadswaag)", "@Barbier (Stadswaag)", "@Wagetol (Stadswaag)", "@Park Spoor Noord", "@Barbier (Stadswaag)", "Thuis"];

document.getElementById("dayNr").innerHTML = dagNrs[datum];
document.getElementById("Day").innerHTML = dag[datum];
document.getElementById("activity").innerHTML = acti[datum];
document.getElementById("Hour").innerHTML = uur[datum];
document.getElementById("Locate").innerHTML = locatie[datum];

var timer = null;
var clickTime = 0;
document.getElementById("kevFoto").addEventListener("mousedown", function(){
    timer = setInterval(FotoChanger, 1000);
    clickTime = 0;
});

document.getElementById("kevFoto").addEventListener("mouseup", function() {
    clearInterval(timer);
    console.log("Gedaan");
});

    function FotoChanger() {
        clickTime++;
        console.log(clickTime);
        if (clickTime == 10) 
        document.getElementById("Foto5").style.backgroundImage = "url('/Used Pictures/_20190512_160855.JPG')";

    };