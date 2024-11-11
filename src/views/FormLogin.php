<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>LogIn</title>
        <link rel="stylesheet" href="/custom-bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="header">
            <h1 class="CMDCorporation">CMD Corporation</h1>
            <div class="headerButtons">
                <div><a href="index.php?r=" class="btn btn-primary">Torna Menú Principal</a></div>
            </div>
        </div>
        <h1 class="titolFormulari">Login</h1>
        <div class="menuform">
        <form class="form" action="index.php" method="post">
                <input type="hidden" name="r" value="LoginUser">
                <label for="Usuari">Usuari</label><br>
                <input class="input" id="Usuari" name="Usuari" placeholder="Nom d'Usuari" required><br>
                <label for="Contrasenya">Contrasenya</label><br>
                <input type="password" class="Contrasenya" id="Contrasenya" name="Contrasenya" required placeholder="∗∗∗∗∗∗∗∗∗∗∗∗∗"><br>
                <input class="input" type="submit" value="Submit" name="Submit">
            </form>
        </div>
    </body>
</html> 