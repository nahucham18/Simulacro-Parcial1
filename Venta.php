<?

class Venta
{

    private $numero;
    private $fecha;
    private $cliente;
    private $coleccionMotos = array();
    private $precioFinal = 0;

    public function __construct($numero, $fecha, $cliente)
    {
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->cliente = $cliente;
    }

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * Get the value of fecha
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * Get the value of cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set the value of cliente
     *
     * @return  self
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * Get the value of coleccionMotos
     */
    public function getColeccionMotos()
    {
        return $this->coleccionMotos;
    }

    public function setColeccionMotos($moto)
    {
        $colMotos = $this->getColeccionMotos();
        array_push($colMotos, $moto);
        $this->coleccionMotos = $colMotos;
    }


    /**
     * Get the value of precioFinal
     */
    public function getPrecioFinal()
    {
        return $this->precioFinal;
    }

    /**
     * Set the value of precioFinal
     *
     * @return  self
     */
    public function setPrecioFinal($precioFinal)
    {
        $this->precioFinal = $precioFinal;
    }

    public function incorporarMoto($objMoto)
    {
        if ($objMoto->getActiva()) {
            $this->setColeccionMotos($objMoto);
            $total = $this->getPrecioFinal() + $objMoto->darPrecioVenta();
            $this->setPrecioFinal($total);
        }
    }

    public function __toString()
    {
        $cliente = $this->getCliente();
        $motos = "Motos:\n";
        foreach ($this->getColeccionMotos() as $moto) {
            $motos .= "- " . $moto . "\n";
        }
        $cad = "Datos de la venta\nNumero: " . $this->getNumero() . "\nFecha: " . $this->getFecha()->format('Y-m-d H:i:s') . "\nCliente: " . $cliente->getNombre() . "\nPrecio final: " . $this->getPrecioFinal();

        return $cad;
    }
}
