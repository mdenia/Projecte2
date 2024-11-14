$(document).ready(function(){
    $("input[type='radio'][name='category']").change(function(){
        if (this.value != "") {
            $.ajax({
                url: "index.php?r=ViewEsdeveniment",
                type: "POST",
                data: {
                    category: this.value
                },
                success: function(data) {
                    $("#events").empty();
                    addNewEvents(data);
                }
            });
        }
    });
});

function addNewEvents(data) {
    data = JSON.parse(data);
    for (var key in data.Event) {
        let eventHTML = `<div class="esdeveniment">
        <div class="textEsdeveniment">
          <div class="divEventTitle">
            <h2 class="left">` + data.Event[key].Titol_Esdeveniment + `</h2>
          </div>
          <div class="divEventImage"><img class="EventImage" src='` + data.Event[key].Imatge + `/0.png' alt='Imatge Esdeveniment'></div>
          <p class="left">` + data.Event[key].Descripcio_Esdeveniment + `</p>
          <div class="divEvent">
            <p class="Eventp">Data: </p>
            <p>` + data.Event[key].Data + `<p>
          </div>
          <div class="divEvent">
            <p class="Eventp">Hora: </p>
            <p>` + data.Event[key].Hora + `</p>
          </div>
          <div class="divEventLocation">
            <p class="Eventp">Localització: </p>
          </div>
          <div><a href="index.php?r=ViewLocation&Latitud=` + data.Event[key].Latitud + `&Longitud=` + data.Event[key].Longitud + `" class="btn btn-success">Veure Localització</a></div>
          <!-- Display whether the event is indoors or outdoors -->
          <?php if (` + data.Event[key].Tipus + ` == 1) { ?>
            <div class="divEvent">
              <p class="Eventp">Tipus: </p>
              <p class="left">Interior</p>
            </div>
          <?php } else { ?>
            <div class="divEvent">
              <p class="Eventp">Tipus: </p>
              <p class="left">Exterior</p>
            </div>
          <?php } ?>
        </div>
      </div>`
        $("#events").append(eventHTML);
    }
}