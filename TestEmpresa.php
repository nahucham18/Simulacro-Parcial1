<?

include "Cliente.php";
include "Empresa.php";
include "Moto.php";
include "Venta.php";

$objCliente1 =  new Cliente("Nahuel", "Chamorro", true,"dni", 39288730);
$objCliente2 =  new Cliente("Joako", "Vulcano", true,"dni", 45654895);

$moto1 = new Moto(11,2230000,2022, "Benelli Imperiale 400", 85 , true);
$moto2 = new Moto(12,584000,2021, "Zanella >r 150 Ohc Imperiale 400", 70 , true);
$moto3 = new Moto(13,999900,2023,"Zanella Patagonian Eagle 250", 55 , false);

$empresa = new Empresa("Alta Gama", "Av Argenetina 123",[$objCliente1,$objCliente2], [$moto1, $moto2, $moto3], []);

$empresa->registrarVenta([11,12,13],$objCliente2);
$empresa->registrarVenta([0],$objCliente2);
$empresa->registrarVenta([2],$objCliente2);

$empresa->retornarVentasXCliente("dni",39288730);
$empresa->retornarVentasXCliente("dni",45654895);

echo $empresa;

