<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bxslider@4.2.17/dist/jquery.bxslider.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bxslider@4.2.17/dist/jquery.bxslider.min.js"></script>
        <link rel="stylesheet" href="custom-bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="header">
            <h1 class="CMDCorporation">CMD Corporation</h1>
            <!-- Button to return index.php -->
            <div class="headerButtons">
                <div><a href="index.php?r=" class="btn btn-primary">Torna Menú Principal</a></div>
            </div>
            <!-- Image to login or register -->
            <img src="img\User.png" alt="Login" class="Login" onclick="location.href='index.php?r=ViewLogin'">
        </div>
        <div class="titol">
            <h1 class="titolFormulari">Anuncis</h1>
        </div>
        <?php 
        // Loop through each ad and display its details
        foreach ($Anunci as $Anuncis) {
        ?>
        <div class="Anunci">
            <div class="textAnunci">
                <div class="divEventTitle"><h2 class="title"><?=$Anuncis["Titol_Anunci"]?></h2></div>
                <div class="divAnunciImage"><img class="AnunciImage" src='<?=$Anuncis["Imatge"]?>/0.png' alt='Imatge Anunci'></div>
                <div class="Categoria"><p class="left"><?=$Anuncis["Categoria"]?></p></div>
                <p class="left"><?=$Anuncis["Descripcio_Anunci"]?></p>
            </div>
        </div>
        <?php
        }
        ?>
    </body>
</html>