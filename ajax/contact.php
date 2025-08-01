<?php
header('Content-Type: application/json');
$host = 'localhost';    
$dbName = 'preciou3_portfolio';  
$username = 'preciou3_admin';   
$password = '..';   

$host = $host;
$db   = $dbName;
$user = $username;
$pass = $password;
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$response = ['success' => false];
$errors = [];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Validate and sanitize inputs
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (!$name) {
        $errors['name'] = 'Name is required.';
    }

    if (!$email) {
        $errors['email'] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email format is invalid.';
    }

    if (!$message) {
        $errors['message'] = 'Message cannot be empty.';
    }

    if ($errors) {
        $response['errors'] = $errors;
        echo json_encode($response);
        exit;
    }

    // Prepare and execute insert query
    $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, message) VALUES (:name, :email, :message)");
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':message' => $message
    ]);

    $response['success'] = true;
    $response['message'] = 'Message sent successfully.';

    echo json_encode($response);

} catch (PDOException $e) {
    http_response_code(500);
    $response['message'] = 'Server error: unable to send message.';
    echo json_encode($response);
    error_log('Contact form error: ' . $e->getMessage());
    exit;
}
?>