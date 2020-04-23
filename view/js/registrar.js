$(document).ready(function(){
    $(".registrar").on("click", function(){
        usuario=$(".user").val();
        pass1=$(".pass1").val();
        pass2=$(".pass2").val();
        name=$(".name").val();
        surname=$(".surname").val();
        descripcion=$("textarea").val();
        if(pass1!=pass2){
            alert("estas contraseñas son diferentes");
        }else if(name=="" || pass1==""|| pass2==""||usuario==""||descripcion==""|| surname==""){
            alert("Algún campo falta por rellenar");
        }else if(pass1.length<8){
            alert("la contraseña debe de contener como mínimo 8 caracteres")
        }else{    
        $.ajax({
            method: "POST",
            data:{'usuario':usuario, 'pass':pass1, 'name':name, 'surname':surname, 'descripcion': descripcion},
            url: "../controller/cRegistrar.php",
            dataType: "text",
            success: function(result){
                if(result=="Done"){
                    //location.href= "../index.html";
                }else{
                    alert(result);
                }
                
            }
        })
    }
    })
})