<?php include 'includes/header.php' ?>
<style>
    h4{
        text-align: center;
        padding: 20px;
        margin: 20px;
        font-weight: 500;
        font-size: 30px;
    }
    a{
        font-size: 15px;
        padding: 20px;
        margin: 20px;
        /* text-align: center; */
        /* margin-left: 50vw; */
    }
</style>
<?php 
// DATABASE INITIALIZATION
 $host = 'localhost';
 $user = 'iyke';
 $password = "Madeofsteel";
 $dbname = 'blood_donation_app';

 //Set DSN
 $dsn = 'mysql:host='. $host .';dbname='. $dbname;

// Create a PDO instance
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);



// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // echo "Blood Type Selected: " . $_POST['bloodtype'];
    // Collect the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $bloodtype = $_POST['bloodtype'];
    $faculty = $_POST['faculty'];

    // Sanitize the data (important for security)
    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $bloodtype = htmlspecialchars($bloodtype);
    $faculty = htmlspecialchars($faculty);

    if (!empty($bloodtype)) {
        // Prepare the SQL statement with placeholders
        $sql = "INSERT INTO donor (name, email, bloodtype, faculty) VALUES (:name, :email, :bloodtype, :faculty)";
        
        try {
            // Prepare the statement
            $stmt = $pdo->prepare($sql);
            
            // Bind the parameters to the statement
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':bloodtype', $bloodtype);
            $stmt->bindParam(':faculty', $faculty);
            
            // Execute the statement
            if ($stmt->execute()) {
                echo "<h4 >Thank you, $name! We have received your information and will get back to you shortly.</h4><br>
                <a href = index.php style = text-align:center;> Go back to Home Page</a>
                ";
            } else {
                echo "There was an error processing your request. Please try again.";
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    } else {
        echo "Please select your blood type.";
    }
}

    // You can now use this data, e.g., store it in a database or send it via email
    // echo "Thank you, $name! We have received your message: \"$message\". We will contact you shortly at $email.";

    // Example: Insert data into the database or send an email
    // (Code for database insertion or email sending would go here)

?>

<?php include 'includes/footer.php' ?>