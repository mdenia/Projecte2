<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Formulari</title>
        <link rel="stylesheet" href="custom-bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="header">
            <h1 class="CMDCorporation">CMD Corporation</h1>
            <div class="headerButtons">
                <div><a href="index.php?r=" class="btn btn-primary">Torna Menú Principal</a></div>
            </div>
            <img src="Imatges_BDD/usuari.png" alt="Login" class="Login" onclick="location.href='index.php?r=ViewLogin'">
        </div>
        <h1 class="titolFormulari">Nou Esdeveniment</h1>
        <div class="menuform">
            <form class="form" action="index.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="r" value="CreateEsdeveniment">
                <label for="nomEsd">Nom Esdeveniment:</label><br>
                <input class="input" type="text" id="nomEsd" name="nomEsdeveniment" required placeholder="Nom Esdeveniment"><br>
                <label for="ubicacioEsd">Ubicació Esdeveniment:</label><br>
                <input class="input" type="number" id="ubicacioEsdY" name="Latitud" required placeholder="Latitud" aria-label="Latitud"><br>
                <input class="input" type="number" id="ubicacioEsdX" name="Longitud" required placeholder="Longitud" aria-label="Longitud"><br>
                <label for="fileImage">Imatges de l'Esdeveniment</label><br>
                <input class="input" type="file" id="fileImatge" name="fileImage[]" aria-label="Fitxer de la imatge" multiple required><br>
                <label for="dataEsd">Data i Hora Esdeveniment:</label><br>
                <input class="input" type="date" id="dataEsdD" name="dataEsdeveniment" aria-label="Reistra dia/mes/any de l'esdeveniment" required>
                <input class="input" type="time" id="dataEsdH" name="horaEsdeveniment" aria-label="Registra l'hora de l'esdeveniment" required><br>
                <label for="descripcioEsd">Descripció Esdeveniment:</label><br>
                <textarea class="textarea" id="descripcioEsd" name="descripcioEsdeveniment" placeholder="Descripcio Esdeveniment ..........." required></textarea><br>
                <label for="tipusEsd">Tipus Esdeveniment:</label><br>
                <select class="input" id="tipusEsd" name="tipusEsdeveniment" required>
                    <option value="1">Interior</option>
                    <option value="2">Exterior</option>
                </select><br>
                <input class="input" type="submit" value="Submit" name="Submit">
            </form>
        </div>
    </body>
</html> 