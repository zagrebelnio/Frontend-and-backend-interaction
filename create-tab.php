<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);

    // Extract title and content from the JSON data
    $title = $input['title'];
    $content = $input['description'];

    // Read existing data from the JSON file
    $tabsData = json_decode(file_get_contents('tabs.json'), true);

    // Add new tab to the array
    $tabsData[] = ['title' => $title, 'content' => $content];

    // Write the updated data back to the JSON file
    file_put_contents('tabs.json', json_encode($tabsData));

    // Redirect to the second page after adding the new tab
    header('Location: second.php');
    exit();
} else {
    http_response_code(405);
}

?>