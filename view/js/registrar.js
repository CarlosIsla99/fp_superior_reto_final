$(document).ready(function(){
    $(".registrar").on("click", function(){
        usuario=$(".user").val();
        pass1=$(".pass1").val();
        pass2=$(".pass2").val();
        name=$(".name").val();
        surname=$(".surname").val();
        descripcion=$("textarea").val();
        $.ajax({
            method: "POST",
            data:{'usuario':usuario, 'pass':pass1, 'name':name, 'surname':surname},
            url: "../controller/cRegistrar.php",
            dataType: "text",
            success: function(result){
                if(result=="Done"){
                    location.href= "../index.html";
                }else{
                    alert(result);
                }
                
            }
        })
    })
})