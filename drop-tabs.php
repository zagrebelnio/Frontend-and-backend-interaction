<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    file_put_contents('tabs.json', json_encode([]));

    // Redirect back to second.php
    header('Location: second.php');
    exit();
} else {
    http_response_code(405);
}
?>
