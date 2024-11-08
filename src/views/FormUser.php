<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Registrarse</title>
        <link rel="stylesheet" href="../../public/custom-bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../../public/css/style.css">
    </head>
    <body>
        <div class="header">
            <h1 class="CMDCorporation">CMD Corporation</h1>
            <div class="headerButtons">
                <div><a href="index.php?r=" class="btn btn-primary">Torna Menú Principal</a></div>
            </div>
        </div>
        <h1 class="titolFormulari">Nou Usuari</h1>
        <div class="menuform">
            <form class="form">
                <label for="Nom">Nom:</label><br>
                <input class="input" type="text" id="nom" name="Nom" required placeholder="Nom, exemple: 'Paco'"><br>
                <label for="cognomEsd">Cognom:</label><br>
                <input class="input" type="text" id="cognom" name="Cognom" required placeholder="Cognom, exemple: 'Garcia'"><br>
                <label for="Usuari">Usuari</label><br>
                <input class="input" id="usuari" name="User" placeholder="Nom d'Usuari" required><br>
                <label for="email">Entra el teu email:</label><br>
                <input class="email" type="email" id="email" name="Mail" require placeholder="p.....3@gmail.com"><br>
                <label for="Contrasenya">Contrasenya</label><br>
                <input type="password" class="Contrasenya" id="Contrasenya" name="Password" required placeholder="∗∗∗∗∗∗∗∗∗∗∗∗∗"><br>
                <label for="fileImatge">Imatge de perfil</label><br>
                <input class="input" type="file" id="fileImatge" name="Imatge" aria-label="Fitxer de la imatge" required><br>
                <input class="input" type="submit" value="Submit" name="Submit">
            </form>
        </div>
    </body>
</html> 