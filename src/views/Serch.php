<?php
if ($_POST["search"]=='1') {
    $sql = "select * FROM Esdeveniment WHERE Data >= '".$_POST["Start"]."' AND Data <= '".$_POST["End"]."'";
    if ($_POST["Start"] !== NULL) {
        $sql .= " AND Data >= '".$_POST["Start"]."'";
    }
    if ($_POST["End"] !== NULL) {
        $sql .= " AND Data <= '".$_POST["End"]."'";
    }
    $response = $conn->query($sql);
    while($row = $response->fetch_assoc()) {
        echo '<div class="textEsdeveniment">
        <div class="divEventTitle"><h2 class="left"><?=$Events["Titol_Esdeveniment"]?></h2></div>
        <div class="divEventImage"><img class="EventImage" src="<?=$Events["Imatge"]?>/0.png" alt="Imatge Esdeveniment"></div>
        <p class="left"><?=$Events["Descripcio_Esdeveniment"]?></p>
        <div class="divEventDate"><p class="Eventp">Data: </p><p><?=$Events["Data"]?></p></div>
        <div class="divEventHour"><p class="Eventp">Hora: </p><p><?=$Events["Hora"]?></p></div>
        <div class="divEventLocation"><p class="Eventp">Localització: </p></div>
        <div><a href="index.php?r=ViewLocation&Latitud=<?=$Events["Latiud"]?>&Longitud=<?=$Events["Longitud"]?>" class="btn btn-success">Veure Localització</a></div>
        <!-- Display whether the event is indoors or outdoors -->
        <?php if($Events["Tipus"] == 1) { ?>
          <p class="left">Interior</p>
        <?php } else { ?>
          <p class="left">Exterior</p>
        <?php } ?>
      </div>';
    }
}