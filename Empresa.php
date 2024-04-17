<?php

class Empresa
{
    private $denominacionInt;
    private $direccionInt;
    private $coleccionClientesInt;
    private $coleccionMotosInt;
    private $coleccionVentasInt;

    public function __construct($denominacionExt, $direccionExt, $coleccionClientesExt, $coleccionMotosExt, $coleccionVentasExt)
    {
        $this->denominacionInt = $denominacionExt;
        $this->direccionInt = $direccionExt;
        $this->coleccionClientesInt = $coleccionClientesExt;
        $this->coleccionMotosInt = $coleccionMotosExt;
        $this->coleccionVentasInt = $coleccionVentasExt;
    }


    /**
     * Get the value of denominacionInt
     */
    public function getDenominacion()
    {
        return $this->denominacionInt;
    }

    /**
     * Set the value of denominacionInt
     *
     * @return  self
     */
    public function setDenominacion($denominacionInt)
    {
        $this->denominacionInt = $denominacionInt;
    }

    /**
     * Get the value of direccionInt
     */
    public function getDireccion()
    {
        return $this->direccionInt;
    }

    /**
     * Set the value of direccionInt
     *
     * @return  self
     */
    public function setDireccion($direccionInt)
    {
        $this->direccionInt = $direccionInt;
    }

    /**
     * Get the value of coleccionClientesInt
     */
    public function getColeccionClientes()
    {
        return $this->coleccionClientesInt;
    }

    /**
     * Set the value of coleccionClientesInt
     *
     * @return  self
     */
    public function setColeccionClientes($coleccionClientesInt)
    {
        
        $this->coleccionClientesInt = $coleccionClientesInt;
    }

    /**
     * Get the value of coleccionMotosInt
     */
    public function getColeccionMotos()
    {
        return $this->coleccionMotosInt;
    }

    /**
     * Set the value of coleccionMotosInt
     *
     * @return  self
     */
    public function setColeccionMotos($coleccionMotosInt)
    {
        $this->coleccionMotosInt = $coleccionMotosInt;
    }

    /**
     * Get the value of coleccionVentasInt
     */
    public function getColeccionVentas()
    {
        return $this->coleccionVentasInt;
    }

    /**
     * Set the value of coleccionVentasInt
     *
     * @return  self
     */
    public function setColeccionVentas($venta)
    {
        $colVentas = $this->getColeccionVentas();
        array_push($colVentas, $venta);
        $this->coleccionVentasInt = $colVentas;
    }

    public function retornarMoto($codigoMoto)
    {
        $motoBuscada = null;
        foreach ($this->getColeccionMotos() as $moto) {
            if ($moto->getCodigo() == $codigoMoto) {
                $motoBuscada = $moto;
            }
        };
        return $motoBuscada;
    }

    public function registrarVenta($colCodigosMoto, $objCliente)
    {
        $fecha = new DateTime();
        $numVenta = count($this->getColeccionVentas());
        $venta = new Venta($numVenta, $fecha, $objCliente);
        if ($objCliente->getEstadoBaja()) {
            $this->setColeccionVentas($venta);
            foreach ($colCodigosMoto as $codigo) {
                $objMotoCodigoIgual = $this->retornarMoto($codigo);
                if ($objMotoCodigoIgual && $objMotoCodigoIgual->getActiva()) {
                    $venta->incorporarMoto($objMotoCodigoIgual);
                }
            }
        }
        return $venta->getPrecioFinal();
    }

    public function retornarVentasXCliente($tipo, $numDoc)
    {
        $coleccionCompraCliente = [];
        if (count($this->getColeccionVentas()) > 0) {
            foreach ($this->getColeccionVentas() as $venta) {
                $cliente = $venta->getCliente();
                if ($cliente->getTipoDocumento() == $tipo && $cliente->getNumDocumento() == $numDoc) {
                    array_push($coleccionCompraCliente, $venta);
                }
            }
        }

        return $coleccionCompraCliente;
    }

    public function __toString()
    {
        $coleccionCliente = "";

        foreach ($this->getColeccionClientes() as $objCliente) {
            $coleccionCliente .= $objCliente . "\n";
        };


        $coleccionMotos = "";

        foreach ($this->getColeccionMotos() as $objMoto) {
            $coleccionMotos .= $objMoto . "\n";
        };


        $coleccionVenta = "";

        foreach ($this->getColeccionVentas() as $objVenta) {
            $coleccionVenta .= $objVenta . "\n";
        };

        $cad = "=============================\n       Datos empresa \n=============================\nDenominacion: " . $this->getDenominacion() .
            "\nDireccion: " . $this->getDireccion() .
            "\n\n=============================\n         Clientes \n=============================" . $coleccionCliente .
            "\n=============================\n         MOTOS: \n=============================" . $coleccionMotos .
            "\n=============================\n         VENTAS: \n=============================" . $coleccionVenta;

        return $cad;
    }
}
