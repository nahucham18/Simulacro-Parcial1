<?

class Cliente{
    private $nombre;
    private $apellido;
    private $estadoBaja;
    private $tipoDocumento;
    private $numDocumento;

    public function __construct($nombre, $apellido, $estadoBaja, $tipoDocumento, $numDocumento)
    {   
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->estadoBaja = $estadoBaja;
        $this->tipoDocumento = $tipoDocumento;
        $this->numDocumento = $numDocumento;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * Get the value of estadoBaja
     */ 
    public function getEstadoBaja()
    {
        return $this->estadoBaja;
    }

    /**
     * Set the value of estadoBaja
     *
     * @return  self
     */ 
    public function setEstadoBaja($estadoBaja)
    {
        $this->estadoBaja = $estadoBaja;
    }

    /**
     * Get the value of tipoDocumento
     */ 
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * Set the value of tipoDocumento
     *
     * @return  self
     */ 
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;
    }

    /**
     * Get the value of numDocumento
     */ 
    public function getNumDocumento()
    {
        return $this->numDocumento;
    }

    /**
     * Set the value of numDocumento
     *
     * @return  self
     */ 
    public function setNumDocumento($numDocumento)
    {
        $this->numDocumento = $numDocumento;
    }

    public function __toString()
    {
        $cad = "\nNombre:  " . $this->getNombre() . "\nApellido:  " . $this->getApellido() . "\nEstado de baja:  " . $this->getEstadoBaja() . "\nTipo documento: " . $this->getTipoDocumento() . "\nNumero de documento: " . $this->getNumDocumento();

        return $cad;
    }
}