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
        $contrasenia=$this->getContraseia();
        $sql= 'call spLogIn("'.$usuario.'", "'.$contrasenia.'")';
        $result=$this->link->query($sql);
        if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $user=new userModel();
           $user->setContrasenia($row['contrasenia']);
            $user->setUsuario($row['usuario']);
            mysqli_free_result($result);
        }
        return $row;
        $this->CloseConnect();
    }
}
?>