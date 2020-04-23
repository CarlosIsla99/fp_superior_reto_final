<?php
include_once 'usuarioClass.php';
include_once 'connect_data.php';
class usuarioModel extends usuarioClass{
    private $list=array();
    private $link;

    //Conexion
    public function OpenConnect(){
        
        $konDat=new connect_data();
        try
        {
            $this->link=new mysqli($konDat->host,$konDat->userbbdd,$konDat->passbbdd,$konDat->ddbbname);
        }
        catch(Exception $e)
        {
            echo $e->getMessage();
        }
        $this->link->set_charset("utf8"); // honek behartu egiten du aplikazio eta
        //                  //databasearen artean UTF -8 erabiltzera datuak trukatzeko
    }
    public function CloseConnect(){
        
        mysqli_close ($this->link);
        
    }
    
    //Link
    public function getLink(){
        
        return $this->link;
    }
    /**
     * @param mysqli $link
     */
    public function setLink($link){
        
        $this->link = $link;
        
    }
    
    //Lista
    public function getList(){
        
        return $this->list;
    }


    public function logIn(){
        $this->OpenConnect();
        $usuario=$this->getUsuario();
        $contrasenia=$this->getContrasenia();
        $sql= 'call spLogIn("'.$usuario.'", "'.$contrasenia.'")';
        $result=$this->link->query($sql);
        if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $user=new usuarioModel();
           $user->setContrasenia($row['contrasenia']);
            $user->setUsuario($row['usuario']);
            mysqli_free_result($result);
        }
        return $row;
        $this->CloseConnect();
    }

    public function insertUser(){
        $this->OpenConnect();
        $usuario=$this->getUsuario();
        $num=false;
        $contrasenia=$this->getContrasenia();
        $sql='call sp_select_users()';
        $result=$this->link->query($sql);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            
            if ($row['usuario']==$usuario){
                $num=true;
            }
            
            
        }
        if($num==true){
            return 'Este usuario ya existe';
        }else{
            $nombre=$this->getNombre();
            $apellido=$this->getApellido();
            $descripcion=$this->getDescripcion();
            $sql= 'call sp_registrar("'.$usuario.'", "'.$contrasenia.'", "'.$nombre.'", "'.$apellido.'", "'.$descripcion.'")';
            $result=$this->link->query($sql);
            return $sql;
        }        
        
        $this->CloseConnect();
    }
}
?>