<?php
$fp = fopen('datapribadi.csv', 'r');
$headers = fgetcsv($fp); // Get column headers

$csvdata = array();
while (($row = fgetcsv($fp)) !== false) {
    $data[] = array_combine($headers, $row);
}
fclose($fp);

$jsonData = json_encode($csvdata, JSON_PRETTY_PRINT);

header('Content-Type: application/json');

echo $json;
?>
