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
      <link rel="stylesheet" href="../../public/custom-bootstrap/css/bootstrap.css">
      <link rel="stylesheet" href="../../public/css/style.css">
      <link rel="stylesheet" href="../../public/leaflet/leaflet.css">
      <link rel="stylesheet" href="../../public/font-awesome-4.7.0/css/font-awesome.min.css">
      <script src="../../public//leaflet/leaflet.js"></script>
      <script src="../../public/../src/Functions.js"></script>
  </head>
  <body>
    <div class="header">
      <h1 class="CMDCorporation">CMD Corporation</h1>
      <div class="headerButtons">
        <div><a href="index.php?r=" class="btn btn-primary">Torna Menú Principal</a></div>
      </div>
      <img src="Imatges_BDD/usuari.png" alt="Login" class="Login" onclick="location.href='index.php?r=ViewLogin'">
      <div>
        <input type="date" name="search" id="Start">
        <input type="date" name="search" id="End">
        <button type="submit" onclick="Date_Filter($('#Start').val(),$('#End').val());"><i class="fa fa-search"></i></button>
      </div>
    </div>
    <div class="titol">
      <h1>Esdeveniments</h1>
    </div>
    <?php 
    // Loop through each event and display its details
    foreach($Event as $index => $Events) { ?>
    <div class="esdeveniment">
      <div class="textEsdeveniment">
        <!-- <div class="divEventTitle"><h2 class="left"><?=$Events['Titol_Esdeveniment']?></h2></div>
        <div class="divEventImage"><img class="EventImage" src='<?=$Events["Imatge"]?>/0.png' alt='Imatge Esdeveniment'></div>
        <p class="left"><?=$Events['Descripcio_Esdeveniment']?></p>
        <div class="divEvent"><p class="Eventp">Data: </p><p><?=$Events['Data']?></p></div>
        <div class="divEvent"><p class="Eventp">Hora: </p><p><?=$Events['Hora']?></p></div>
        <div class="divEventLocation"><p class="Eventp">Localització: </p></div>
          <div><a href="index.php?r=ViewLocation&Latitud=<?=$Events["Latitud"]?>&Longitud=<?=$Events["Longitud"]?>" class="btn btn-success">Veure Localització</a></div>
        Display whether the event is indoors or outdoors
        <?php if($Events['Tipus'] == 1) { ?>
          <div class="divEvent"><p class="Eventp">Tipus: </p><p class="left">Interior</p></div>
        <?php } else { ?>
          <div class="divEvent"><p class="Eventp">Tipus: </p><p class="left">Exterior</p></div>
        <?php } ?> -->
      </div>
    </div>
    <?php } ?>
  </body>
</html>