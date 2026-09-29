<?php

include '../../db.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$sql = "SELECT therapy_id, therapy_name
        FROM hospital_therapies
        WHERE is_selected = 1
        ORDER BY therapy_name ASC";

$result = mysqli_query($con, $sql);

if (!$result) {
    echo json_encode([
        "status" => false,
        "message" => mysqli_error($con)
    ]);
    exit;
}

$data = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode([
    "status" => true,
    "data" => $data
]);

?>