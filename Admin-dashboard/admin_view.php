<?php
// declare(strict_types=1);
$host = 'localhost';
$dbname = 'blood_donation_App';
$dbusername = 'iyke';
$dbpassword = ''; // Add your password here if required



try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    // Prepare and execute the query
    $stmt = $pdo->prepare("SELECT name, email, bloodtype FROM donor; ");
    $stmt->execute();

      // Function to display donors
      function displayDonors($stmt){
        // Check if there are any users
        if ($stmt->rowCount() > 0) {
            echo "<h2>User List</h2>";
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
    displayDonors($stmt);
               
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage() . " (Error code: " . $e->getCode() . ")");
}

    $pdo = null;
?>