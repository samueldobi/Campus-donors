<?php
require_once 'config.php';

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





// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = $_POST['username'];
//     $password = $_POST['password'];
    
//     try {
//         $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE username = :username");
//         $stmt->execute([':username' => $username]);
//         $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
//         if ($user && password_verify($password, $user['password'])) {
//             $_SESSION['user_id'] = $user['id'];
//             $_SESSION['username'] = $user['username'];
//             redirectTo('dashboard.php');
//         } else {
//             $error = "Invalid username or password";
//         }
//     } catch(PDOException $e) {
//         $error = "Login failed: " . $e->getMessage();
//     }
// }

ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', 'error_log.txt'); // Replace with the actual path where you want to store the log file

error_log("Login process started");

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = $_POST['username'];
//     $password = $_POST['password'];
    
//     error_log("Login attempt for username: " . $username);
    
//     try {
//         $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE username = :username");
//         $stmt->execute([':username' => $username]);
//         $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
//         if ($user) {
//             error_log("User found in database");
//             if (password_verify($password, $user['password'])) {
//                 error_log("Password verified successfully");
//                 $_SESSION['user_id'] = $user['id'];
//                 $_SESSION['username'] = $user['username'];
//                 error_log("Session variables set");
//                 error_log("Redirecting to dashboard.php");
//                 redirectTo('dashboard.php');
//             } else {
//                 error_log("Password verification failed");
//                 $error = "Invalid username or password";
//             }
//         } else {
//             error_log("User not found in database");
//             $error = "Invalid username or password";
//         }
//     } catch(PDOException $e) {
//         error_log("Database error: " . $e->getMessage());
//         $error = "Login failed: " . $e->getMessage();
//     }
// }

error_log("Login process completed without redirect");

// 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    error_log("Login attempt for username: " . $username);
   
    try {
        $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE username = :username");
        $stmt->execute([':username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
       
        if ($user) {
            error_log("User found in database");
            error_log("Stored hashed password: " . $user['password']);
            error_log("Provided password: " . $password);
            
            if (password_verify($password, $user['password'])) {
                error_log("Password verified successfully");
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                error_log("Session variables set");
                error_log("Redirecting to dashboard.php");
                header("Location: dashboard.php");
                exit();
            } else {
                error_log("Password verification failed");
                error_log("password_verify result: " . (password_verify($password, $user['password']) ? 'true' : 'false'));
                $error = "Invalid username or password";
            }
        } else {
            error_log("User not found in database");
            $error = "Invalid username or password";
        }
    } catch(PDOException $e) {
        error_log("Database error: " . $e->getMessage());
        $error = "Login failed: " . $e->getMessage();
    }
}
?>
<?php include 'includes/header.php'?>
<p class="fw-bold fs-4 text-center p-3 m-3"> Your account does not exist or you typed the wrong details, please ensure you typed the correct details</p>

<p class="text-center"><a href="index.php" class="text-center"><span> Back to Home Page</span></a></p>
<?php include 'includes/footer.php'?>

