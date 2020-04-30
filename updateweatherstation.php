<?php
// script: Garni Weather Station server PHP script
// version: 1.0 (MIT licence)
// author: Petr Fismol (buffy.cz)
$export = "{";
foreach ($_GET as $key => $value) {
	$export .=  '"' . $key . '":"' . $value . '",';
}
$export .= '"manufacturer":"Garni"}';
echo $export; // comment this line for switch off browser data output
$file = fopen("data/garni.json", "w+");        
fwrite($file, $export);
fclose($file);
?>
