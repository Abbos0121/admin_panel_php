<?php
$host = '127.127.126.26'; //  хост
$dbname = 'foradminpanelphp'; // название базы данных
$username = 'root'; // имя пользователя для базы данных
$password = ''; // пароль

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Ошибка подключения: " . $e->getMessage());
}
?>
