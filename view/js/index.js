$(document).ready(function () {
 

    $.ajax({
        type: "GET",
        url: "controller/cLocales.php",
        dataType: "json",
        success: function (data) {

          console.log(data);

          var newRow = "";
          
          $("#locales").empty();

          $.each(data, function (i, local) {
    
            newRow += '<div class="col-sm-5 mt-5 mr-3 ml-3">';
            newRow += '<div class="card">';
            newRow += '<img class="card-img-top" src="view/img/'+local.imagen1+'" alt="Card image cap">';
            newRow += '<div class="card-body">';
            newRow += '<h5 class="card-title">'+local.direccion+'</h5>';
            newRow += '<p id="descripcion" class="card-text">'+local.descripcion+'</p>';
            newRow += '<div class="precio_capacidad" style="display:flex; align-items:center; justify-content:center;">'
            newRow += '<a href="#" class="btn btn-primary mr-2">'+local.precio+'€/mes</a>';
            newRow += '<a href="#" class="btn btn-primary ml-2">Capacidad: '+local.cantidadMin+'-'+local.cantidadMax+'</a>';
            newRow += '</div>'
            newRow += '</div>';
            newRow += '</div>';
            newRow += '</div>';
    
    
          });

          $("#locales").append(newRow);

  
        },
        error: function (xhr) {
          alert("An error occured: " + xhr.status + " " + xhr.statusText);
        }
      });




  });
  
  
  