<?php
try{
    require_once '../includes/dbh.inc.php';

    $stmt = $pdo->prepare("SELECT name, email, bloodtype FROM donor; ");
    $stmt->execute();

    function displayDonors($stmt){
        // Check if there are any users
        if ($stmt->rowCount() > 0) {
            echo "<h2>Donor List</h2>";
            echo "<ul>";
            
            // Fetch all users and display them
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<li>";
                echo "Name: " . htmlspecialchars($row['name']) . " | ";
                echo "Email: " . htmlspecialchars($row['email']);
                echo "</li>";
            }
            
            echo "</ul>";
        } else {
            echo "<p>No users found.</p>";
        } 
    }

    // Call the function to display donors
    $donorlist = displayDonors($stmt);
    echo $donorlist ;
}    catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage() . " (Error code: " . $e->getCode() . ")");
}
    $pdo = null;
?>