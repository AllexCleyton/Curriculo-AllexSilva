<?php
header('Content-Type: application/json');

$dataFile = 'data.json';

if (!file_exists($dataFile)) {
    echo json_encode([
        'skills' => [],
        'experiences' => []
    ]);
    exit;
}

echo file_get_contents($dataFile);
?>