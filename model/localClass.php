<?php
class localClass{

    protected $idLocal;
    protected $idCasero;
    protected $direccion;
    protected $precio;
    protected $cantidadMin;
    protected $cantidadMax;
    protected $descripcion;
    protected $imagen1;
    protected $imagen2;
    protected $imagen3;

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

    /**
     * Get the value of idCasero
     */ 
    public function getIdCasero()
    {
        return $this->idCasero;
    }

    /**
     * Set the value of idCasero
     *
     * @return  self
     */ 
    public function setIdCasero($idCasero)
    {
        $this->idCasero = $idCasero;

        return $this;
    }

    /**
     * Get the value of direccion
     */ 
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */ 
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */ 
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of cantidadMin
     */ 
    public function getCantidadMin()
    {
        return $this->cantidadMin;
    }

    /**
     * Set the value of cantidadMin
     *
     * @return  self
     */ 
    public function setCantidadMin($cantidadMin)
    {
        $this->cantidadMin = $cantidadMin;

        return $this;
    }

    /**
     * Get the value of cantidadMax
     */ 
    public function getCantidadMax()
    {
        return $this->cantidadMax;
    }

    /**
     * Set the value of cantidadMax
     *
     * @return  self
     */ 
    public function setCantidadMax($cantidadMax)
    {
        $this->cantidadMax = $cantidadMax;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of imagen1
     */ 
    public function getImagen1()
    {
        return $this->imagen1;
    }

    /**
     * Set the value of imagen1
     *
     * @return  self
     */ 
    public function setImagen1($imagen1)
    {
        $this->imagen1 = $imagen1;

        return $this;
    }

    /**
     * Get the value of imagen2
     */ 
    public function getImagen2()
    {
        return $this->imagen2;
    }

    /**
     * Set the value of imagen2
     *
     * @return  self
     */ 
    public function setImagen2($imagen2)
    {
        $this->imagen2 = $imagen2;

        return $this;
    }

    /**
     * Get the value of imagen3
     */ 
    public function getImagen3()
    {
        return $this->imagen3;
    }

    /**
     * Set the value of imagen3
     *
     * @return  self
     */ 
    public function setImagen3($imagen3)
    {
        $this->imagen3 = $imagen3;

        return $this;
    }

    function getObjectVars()
    {
        $vars = get_object_vars($this);
        return  $vars;
    }
    
}
?>