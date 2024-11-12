<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Formulari Consell</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
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
        <h1 class="titolFormulari">Nou Anunci</h1>
        <div class="menuform">
            <form class="form" action="index.php" method="post">
                <input type="hidden" name="r" value="CreateAnunci">
                <label for="nomAnunci">Nom Anunci:</label><br>
                <input class="input" type="text" id="nomAnunci" name="nomAnunci" required placeholder="Nom Anunci"><br>
                <label for="fileImatge">Imatges de l'Anunci: </label><br>
                <input class="input" type="file" id="fileImatge" name="fileImatge" aria-label="Fitxer de la imatge" multiple required><br>
                <label for="CategoriaAnunci">Categoria De l'Anunci:</label>
                <select name="Categoria" id="Categoria" aria-label="Categoria De l'Anunci">
                    <option value="Categoria1">Categoria1</option>
                    <option value="Categoria2">Categoria2</option>
                    <option value="Categoria3">Categoria3</option>
                    <option value="Categoria4">Categoria4</option>
                </select><br>
                <label for="descripcioAnunci">Descripció Esdeveniment:</label><br>
                <textarea class="textarea" id="descripcioAnunci" name="descripcioAnunci" placeholder="Descripcio Anunci ..........." required></textarea><br>
                <input class="input" type="submit" value="Submit" name="Submit">
            </form>
        </div>
    </body>