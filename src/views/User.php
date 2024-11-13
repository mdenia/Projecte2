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
      <div class="headerButtons">
        <div><a href="index.php?r=" class="btn btn-primary">Torna Menú Principal</a></div>
      </div>
    </div>
    <h1 class="titolFormulari">Les teves Dades</h1>
    <h3 class="titolFormulari">La teva imatge de perfil</h3>
    <div class="divUserImage"><img class="UserImage" src="<?php echo $User['Imatge'] . "/0.png" ?>" alt="Imatge de perfil"></div>
    <div class="menuform">
      <form class="form" action="index.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="r" value="UpdateUser">
        <label for="Nom">Nom:</label><br>
        <input class="input" type="text" id="nom" name="Nom" required value="<?php echo $User['Nom'] ?>"  aria-label="Nom"><br>
        <label for="cognom">Cognom:</label><br>
        <input class="input" type="text" id="cognom" name="Cognom" required value="<?php echo $User['Cognom'] ?>" aria-label="Cognom"><br>
        <label for="Usuari">Nom d'Usuari</label><br>
        <input class="input" id="usuari" name="User" value="<?php echo $User['User'] ?>" required readonly aria-label="User"><br>
        <label for="Mail">El teu Mail:</label><br>
        <input class="email" type="email" id="email" name="Mail" require value=" <?php echo $User['Mail'] ?> " aria-label="Mail" readonly><br>
        <label for="Password">Vols canviar la Contrasenya?</label><br>
        <input type="password" class="Contrasenya" id="Contrasenya" name="Password" required placeholder="Intordueix la nova contrasenya" aria-label="Contrasenya"><br>
        <label for="Imatge">Imatge de perfil</label><br>
        <input class="input" type="file" id="fileImatge" name="Image" aria-label="Fitxer de la imatge" required><br>
        <input class="input" type="submit" value="Actualitza" name="Submit">
        </form>
    </div>
    <a href="index.php?r=LogoutUser" class="btn btn-primary">LogOut</a>
  </body>
</html>