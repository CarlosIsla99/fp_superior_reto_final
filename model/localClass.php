<?php
class localClass{
    protected $usuario;
    protected $idLocal;
    protected $direccion;
    protected $precio;
    protected $cantidadMin;
    protected $cantidadMax;

    public function getUsuario(){
        return $this->usuario;
    }
    public function getIdLocal(){
        return $this->idLocal;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function getCantidadMin(){
        return $this->CantidadMin;
    }
    public function getCantidadMax(){
        return $this->cantidadMax;
    }
    public function setUsuario($usuario){
        $this->usuario=$usuario;
    }
    public function setIdLocal($idLocal){
        $this->idLocal=$idLocal;
    }
    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }
    public function setPrecio($precio){
        $this->precio=$precio;
    }
    public function setCantidadMin($cantidadMin){
        $this->cantidadMin=$cantidadMin;
    }
    public function setCantidadMax($cantidadMax){
        $this->cantidadMax=$cantidadMax;
    }
}
?>