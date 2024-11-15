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
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script>
    $(document).ready(function() {
      $(".slider").bxSlider();
    });
  </script>
</head>
<body>
  <div class="header">
    <h1 class="CMDCorporation">CMD Corporation</h1>
    <div class="headerButtons">
      <div class="ButtonLine">
        <div><a href="index.php?r=FormEsdeveniment" class="btn btn-primary">Afegir Esdeveniment</a></div>
        <div><a href="index.php?r=FormConsell" class="btn btn-primary">Afegir Consell</a></div>
        <div><a href="index.php?r=FormAnunci" class="btn btn-primary">Afegir Anunci</a></div>
      </div>
      <div class="ButtonLine2">
        <div><a href="index.php?r=ViewEsdeveniment" class="btn btn-warning">Tots Els Esdeveniments</a></div>
        <div><a href="index.php?r=ViewConsell" class="btn btn-warning">Tots Els Consells</a></div>
        <div><a href="index.php?r=ViewAnunci" class="btn btn-warning">Tots Els Anuncis</a></div>
      </div>
    </div>
    <img src="img\User.png" alt="Login" class="Login" onclick="location.href='index.php?r=ViewUser'">
  </div>
  <!-- Carrousel -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="cards-wrapper">
          <!-- Cards -->
          <div class="card">
            <img src='<?=$Event[23]["Imatge"]?>/0.png' class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?=$Event[23]['Titol_Esdeveniment']?></h5>
              <p class="card-text"><?=$Event[23]['Descripcio_Esdeveniment']?></p>
              <div class="localitzacio"><a href="index.php?r=ViewLocation&Latitud=<?=$Event[23]["Latitud"]?>&Longitud=<?=$Event[23]["Longitud"]?>" class="btn btn-primary">Veure Localització</a></div>
            </div>
          </div>
          <div class="card">
            <img src='<?=$Event[24]["Imatge"]?>/0.png' class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?=$Event[24]['Titol_Esdeveniment']?></h5>
              <p class="card-text"><?=$Event[24]['Descripcio_Esdeveniment']?></p>
              <div class="localitzacio"><a href="index.php?r=ViewLocation&Latitud=<?=$Event[24]["Latitud"]?>&Longitud=<?=$Event[24]["Longitud"]?>" class="btn btn-primary">Veure Localització</a></div>
            </div>
          </div>
          <div class="card">
            <img src='<?=$Event[25]["Imatge"]?>/0.png' class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?=$Event[25]['Titol_Esdeveniment']?></h5>
              <p class="card-text"><?=$Event[25]['Descripcio_Esdeveniment']?></p>
              <div class="localitzacio"><a href="index.php?r=ViewLocation&Latitud=<?=$Event[25]["Latitud"]?>&Longitud=<?=$Event[25]["Longitud"]?>" class="btn btn-primary">Veure Localització</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="cards-wrapper">
          <div class="card">
            <img src='<?=$Event[27]["Imatge"]?>/0.png' class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?=$Event[27]['Titol_Esdeveniment']?></h5>
              <p class="card-text"><?=$Event[27]['Descripcio_Esdeveniment']?></p>
              <div class="localitzacio"><a href="index.php?r=ViewLocation&Latitud=<?=$Event[27]["Latitud"]?>&Longitud=<?=$Event[27]["Longitud"]?>" class="btn btn-primary">Veure Localització</a></div>
            </div>
          </div>
          <div class="card">
            <img src='<?=$Event[42]["Imatge"]?>/0.png' class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?=$Event[42]['Titol_Esdeveniment']?></h5>
              <p class="card-text"><?=$Event[42]['Descripcio_Esdeveniment']?></p>
              <div class="localitzacio"><a href="index.php?r=ViewLocation&Latitud=<?=$Event[42]["Latitud"]?>&Longitud=<?=$Event[42]["Longitud"]?>" class="btn btn-primary">Veure Localització</a></div>
            </div>
          </div>
          <div class="card">
            <img src='<?=$Event[44]["Imatge"]?>/0.png' class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?=$Event[44]['Titol_Esdeveniment']?></h5>
              <p class="card-text"><?=$Event[44]['Descripcio_Esdeveniment']?></p>
              <div class="localitzacio"><a href="index.php?r=ViewLocation&Latitud=<?=$Event[44]["Latitud"]?>&Longitud=<?=$Event[44]["Longitud"]?>" class="btn btn-primary">Veure Localització</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Button to previous carrousel-item -->
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev" aria-label="Carrousel Previ">
      <span class="fa fa-arrow-left" aria-hidden="true"></span>
    </a>
    <!-- Button to next carrousel-item -->
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next" aria-label="Carrousel Seguent">
      <span class="fa fa-arrow-right" aria-hidden="true"></span>
    </a>
  </div>
</body>
</html>