<?php
require_once 'includes/config_session.php';
require_once 'signup_folder/signup_view.inc.php';
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
<nav class="navbar navbar-expand-lg navbar-light  p-2">
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

                 <!-- First Modal (Login) -->
                  <div class="modal fade" id="loginModal" aria-hidden="true" aria-labelledby="loginModalLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title text-center fw-bold" id="loginModalLabel">Login</h5>
                         
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="includes/login_folder/login.inc.php" method="POST">
                            <!-- Username Input -->
                            <div class="m-3">
                              <label for="" class="form-label fw-bold">Username</label>
                              <input type="text" class="form-control" id="" name="username">
                            </div>
                            <!-- Email Input -->

                            <!-- Password Input -->
                            <div class="m-3">
                              <label for="" class="form-label fw-bold">Password</label>
                              <input type="password" class="form-control" id="" name="password">
                            </div>
                            <div class="modal-footer d-flex flex-column">
                              <input type="submit" name="login" value="Login" class="btn text-light mx-auto btn-style text-center modal-btn">
                        

                              <div class="p-2 text-center">Don't have an account? 
                                <span style="color:#DA1212" data-bs-target="#registerModal" data-bs-toggle="modal" data-bs-dismiss="modal">Signup</span>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

<!-- Second Modal (SIGNUP) -->
              <div class="modal fade" id="registerModal" aria-hidden="true" aria-labelledby="registerModalLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-center fw-bold" id="registerModalLabel">SIGNUP</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="includes/signup_folder/signup.inc.php" method="POST">
                        <!-- Username Input -->
                        <div class="m-3">
                          <label for="registerUsername" class="form-label fw-bold">Username</label>
                          <input  type="text" class="form-control" id="registerUsername" name="username">
                        </div>
                        <!-- Email Input -->
                        <div class="m-3">
                          <label for="registerEmail" class="form-label fw-bold">Email address</label>
                          <input type="email" class="form-control" id="registerEmail" name="email" placeholder="Your Email Address is safe">
                        </div>
                        <!-- Password Input -->
                        <div class="m-3">
                          <label for="registerPassword" class="form-label fw-bold">Password</label>
                          <input  type="password" class="form-control" id="registerPassword" placeholder="Must contain numbers and letters" name="password">
                        </div>
                        <div class="modal-footer d-flex flex-column">
                          <input type="submit" name="register" value="Register" class="btn text-light mx-auto btn-style text-center modal-btn">
                          <div class="p-2 text-center">Already have an account? 
                            <span style="color:#DA1212" data-bs-target="#loginModal" data-bs-toggle="modal" data-bs-dismiss="modal">Login</span>
                          </div>

                          <!-- ERROR MESSAGE CODE -->
                         
                            <!-- ERROR MESSAGE CODE -->
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
        

<!-- Button to open the first modal -->
<a class="text-light" data-bs-toggle="modal" href="#loginModal" role="button"> Login </a>
                   <!--Double  Modal Test -->
               
            <!-- PHP TEST FOR PROFILE PICTURE AFTER LOGIN -->
                <!-- <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="" alt="Profile" class="rounded-circle" width="30" height="30">
                        Welcome,
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>
                        <li><a class="dropdown-item" href="change_profile_picture.php">Change Profile Picture</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </div> -->

          </ul>
        </div>
      </div>
    </nav>
