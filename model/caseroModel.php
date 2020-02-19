<?php
include_once 'connect_data.php';
include_once 'caseroClass.php';
class localModel extends localClass{
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

    // public function setList()
    // {
    //     $this->OpenConnect();
    //     $sql="call sp_locales_load()";
        
    //     $result = $this->link->query($sql);
    //     while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    //     {
    //         $newLocal = new localModel();
            
    //         $newLocal->setIdLocal($row['idLocal']);
    //         $newLocal->setIdCasero($row['idCasero']);
    //         $newLocal->setDireccion($row['direccion']);
    //         $newLocal->setPrecio($row['precio']);
    //         $newLocal->setCantidadMin($row['cntidadMin']);
    //         $newLocal->setCantidadMax($row['cntidadMax']);
    //         $newLocal->setDescripcion($row['descripcion']);
    //         $newLocal->setImagen1($row['imagen1']);
    //         $newLocal->setImagen2($row['imagen2']);
    //         $newLocal->setImagen3($row['imagen3']);
            
    //         require_once ($_SERVER['DOCUMENT_ROOT']."/ERRONKA4_GRUPO2/model/equipo_categoriaModel.php");
            
    //         $equipo_categoria = new equipo_categoriaModel();
    //         $equipo_categoria->setIdEquipo($row['idEquipo']);
    //         $equipo_categoria->findCategoria();
            
    //         $newEquipo->objectCategoria=$equipo_categoria;
            
    //         array_push($this->list, $newLocal);
    //     }
    //     mysqli_free_result($result);
    //     $this->CloseConnect();
    // }

}
?>