<?php

require_once __DIR__ . '/../helpers.php';

// Выносим данных из $_POST в отдельные переменные

$name = $_POST['name'] ?? null;
$grup = $_POST['grup'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

// Выполняем валидацию полученных данных с формы

// if (empty($name)) {
//     setValidationError('name', 'Неверное имя');
// }

// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     setValidationError('email', 'Указана неправильная почта');
// }

// if (empty($password)) {
//     setValidationError('password', 'Пароль пустой');
// }

// // Если список с ошибками валидации не пустой, то производим редирект обратно на форму

// if (!empty($_SESSION['validation'])) {
//     setOldValue('name', $name);
//     setOldValue('email', $email);
//     redirect('/register.php');
// }

// $pdo = getPDO();

// $query = "INSERT INTO users (name, grup, email, password) VALUES (:name, :grup, :email, :password)";

// $params = [
//     'name' => $name,
//     'grup' => $grup,
//     'email' => $email,
//     'password' => password_hash($password, PASSWORD_DEFAULT)
// ];

// $stmt = $pdo->prepare($query);

// try {
//     $stmt->execute($params);
// } catch (\Exception $e) {
//     die($e->getMessage());
// }

redirect('/home.php');
