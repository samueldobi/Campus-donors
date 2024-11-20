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
    <link rel="stylesheet" href="../assets/style.css">
  
    
</head>
<body>
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
              <a class="nav-link mx-2 " aria-current="page" href="../index.php">Home</a>
            </li>
     
          </ul>
         
        </div>
      </div>
    </nav>

    <h2 class=" text-center m-2 p-2 ">Admin Login</h2>

    <div class=" col-6 border rounded mx-auto">

    <form  action = "admin_view.php"  class="" method="POST">

<!-- Name Label -->
    <div class="m-3">
        <label for="name" class="form-label fw-bold">Name</label>
        <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
    </div>
<!-- Name Label -->

<!-- Email Input -->
<!-- <div class="m-3">
    <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">Your Email is safe</div>
</div> -->
<!-- Email Input -->
<!-- Password Input -->
<div class="m-3">
    <label for="exampleInputEmail1" class="form-label fw-bold">Password</label>
    <input type="password" class="form-control" id="" aria-describedby="emailHelp" name="pwd">
    <div id="emailHelp" class="form-text">Type in your password here</div>
</div>
<!-- Password Input -->
 
  


    <div class=" button-links p-2">
        <button type="submit" class="btn text-light  btn-style fs-5" style="width: 100%;">Login</button>

    </div>

</form>
    </div>
</body>
</html>