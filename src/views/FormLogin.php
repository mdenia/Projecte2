<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>LogIn</title>
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
            <?php
            // Display error message if login credentials are incorrect
            if(isset($_GET['error'])) { 
                if($_GET['error'] == 1) {
                    
            echo "<div class='Error'>Usuari i/o Contrassenya Incorrectes</div>";
            }
        }
            ?>
            
        </div>
        <h1 class="titolFormulari">Login</h1>
        <div class="menuform">
            <!-- Form to log in -->
            <form class="form" name="FormLogin" action="index.php" method="post" onsubmit="return validateLogin()">
                <!-- Hidden input to specify the action -->
                <input type="hidden" name="r" value="LoginUser">
                <!-- Input for the username -->
                <label for="Usuari">Usuari</label><br>
                <input class="input" id="Usuari" name="User" placeholder="Nom d'Usuari" required><br>
                <!-- Input for the password -->
                <label for="Contrasenya">Contrasenya</label><br>
                <input type="password" class="Contrasenya" id="Contrasenya" name="Password" required placeholder="∗∗∗∗∗∗∗∗∗∗∗∗∗"><br>
                <!-- Submit button -->
                <input class="input" type="submit" value="Submit" name="Submit">
            </form>
        </div>
        <div class="ViewRegister">
            <p class="NoUser">No tens usuari?</p><a href="index.php?r=ViewRegister" class="btn btn-primary">Registra't</a>
        </div>
    </body>
</html> 