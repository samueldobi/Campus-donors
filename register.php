<?php
require_once 'config.php';


// Error logs 
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', 'error_log.txt'); // Replace with the actual path where you want to store the log file

error_log("Registration process started");


error_log("Registration process completed without redirect");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $default_image = 'assets/images/defaultpic.png';

    error_log("Registration attempt for username: " . $username);
    
    try {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        error_log("Registering user: " . $username);
        error_log("Hashed password: " . $hashedPassword);
        
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password, profile_picture) VALUES (:username, :email, :password, :profile_picture)");
        $stmt->execute([
            ':username' => $username,
            ':email' => $email,
            ':password' => $hashedPassword,
            ':profile_picture' => $default_image

        ]);
        $_SESSION['message'] = "Registration successful. Please log in."; 
        error_log("Registraion is succesful");
        redirectTo('index.php');
    } catch(PDOException $e) {
        error_log("Registration failed: " . $e->getMessage());
        $error = "Registration failed: " . $e->getMessage();
    }
}
?>
