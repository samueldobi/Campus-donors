<?php
require_once 'config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    try {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        error_log("Registering user: " . $username);
        error_log("Hashed password: " . $hashedPassword);
        
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $stmt->execute([
            ':username' => $username,
            ':email' => $email,
            ':password' => $hashedPassword
        ]);
        $_SESSION['message'] = "Registration successful. Please log in.";
        redirectTo('dashboard.php');
    } catch(PDOException $e) {
        error_log("Registration failed: " . $e->getMessage());
        $error = "Registration failed: " . $e->getMessage();
    }
}
?>
