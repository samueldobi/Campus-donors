<?php
    require_once '../includes/dbh.inc.php';
try{

    $pdo = Database::getConnection();
    $stmt = $pdo->prepare("SELECT name, email, bloodtype FROM donor; ");
    $recStmt = $pdo->prepare("SELECT name, email, bloodtype FROM recipients; ");
    $stmt->execute();
    $recStmt->execute();


    function displayDonors($stmt){
        // Check if there are any users
        if ($stmt->rowCount() > 0) {
            // echo "<h2 style = 'color:#0d6efd;'>Donor List</h2>";
            echo "<ul >";
            
            // Fetch all users and display them
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<li style='color: #0d6efd; background-color: #f4f4f4; padding: 10px; margin-bottom: 5px;' >";
                echo "Name: " . htmlspecialchars($row['name']) . " | ";
                echo "Email: " . htmlspecialchars($row['email']);
                echo "Email: " . htmlspecialchars($row['bloodtype']);
                echo "</li>";
            }
            
            echo "</ul>";
        } else {
            echo "<p>No users found.</p>";
        } 
    }

    // Display Recipients
    function displayRecipients($recStmt){
        // Check if there are any users
        if ($recStmt->rowCount() > 0) {
            echo "<ul >";
            
            // Fetch all users and display them
            while ($row = $recStmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<li style='color: #dc3545; background-color: #f4f4f4; padding: 10px; margin-bottom: 5px;' >";
                echo "Name: " . htmlspecialchars($row['name']) . " | ";
                echo "Email: " . htmlspecialchars($row['email']);
                echo "Email: " . htmlspecialchars($row['bloodtype']);
                echo "</li>";
            }
            
            echo "</ul>";
        } else {
            echo "<p>No users found.</p>";
        } 
    }

    function adminName(){}
}    catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage() . " (Error code: " . $e->getCode() . ")");
}
    $pdo = null;
?>