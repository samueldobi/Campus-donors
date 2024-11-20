<?php
try{
    require_once '../includes/dbh.inc.php';

    // if (!isset($pdo)) {
    //     throw new Exception("Database connection not established");
    // }

    $stmt = $pdo->prepare("SELECT name, email, bloodtype FROM recipients; ");
    $stmt->execute();

    // function displayRecipients($stmt){
    //     // Check if there are any users
    //     if ($stmt->rowCount() > 0) {
    //         // echo "<h2 style = 'color:#0d6efd;'>Donor List</h2>";
    //         echo "<ul >";
            
    //         // Fetch all users and display them
    //         while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //             echo "<li style='color: #0d6efd; background-color: #f4f4f4; padding: 10px; margin-bottom: 5px;' >";
    //             echo "Name: " . htmlspecialchars($row['name']) . " | ";
    //             echo "Email: " . htmlspecialchars($row['email']);
    //             echo "Email: " . htmlspecialchars($row['bloodtype']);
    //             echo "</li>";
    //         }
            
    //         echo "</ul>";
    //     } else {
    //         echo "<p>No users found.</p>";
    //     } 
    // }

    // Call the function to display donors
    // $recipientList =
    //  displayRecipients($stmt);
    // echo $recipientList ;
    echo 'hello';
}    catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage() . " (Error code: " . $e->getCode() . ")");
}
    $pdo = null;
?>