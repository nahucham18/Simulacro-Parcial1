<?php

class Moto{

    private $codigo;
    private $costo;
    private $añoFrabricacion;
    private $descripcion;
    private $pia;
    private $activa;

    public function __construct($codigo, $costo, $añoFrabricacion, $descripcion, $pia, $activa)
    {
        $this->codigo = $codigo;
        $this->costo = $costo;
        $this->añoFrabricacion = $añoFrabricacion;
        $this->descripcion = $descripcion;
        $this->pia = $pia;
        $this->activa = $activa;
    }


    /**
     * Get the value of codigo
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get the value of costo
     */ 
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set the value of costo
     *
     * @return  self
     */ 
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get the value of añoFrabricacion
     */ 
    public function getAñoFrabricacion()
    {
        return $this->añoFrabricacion;
    }

    /**
     * Set the value of añoFrabricacion
     *
     * @return  self
     */ 
    public function setAñoFrabricacion($añoFrabricacion)
    {
        $this->añoFrabricacion = $añoFrabricacion;

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
     * Get the value of pia
     */ 
    public function getPia()
    {
        return $this->pia;
    }

    /**
     * Set the value of pia
     *
     * @return  self
     */ 
    public function setPia($pia)
    {
        $this->pia = $pia;

        return $this;
    }

    /**
     * Get the value of activa
     */ 
    public function getActiva()
    {
        return $this->activa;
    }

    /**
     * Set the value of activa
     *
     * @return  self
     */ 
    public function setActiva($activa)
    {
        $this->activa = $activa;

        return $this;
    }

    public function darPrecioVenta(){
        $venta = -1;
        if($this->getActiva()){
            $venta = $this->getCosto() + ( $this->getCosto() * ((2024 -$this->añoFrabricacion) * $this->getPia()));
        }

        return $venta;
    }

    public function __toString()
    {
        $cad = "\nDatos de la moto\nCodigo: " . $this->getCodigo() . "\nCosto: " . $this->getCosto() . "\nAño fabricacion: " . $this->getAñoFrabricacion() . "\nDescripcion: " . $this->getDescripcion() . "\nPIA: " . $this->getPia() . "\nActiva : " . $this->getActiva();

        return $cad;
    }
}