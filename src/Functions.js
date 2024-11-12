function validateEsd() {
        let titol = document.forms["form"]["nomEsd"].value;
        let latitude = document.forms["form"]["ubicacioEsdY"].value;
        let longitude = document.forms["form"]["ubicacioEsdX"].value;
        let caratula = document.forms["form"]["fileImage"].value;
        let dia = document.forms["form"]["dataEsdD"].value;
        let hora = document.forms["form"]["dataEsdH"].value;
        let descripcio = document.forms["form"]["descripcioEsd"].value;
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
        } else if(caratula == "") {
            alert("La caratula esta buida");
            return false;
        } else if(caratulasplit[1] !== "png" && caratulasplit[1] !== "jpg" && caratulasplit[1] !== "jpeg" && caratulasplit[1] !== "webp") {
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
        return true;
    }
}

function validateCnsll() {
    let titol = document.forms["form"]["TitolCnsll"].value;
    let descripcio = document.forms["form"]["DescripcioCnsll"].value;
    let explicatiu = document.forms["form"]["Text_explicatiu"].value;
    let Hashtags = document.forms["form"]["Hashtags"].value;
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
    let titol = document.forms["form"]["TitolAnunci"].value;
    let imatge = document.forms["form"]["fileImatge"].value;
    let descripcio = document.forms["form"]["descripcioAnunci"].value;
    var imatgesplit = imatge.split('.');
    if (titol == "") {
        alert("El titol esta buit");
        return false;
    } else if (imatge == "") {
        alert("La imatge esta buida");
        return false;
    } else if(imatgesplit[1] !== "png" && imatgesplit[1] !== "jpg" && imatgesplit[1] !== "jpeg" && imatgesplit[1] !== "webp") {
        alert("No es .png .jpg .jpeg o webp");
        return false; 
    }else if(descripcio == "") {
        alert("La descripcio esta buida");
        return false;
    } else {
        return true;
    }
}

function validateUser() {
    let name = document.forms["form"]["Nom"].value;
    let surname = document.forms["form"]["cognom"].value;
    let email = document.forms["form"]["Usuari"].value;
    let username = document.forms["form"]["Mail"].value;
    let password = document.forms["form"]["password"].value;
    let Imatge = document.forms["form"]["Imatge"].value;
    var imatgesplit = Imatge.split('.');
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
    let username = document.forms["form"]["Usuari"].value;
    let password = document.forms["form"]["Contrasenya"].value;
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