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
            <form class="form" action="index.php" method="post">
                <input type="hidden" name="r" value="CreateEsdeveniment">
                <label for="nomEsd">Nom Esdeveniment:</label><br>
                <input class="input" type="text" id="nomEsd" name="nomEsdeveniment" required placeholder="Nom Esdeveniment"><br>
                <label for="ubicacioEsd">Ubicació Esdeveniment:</label><br>
                <input class="input" type="number" id="ubicacioEsd" name="Latitud" required placeholder="Latitud"><br>
                <input class="input" type="number" id="ubicacioEsd" name="Longitud" required placeholder="Longitud"><br>
                <label for="fileImatge">Imatges de l'Esdeveniment</label><br>
                <input class="input" type="file" id="fileImatge" name="fileImatge" aria-label="Fitxer de la imatge" multiple required><br>
                <label for="dataEsd">Data i Hora Esdeveniment:</label><br>
                <input class="input" type="date" id="dataEsd" name="dataEsdeveniment" aria-glabel="Reistra dia/mes/any de l'esdeveniment" required>
                <input class="input" type="time" id="dataEsd" name="horaEsdeveniment" aria-label="Registra l'hora de l'esdeveniment" required><br>
                <label for="descripcioEsd">Descripció Esdeveniment:</label><br>
                <textarea class="textarea" id="descripcioEsd" name="descripcioEsdeveniment" placeholder="Descripcio Esdeveniment ..........." required></textarea><br>
                <label for="categoriaEsd">Categoria Esdeveniment:</label><br>
                <select class="input" id="categoriaEsd" name="categoriaEsdeveniment" required>
                    <option value="1">Exterior</option>
                    <option value="2">Interior</option>
                </select><br>
                <input class="input" type="submit" value="Submit" name="Submit">
            </form>
        </div>
    </body>
</html> 