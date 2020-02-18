<?php
class inquilinoClass{
    protected $id;
    protected $usuario;
    protected $idLocal;

    public function getId(){
        return $this->id;
    }
    public function getUsuario(){
        return $this->usuario;
    }
    public function getIdLocal(){
        return $this->idLocal;
    }
    public function setId($id){
        $this->id=$id;
    }
    public function setUsuario($usuario){
        $this->usuario=$usuario;
    }
    public function setIdLocal($idLoal){
        $this->idLocal=$idLocal;
    }
}
?>