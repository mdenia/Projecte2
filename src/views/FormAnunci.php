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
            <!-- Form to create a new announcement -->
            <form class="form" name="FormAnunci" action="index.php" method="post" enctype="multipart/form-data" onsubmit="return validateAnunci()">
                <!-- Hidden input to specify the action -->
                <input type="hidden" name="r" value="CreateAnunci">
                <!-- Input for the announcement name -->                
                <label for="nomAnunci">Nom Anunci:</label><br>
                <input class="input" type="text" id="nomAnunci" name="nomAnunci" required placeholder="Nom Anunci"><br>
                <!-- Input for uploading images -->
                <label for="fileImage">Imatges de l'Anunci: </label><br>
                <input class="input" type="file" id="fileImatge" name="fileImage[]" aria-label="Fitxer de la imatge" multiple required><br>
                <!-- Dropdown for selecting the announcement category -->
                <label for="CategoriaAnunci">Categoria De l'Anunci:</label>
                <select name="Categoria" id="Categoria" aria-label="Categoria De l'Anunci">
                    <option value="Categoria1">Categoria1</option>
                    <option value="Categoria2">Categoria2</option>
                    <option value="Categoria3">Categoria3</option>
                    <option value="Categoria4">Categoria4</option>
                </select><br>
                <!-- Textarea for the announcement description -->
                <label for="descripcioAnunci">Descripció Anunci:</label><br>
                <textarea class="textarea" id="descripcioAnunci" name="descripcioAnunci" placeholder="Descripcio Anunci ..........." required></textarea><br>
                <!-- Submit button -->
                <input class="input" type="submit" value="Submit" name="Submit">
            </form>
        </div>
    </body>