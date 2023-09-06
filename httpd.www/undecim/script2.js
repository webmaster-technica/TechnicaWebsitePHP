
document.getElementById("vraagje").addEventListener("focusout", hallo, true);
// document.body.addEventListener("click", hallo, true);

document.getElementById("vraagje").addEventListener("focus", function(e) {
    var ID = e.target.id;
    if (ID != "Text") {
    document.getElementById(ID).style.width = "200px";
    if (ID == "mail") {
        document.getElementById(ID).placeholder = "e-mail (Bvb. jan.verheyen@gmail.com)"
        document.getElementById(ID).style.width = "250px";
    }
}
}, true);

function hallo(e) {
    var ID = e.target.id;
    if (ID != "Text") {
    if (document.getElementById(ID).value > "") {
    if (ID == "mail") document.getElementById(ID).placeholder = "e-mail"; 
    var lengte = document.getElementById(ID).value.length;
    document.getElementById(ID).style.width = lengte+1+"ch";
    } else document.getElementById(ID).style.width = "100px";
}
console.log(document.getElementById(ID).value.length);
}

function checkAntwoord() {
    var kChecked = false;
    var nChecked = false;
    var vChecked = false;
    var eChecked = false;
    var tChecked = false;
    var atCheck  = false;
    var endCheck = false;
    var dotCom   = ".com";
    var dotBe    = ".be";
    var keuze = document.getElementById("subj");
    var naam = document.getElementById("name");
    var Vnaam = document.getElementById("Vname");
    var mail  = document.getElementById("mail");
    var Text = document.getElementById("Text");
    console.log("Keuze = " + keuze.value);
    console.log("naam = " + naam.value);
    console.log("Vnaam = " + Vnaam.value);
    console.log("email = " + mail.value)
    console.log("Text = " + Text.value);

    if (keuze.value != "Selecteer") {
        kChecked = true;
        document.getElementById("chSubj").style.color = "black";
    } else document.getElementById("chSubj").style.color = "red";

    if (naam.value.length > 1) {
        nChecked = true;
        document.getElementById("chName").style.color = "black";
    } else document.getElementById("chName").style.color = "red";

    if (Vnaam.value.length > 1) {
        vChecked = true;
        document.getElementById("chVname").style.color = "black";
    } else document.getElementById("chVname").style.color = "red";
    
    var mailArray = mail.value.split('');
    var endMailCom   = mail.value.split('.');
    for (var i = 0; i <= mailArray.length; i++) {
        if (mailArray[i] == "@") atCheck = true;                                  
    }
    for (var j = mailArray.length-3; j < mailArray.length; j++) {
        console.log(mailArray[j]);
    }
    
    if (endMailCom[endMailCom.length-1] == "com" || endMailCom[endMailCom.length-1] == "be") endCheck = true;
    console.log(endMailCom[endMailCom.length-1]);
    console.log(endMailCom.length);
    console.log("@Check   =>" + atCheck);
    console.log("endCheck =>" + endCheck);
    
}
