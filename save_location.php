<?php
$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['latitude']) && isset($data['longitude'])) {
    $lat = $data['latitude'];
    $lon = $data['longitude'];
    $timestamp = date("Y-m-d H:i:s");
    $entry = "$timestamp - Lat: $lat, Lon: $lon\n";

    file_put_contents("locations.txt", $entry, FILE_APPEND);
    echo "Location saved";
} else {
    echo "Invalid input";
}
?>
