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
        <h1 class="titolFormulari">Nou Consell</h1>
        <div class="menuform">
            <form class="form" action="index.php" method="post">
                <input type="hidden" name="r" value="CreateConsell">
                <label for="TitolCnsll">Titol Consell:</label><br>
                <input class="input" type="text" id="TitolCnsll" name="TitolConsell" placeholder="Titol" required><br>
                <label for="DescripcioCnsll">Descripció breu Consell:</label><br>
                <textarea class="textarea" id="DescripcioCnsll" name="DescripcioConsell" placeholder="Descripcio" required></textarea><br>
                <label for="Text_explicatiu">Text explicatiu</label><br>
                <textarea class="textarea" id="Text_explicatiu" name="Text_explicatiu" placeholder="Format markdown" required></textarea><br>
                <label for="Hashtags">Hashtags:</label><br>
                <textarea class="textarea" id="Hashtags" name="Hashtags" require placeholder="Ex: #Sostenible,#Cendrassos,#Figueres.   (Sempre separats per una coma i sense espais entre ells)"></textarea><br>
                <input class="input" type="submit" value="Submit" name="Submit"></input>
            </form>
        </div>
    </body>
</html> 