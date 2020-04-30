<?php
$export = "{";
foreach ($_GET as $key => $value) {
	$export .=  '"' . $key . '":"' . $value . '",';
}
$export .= '"manufacturer":"Garni"}';
echo $export;
$file = fopen("data/garni.json", "w+");        
fwrite($file, $export);
fclose($file);
?>
