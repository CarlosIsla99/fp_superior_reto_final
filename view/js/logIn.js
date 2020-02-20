$(document).ready(function () {
    $(".iniciar").on("click", function () {
        
        var usuario= $(".usuario").val();
        var pass= $(".contrasenia").val();
        if(usuario==""){
            alert("No escribiste el nombre de usuario");
        }else if (pass==""){
            alert("no escribiste la contraseña");
        }else{
            $.ajax({
                method: "POST",
                url: "../controller/cLogIn.php",
                data:{'usuario': usuario, 'contrasenia': pass},
                dataType:"JSON",
                success: function(result){
                    for (i in result){
                        if(result.error==""){
                           // location.href= "../index.html";
                        }else{
                            alert(result.error);
                        }
                    }
                    
                }
            })
        }
        
    });
})