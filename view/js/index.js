$(document).ready(function () {
 

    $.ajax({
        type: "GET",
        url: "controller/cLocales.php",
        dataType: "json",
        success: function (data) {

          console.log(data);
  
        },
        error: function (xhr) {
          alert("An error occured: " + xhr.status + " " + xhr.statusText);
        }
      });




  });
  
  
  