<?php
class usuarioClass{
    protected $id;
    protected $nombre;
    protected $apellido;
    protected $descripcion;
    protected $contrasenia;

    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getContrasenia(){
        return $this->contrasenia;
    }
    public function setId($id){
        $this->id=$id;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
    }
    public function setContrasenia($contrasenia){
        $this->contrasenia=$contrasenia;
    }
}
?>