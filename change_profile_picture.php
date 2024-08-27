<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == 0) {
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $filename = $_FILES['profile_picture']['name'];
        $filetype = pathinfo($filename, PATHINFO_EXTENSION);

        if (in_array(strtolower($filetype), $allowed)) {
            $newname = "profile_" . $_SESSION['user_id'] . "." . $filetype;
            if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], 'uploads/' . $newname)) {
                $stmt = $pdo->prepare("UPDATE users SET profile_picture = ? WHERE id = ?");
                $stmt->execute(['uploads/' . $newname, $_SESSION['user_id']]);
                $_SESSION['profile_picture'] = 'uploads/' . $newname;
                $message = "Profile picture updated successfully.";
            } else {
                $error = "Failed to upload file.";
            }
        } else {
            $error = "File type not allowed.";
        }
    } else {
        $error = "Error uploading file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Profile Picture</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-4">
        <h2>Change Profile Picture</h2>
        <?php
        if (isset($message)) echo "<p class='alert alert-success'>$message</p>";
        if (isset($error)) echo "<p class='alert alert-danger'>$error</p>";
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="profile_picture" class="form-label">Select new profile picture:</label>
                <input type="file" class="form-control" id="profile_picture" name="profile_picture" required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>