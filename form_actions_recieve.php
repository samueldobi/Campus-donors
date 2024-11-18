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
        font-size: 20px;
        padding: 20px;
        margin: 20px;
        text-align: center;
    }
</style>
<?php 
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
// require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
// $mail = new PHPMailer(true);



// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data and sanitize it using htmlspecialchars
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $bloodtype = htmlspecialchars($_POST['bloodtype'], ENT_QUOTES, 'UTF-8');
    $faculty = htmlspecialchars($_POST['faculty'] ?? '', ENT_QUOTES, 'UTF-8'); // The null coalescing operator provides a default value if the key does not exist

    require_once 'includes/dbh.inc.php';


    // FUNCTION TO INSERT DONOR DATA INTO THE DATABASE
    function get_donor($pdo, $name ,$email, $bloodtype, $faculty){

        // Check if bloodtype is not empty
        if (empty($bloodtype) || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
           echo 'fill all inputs correctly ';
            return;
        } 

         // Prepare the SQL statement with placeholders
         $query = "INSERT INTO recipients (name, email, bloodtype, faculty) VALUES (:name, :email, :bloodtype, :faculty)";
        // TRY STATEMENT
        try {   
            // Prepare the statement
            $stmt = $pdo->prepare($query);
            // Bind parameters
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':bloodtype', $bloodtype);
            $stmt->bindParam(':faculty', $faculty);
            
            // Execute the statement
            if ($stmt->execute()) {
                echo "<h4 >Thank you, $name! We have received your information and will get back to you shortly.</h4><br>
                <a href = index.php > Go back to Home Page</a>
                ";
                
            } else {
                echo "There was an error processing your request. Please try again.";
            }
        }
     catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage() . " (Error code: " . $e->getCode() . ")");
    }
    }


    // CALL THE GET DONOR FUNCTION
    get_donor($pdo, $name, $email, $bloodtype, $faculty);

    // RETRIEVE THE DEFAULT PROFILE PICTURE
    function get_profile_picture(){
        echo 'hello';
    }
}



    // PHP MAILER FUNCTION
        //Server settings
        // $mail->isSMTP();                                            //Send using SMTP
        // $mail->Host       = '';                     //Set the SMTP server to send through
        // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        // $mail->Username   = '';                     //SMTP username
        // $mail->Password   = '';                               //SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        // $mail->Port       = 456;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        // $mail->setFrom('', 'Admin');
        // $mail->addAddress('');     //Add a recipient
        // $mail->addAddress('', 'Admin');     //Add a recipient

        // $mail->isHTML(true);                                  //Set email format to HTML
        // $mail->Subject = 'New submission at Campus Donors';
        // $mail->Body    = 'A new form has been submitted at Campus Donors</b>';
    
        // $mail->send();
         // PHP MAILER FUNCTION END

?>

<?php include 'includes/footer.php' ?>