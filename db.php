<?php
$db = new PDO('sqlite:database.sqlite');

$db->exec("CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    email TEXT UNIQUE,
    password TEXT
)");

$password = password_hash("1234", PASSWORD_DEFAULT);
$password2 = password_hash("4321", PASSWORD_DEFAULT);

try {
    $db->exec("INSERT INTO users (email, password) VALUES ('test@mail.com', '$password')");
} catch (Exception $e) {}
try {
    $db->exec("INSERT INTO users (email, password) VALUES ('test2@mail.com', '$password2')");
} catch (Exception $e) {}
?>