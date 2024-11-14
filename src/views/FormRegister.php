<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link rel="stylesheet" href="custom-bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="../src/Functions.js"></script>
    </head>
    <body>
        <div class="header">
            <h1 class="CMDCorporation">CMD Corporation</h1>
            <div class="headerButtons">
                <div><a href="index.php?r=" class="btn btn-primary">Torna Menú Principal</a></div>
            </div>
        </div>
        <h1 class="titolFormulari">Register</h1>
        <div class="menuform">
            <!-- Form to register a new user -->
            <form class="form" name="FormUser" action="index.php" method="post" enctype="multipart/form-data" onsubmit="validateUser()">
                <!-- Hidden input to specify the action -->
                <input type="hidden" name="r" value="RegisterUser">
                <!-- Input for the first name -->
                <label for="Nom">Nom:</label><br>
                <input class="input" type="text" id="nom" name="Nom" required placeholder="Nom, exemple: 'Paco'" aria-label="Nom"><br>
                <!-- Input for the last name -->
                <label for="cognom">Cognom:</label><br>
                <input class="input" type="text" id="cognom" name="Cognom" required placeholder="Cognom, exemple: 'Garcia'" aria-label="Cognom"><br>
                <!-- Input for the username -->
                <label for="Usuari">Usuari</label><br>
                <input class="input" id="usuari" name="User" placeholder="Nom d'Usuari" required aria-label="User"><br>
                <!-- Input for the email -->
                <label for="Mail">Entra el teu email:</label><br>
                <input class="email" type="email" id="email" name="Mail" require placeholder="p.....3@gmail.com" aria-label="Mail"><br>
                <!-- Input for the password -->
                <label for="Password">Contrasenya</label><br>
                <input type="password" class="Contrasenya" id="Contrasenya" name="Password" required placeholder="∗∗∗∗∗∗∗∗∗∗∗∗∗" aria-label="Contrasenya"><br>
                <!-- Input for uploading a profile image -->
                <label for="Imatge">Imatge de perfil</label><br>
                <input class="input" type="file" id="fileImatge" name="Image[]" aria-label="Fitxer de la imatge" required><br>
                <!-- Submit button -->
                <input class="input" type="submit" value="Submit" name="Submit">
            </form>
        </div>
    </body>
</html> 