<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulari</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="header">
            <h1>Projecte 2</h1>
        </div>
        <h1>Nou Esdeveniment</h1>
        <div class="menuform">
            <form class="form">
                <label for="nomEsd">Nom Esdeveniment:</label><br>
                <input class="input" type="text" id="nomEsd" name="nomEsd"><br>
                <!-- <label for="ubicacioEsd">Ubicació Esdeveniment:</label><br> -->
                <label for="file">Imatge de l'Esdeveniment</label><br>
                <input class="input" type="file" id="fileCanco" name="fileCanco" required><br>
                <label for="dataEsd">Data Esdeveniment:</label><br>
                <input class="input" type="date" id="dataEsd" name="dataEsd">
                <input class="input" type="time" id="horaEsd" name="horaEsd"><br>
                <label for="descripcioEsd">Descripció Esdeveniment:</label><br>
                <textarea class="input" id="descripcioEsd" name="descripcioEsd"></textarea><br>
            </form>
        </div>
    </body>
</html> 