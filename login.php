<?php
require_once 'config.php';

// User Registration
// function registerUser($username, $email, $password) {
//     global $pdo;
    
//     try {
//         // Hash the password
//         $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
//         // Prepare SQL statement
//         $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        
//         // Bind parameters
//         $stmt->bindParam(':username', $username);
//         $stmt->bindParam(':email', $email);
//         $stmt->bindParam(':password', $hashedPassword);
        
//         // Execute the statement
//         $stmt->execute();
        
//         return "Registration successful";
//     } catch(PDOException $e) {
//         return "Error: " . $e->getMessage();
//     }
// }

// // User Login
// function loginUser($username, $password) {
//     global $pdo;
    
//     try {
//         // Prepare SQL statement
//         $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE username = :username");
        
//         // Bind parameter
//         $stmt->bindParam(':username', $username);
        
//         // Execute the statement
//         $stmt->execute();
        
//         // Fetch the result
//         $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
//         if ($user && password_verify($password, $user['password'])) {
//             // Password is correct
//             session_start();
//             $_SESSION['user_id'] = $user['id'];
//             $_SESSION['username'] = $user['username'];
//             return "Login successful";
//         } else {
//             return "Invalid username or password";
//         }
//     } catch(PDOException $e) {
//         return "Error: " . $e->getMessage();
//     }
// }

// // Example usage
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (isset($_POST['register'])) {
//         $username = $_POST['username'];
//         $email = $_POST['email'];
//         $password = $_POST['password'];
//         echo registerUser($username, $email, $password);
//     } elseif (isset($_POST['login'])) {
//         $username = $_POST['username'];
//         $password = $_POST['password'];
//         echo loginUser($username, $password);
//     }
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    try {
        $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE username = :username");
        $stmt->execute([':username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            redirectTo('donate.php');
        } else {
            $error = "Invalid username or password";
        }
    } catch(PDOException $e) {
        $error = "Login failed: " . $e->getMessage();
    }
}
?>

