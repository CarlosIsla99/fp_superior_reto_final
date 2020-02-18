$(document).on("ready", function(){
    $("#logear").on("click", function(){
        tipo=localStorage.getItem("tipo");
        if($(this).hasClass("registrar")){
            if(tipo==null){
                localStorage.setItem("tipo", 2);
            }else{
                localStorage.removeItem("tipo");
                localStorage.setItem("tipo", 2);
            }
           
        }else{
            if(tipo==null){
                localStorage.setItem("tipo",1);
            }else{
                localStorage.removeItem("tipo");
                localStorage.setItem("tipo", 1);
            }
        }
    })
})