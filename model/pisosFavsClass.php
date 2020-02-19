<?php
class localClass{

    protected $id;
    protected $idInquilino;
    protected $idLocal;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of idInquilino
     */ 
    public function getIdInquilino()
    {
        return $this->idInquilino;
    }

    /**
     * Set the value of idInquilino
     *
     * @return  self
     */ 
    public function setIdInquilino($idInquilino)
    {
        $this->idInquilino = $idInquilino;

        return $this;
    }

    /**
     * Get the value of idLocal
     */ 
    public function getIdLocal()
    {
        return $this->idLocal;
    }

    /**
     * Set the value of idLocal
     *
     * @return  self
     */ 
    public function setIdLocal($idLocal)
    {
        $this->idLocal = $idLocal;

        return $this;
    }

    function getObjectVars()
    {
        $vars = get_object_vars($this);
        return  $vars;
    }
}
?>