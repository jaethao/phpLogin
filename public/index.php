<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>PHP Login</title>
  </head>
  <body>
    <!-- nav bar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">PHP Login Test</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
           <div class="collapse navbar-collapse" id="navbarText">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
      <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
      <a class="nav-link" href="#">Blah</a>
         </li>
         <li class="nav-item">
      <a class="nav-link" href="#">Blah</a>
         </li>
       </ul>
         </div>
    </nav>

    <div id="content" class="container">
      <!-- login form -->
      <div id="loginForm">
        <form action="includes/login.inc.php" method="POST">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="userid" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="passwd" placeholder="Password">
        </div>
        <span><button type="submit" class="btn btn-primary" name="submit">Login</button></span>
        <span><button type="button" class="btn btn-info" id="signBtn">Sign Up</button></span>
      </form>
    </div>

    <!-- sign up form -->
    <div id="signUpForm">
      <form action="includes/signUp.inc.php" method="POST">
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
          </div>
          <div class="form-group col-md-4">
            <label for="userName">Username</label>
            <input type="text" class="form-control" id="userName" name="uid" placeholder="Username">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="pwd" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <label for="fName">First Name</label>
          <input type="text" class="form-control" id="fName" name="first" placeholder="First name">
        </div>
        <div class="form-group">
          <label for="lName">Last Name</label>
          <input type="text" class="form-control" id="lName" name="last" placeholder="Last Name">
        </div>
        <button type="submit" class="btn btn-primary" name="signUp">Submit</button>
      </form>
    </div>
  </div>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<!-- Bootstrap logic -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<!-- logic -->
<script src="assets/logic/logic.js" type="text/javascript"></script>
  </body>
</html>
