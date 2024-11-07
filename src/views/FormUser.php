<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Formulari Consell</title>
        <link rel="stylesheet" href="../../public/css/style.css">
    </head>
    <body>
        <div class="header">
            <h1>Projecte 2</h1>
        </div>
        <h1 class="titolFormulari">Login</h1>
        <div class="menuform">
            <form class="form" action="index.php" method="post">
                <input type="hidden" name="r" value="LoginUser">
                <label for="Nom">Nom</label>
                <input type="text" id="Nom" name="Nom">
                <label for="Email">Email</label>
                <input type="Email" id="Email" name="Email">
                <label for="Password">Contrasenya</label>
                <input type="Password" id="Password" name="Password">
                <input class="input" type="submit" value="Submit" name="Submit"></input>
            </form>
        </div>
    </body>
</html> 