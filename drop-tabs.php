<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Тут виконайте видалення всіх даних на сервері (файли, БД тощо).

    // Приклад видалення даних з файлу:
    file_put_contents('tabs.json', json_encode([]));

    // Redirect back to second.php
    header('Location: second.php');
    exit();
} else {
    http_response_code(405);
}
?>
