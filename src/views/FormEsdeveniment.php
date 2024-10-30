<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Formulari</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="header">
            <h1>Projecte 2</h1>
        </div>
        <h1 class="titolFormulari">Nou Esdeveniment</h1>
        <div class="menuform">
            <form class="form">
                <label for="nomEsd">Nom Esdeveniment:</label><br>
                <input class="input" type="text" id="nomEsd" name="nomEsdeveniment" required><br>
                <label for="ubicacioEsd">Ubicació Esdeveniment:</label><br>
                <input class="input" type="number" id="ubicacioEsd" name="Cordenada Y" required><br>
                <input class="input" type="number" id="ubicacioEsd" name="Cordenada X" required><br>
                <label for="fileImatge">Imatge de l'Esdeveniment</label><br>
                <input class="input" type="file" id="fileImatge" name="fileImatge" aria-label="Fitxer de la imatge" required><br>
                <label for="dataEsd">Data i Hora Esdeveniment:</label><br>
                <input class="input" type="date" id="dataEsd" name="dataEsdeveniment" aria-glabel="Reistra dia/mes/any de l'esdeveniment" required>
                <input class="input" type="time" id="dataEsd" name="horaEsdeveniment" aria-label="Registra l'hora de l'esdeveniment" required><br>
                <label for="descripcioEsd">Descripció Esdeveniment:</label><br>
                <textarea class="input" id="descripcioEsd" name="descripcioEsdeveniment" required></textarea><br>
                <submit class="input" type="submit" value="Submit" name="Submit">
            </form>
        </div>
    </body>
</html> 