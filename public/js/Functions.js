function validateEsd() {
    // Get the values from the form fields
    let titol = document.forms["formEsdeveniment"]["nomEsdeveniment"].value;
    let latitude = document.forms["formEsdeveniment"]["Latitud"].value;
    let longitude = document.forms["formEsdeveniment"]["Longitud"].value;
    let caratula = document.forms["formEsdeveniment"]["fileImage"].value;
    let dia = document.forms["formEsdeveniment"]["dataEsdeveniment"].value;
    let hora = document.forms["formEsdeveniment"]["horaEsdeveniment"].value;
    let descripcio = document.forms["formEsdeveniment"]["descripcioEsdeveniment"].value;
    var caratulasplit = caratula.split('.');
    // Check if each field is filled and has the correct file format
    if (titol == "") {
        alert("El titol esta buit");
        return false;
    } else if (latitude == "") {
        alert("La latitud esta buida");
        return false;
    } else if (longitude == "") {
        alert("La longitud esta buida");
        return false;
    } else if (caratula == "") {
        alert("La caratula esta buida");
        return false;
    } else if (caratulasplit[1] !== "png" && caratulasplit[1] !== "jpg" && caratulasplit[1] !== "jpeg" && caratulasplit[1] !== "webp") {
        alert("No es .png .jpg .jpeg o webp");
        return false;
    } else if (dia == "") {
        alert("El dia esta buit");
        return false;
    } else if (hora == "") {
        alert("La hora esta buida");
        return false;
    } else if (descripcio == "") {
        alert("La descripcio esta buida");
        return false;
    } else {
        alert("Esdeveniment creat correctament") // If all is correct it shows this alert.
    }
}

function validateConsell() {
    // Get the values from the form fields
    let titol = document.forms["FormConsell"]["TitolConsell"].value;
    let descripcio = document.forms["FormConsell"]["DescripcioConsell"].value;
    let explicatiu = document.forms["FormConsell"]["Text_explicatiu"].value;
    let Hashtags = document.forms["FormConsell"]["Hashtags"].value;
    // Check if each field is filled and has the correct file format
    if (titol == "") {
        alert("El titol esta buit");
        return false;
    } else if (descripcio == "") {
        alert("La descripcio esta buida");
        return false;
    } else if (explicatiu == "") {
        alert("La explicacio esta buida");
        return false;
    } else if(caratula == "") {
        alert("Els Hashtags esta buits");
        return false;
    } else {
        return true;
    }
}

function validateAnunci() {
    // Get the values from the form fields
    let titol = document.forms["FormAnunci"]["NomAnunci"].value;
    let imatge = document.forms["FormAnunci"]["fileImatge"].value;
    let descripcio = document.forms["FormAnunci"]["descripcioAnunci"].value;
    var imatgesplit = imatge.split('.');
    // Check if each field is filled and has the correct file format
    if (titol == "") {
        alert("El titol esta buit");
        return false;
    } else if (imatge == "") {
        alert("La imatge esta buida");
        return false;
    } else if(imatgesplit[1] !== "png" && imatgesplit[1] !== "jpg" && imatgesplit[1] !== "jpeg" && imatgesplit[1] !== "webp") {
        alert("No es .png .jpg .jpeg o .webp");
        return false; 
    }else if(descripcio == "") {
        alert("La descripcio esta buida");
        return false;
    } else {
        return true;
    }
}

function validateUser() {
    // Get the values from the form fields
    let name = document.forms["FormUser"]["Nom"].value;
    let surname = document.forms["FormUser"]["Cognom"].value;
    let email = document.forms["FormUser"]["User"].value;
    let username = document.forms["FormUser"]["Mail"].value;
    let password = document.forms["FormUser"]["Password"].value;
    let Imatge = document.forms["FormUser"]["Image"].value;
    var imatgesplit = Imatge.split('.');
    // Check if each field is filled and has the correct file format
    if (name == "") {
        alert("El nom esta buit");
        return false;
    } else if (surname == "") {
        alert("El cognom esta buit");
        return false;
    } else if(email == "") {
        alert("El email esta buit");
        return false;
    } else if(Imatge == "") {
        alert("La imatge esta buida");
        return false;
    } else if(imatgesplit[1] !== "png" && imatgesplit[1] !== "jpg" && imatgesplit[1] !== "jpeg" && imatgesplit[1] !== "webp") {
        alert("No es .png .jpg .jpeg o webp");
        return false; 
    } else if(username == "") {
        alert("El usuari esta buit");
        return false;
    } else if(password == "") {
        alert("La contrasenya esta buida");
        return false;
    } else {
        return true;
    }
}

function validateLogin() {
    let username = document.forms["FormLogin"]["User"].value;
    let password = document.forms["FormLogin"]["Password"].value;
    if(username == "") {
        alert("El usuari esta buit");
        return false;
    } else if(password == "") {
        alert("La contrasenya esta buida");
        return false;
    } else {
        return true;
    }
}

function Date_Filter(Start, End) {
    var search = "1";
    var parameters = "search=" + search + "&Start=" + Start + "&End=" + End;
        $.ajax({
            data:parameters,
            type: "POST",
            timeout: 10000,
            beforeSend: function () {
                //$('#loading').show();
            },
            success: function (response) {
                console.log('Inside');
                document.getElementById("Result").innerHTML = response;
            },
            error: function (response, error) {
                console.log("Error");
                document.getElementById("error").innerHTML = response;
            }
        });
}