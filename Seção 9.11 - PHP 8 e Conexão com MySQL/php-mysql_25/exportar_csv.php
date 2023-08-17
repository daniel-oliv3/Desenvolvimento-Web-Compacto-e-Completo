<?php

// export all data to CSV file

use sys4soft\Database;

require_once('config.php');
require_once('libraries/Database.php');

$database = new Database(MYSQL_CONFIG);

// get results
$results = $database->execute_query("SELECT * FROM contactos");

$rows = $results->results;

// store data into csv file
$filename = "contactos_" . time() . '.csv';

$file = fopen($filename, 'w');

// store the header
$headers = [];
foreach($rows[0] as $key => $value){
    $headers[] = $key;
}
fputcsv($file, $headers);

// store rows
$tmp = [];
foreach($rows as $row){
    $obj = (array)$row;
    fputcsv($file, $obj);
}

fclose($file);

// download file
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-lenght: ' . filesize($filename));
readfile($filename);







?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    17/08/2023
-->