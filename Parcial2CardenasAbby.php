<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php

$telefonos =  [
    "iPhone 14" => 899,
    "Samsung Galaxy S22" => 599,
    "Google Pixel 6" => 329,
    "OnePlus 9" => 879,
    "Xiaomi Mi 11" => 549,
];


$telefonos["Sony Xperia 1"] = 999;
$telefonos["Motorola Edge 20"] = 499;

asort($telefonos);

foreach ($telefonos as $telefono => $precio) {
    echo "Teléfono: $telefono, Precio: $precio <br>";
}
?>


</body>
</html>