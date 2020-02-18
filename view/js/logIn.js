$(document).on("ready", function(){
    var htmlzatia="";
    tipo=localStorage.getItem("tipo");

    if(tipo==1){
        htmlzatia=/*html*/`
            <div class="inputs">
                <span>usuario</span>
                <input type="text" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
                <span>Contraseña</span>
                <input type="text" class="form-control" placeholder="Contrasenia" aria-label="password" aria-describedby="basic-addon1">
            </div>
            <div class="botones">
            <button type="button" class="btn btn-primary"><a href="../index.html">cancelar</a></button>
            <button type="button" class="btn btn-primary">iniciar sesión</button>
            </div>
        `
        
    }else if(tipo==2){
        htmlzatia=/*html*/`
        <div class="inputs">
        <span>Usuario</span>
        <input type="text" class="form-control user" placeholder="usuario" aria-label="Username" aria-describedby="basic-addon1">
        <span>Contraseña</span>
        <input type="text" class="form-control pass1" placeholder="contrasenia" aria-label="password" aria-describedby="basic-addon1">
        <span>Vuelve a escribir la contraseña</span>
        <input type="text" class="form-control pass2" placeholder="contrasenia" aria-label="password" aria-describedby="basic-addon1">
        <span>Nombre</span>
        <input type="text" class="form-control name" placeholder="nombre" aria-label="name" aria-describedby="basic-addon1">
        <span>apellido</span>
        <input type="text" class="form-control surname" placeholder="apellido" aria-label="surname" aria-describedby="basic-addon1">
        <span>Descripción</span>
        <textarea rows="4" cols="50"></textarea>
        </div>
        <div class="botones">
        <button type="button" class="btn btn-primary"><a href="../index.html">cancelar</a></button>
        <button type="button" class="btn btn-primary">iniciar sesión</button>
        </div>
        `
        
    }
    $(".container").html(htmlzatia);
})