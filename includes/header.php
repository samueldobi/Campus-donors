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
        <a class="navbar-brand text-light fw-bold" href="index.php">Campus Donors</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 " aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="find_donor.php">Find Donor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="donate.php">Donate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                How it works
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="who_can_donate.php">Who can donate</a></li>
                <li><a class="dropdown-item" href="why_donate.php">Why donate </a></li>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto   ">
            <li class="nav-item mx-2">
          
            <!-- Modal Button -->
                  <!-- Button trigger modal -->
                  <!-- <button type="button" class=" login-reg" data-bs-target="#exampleModal"> -->
                  <a class="nav-link login-btn " href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Login/Signup</a>
                  <!-- </button> -->

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title text-center" id="exampleModalLabel">Login/Signup</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form  action = "form_actions.php"  class="" method="POST">
                          <!-- Name Input -->
                        <div class="m-3">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input type="name" class="form-control" id="nameInput" aria-describedby="emailHelp" name="name">
                        </div>
                       <!-- Name Input -->
                        <!-- Email Input -->
                        <div class="m-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
                            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" name="email" placeholder="Your Email  Address is safe">
                            <!-- <div id="emailHelp" class="form-text"></div> -->
                        </div>
                        <!-- Email Input -->
                         <!-- Password Input -->
                        <div class="m-3">
                            <label for="Password" class="form-label fw-bold">Password</label>
                            <input type="name" class="form-control" id="passwordInput" aria-describedby="emailHelp" placeholder="Must contain numbers and letters " name="Password" >
                            <span><i class="fa-solid fa-eye-slash" id="eye-slash"></i></span>
                        </div>
                       <!-- Password Input -->
                        </form> 
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn text-light mx-auto btn-style text-center modal-btn" data-bs-dismiss="modal" id="login-button">Login</button>
                          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                      </div>
                    </div>
                  </div>
            <!-- Modal Button -->
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link text-dark h5" href="" target="blank"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link text-dark h5" href="" target="blank"><i class="fab fa-facebook-square"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
