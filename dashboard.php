<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Donors</title>
    
    <!-- favicon-->
    <link rel="icon" href="./assets/images/blood-drop.png" />

  <!-- Bootsrap Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./assets/style.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light  p-3">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="index.php">Campus Donors</a>
        <div class="navbar-nav ms-auto">
            <?php if (isset($_SESSION['user_id'])): ?>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo htmlspecialchars($_SESSION['profile_picture']); ?>" alt="" class="rounded-circle" width="30" height="30">
                        Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>
                        <li><a class="dropdown-item" href="change_profile_picture.php">Change Profile Picture</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            <?php else: ?>
                <a class="nav-link" href="login.php">Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

    </body>
 
<?php include 'includes/footer.php'?>