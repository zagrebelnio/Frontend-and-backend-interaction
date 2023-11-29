<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' || $_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('tabs.json'), true);
    echo json_encode($data);
} else {
    http_response_code(405);
}
?>