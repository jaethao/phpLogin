<?php

if(isset($_POST['signUp'])){

  include_once 'dbh.inc.php';

  $first = mysqli_real_escape_string($conn, $_POST['first']);
  $last = mysqli_real_escape_string($conn, $_POST['last']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

//error handler
//check for empty fields
  if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
      header("Location: ../index.php?signUp=empty");
      exit();
  } else {
      //check if input character are valid
      if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
        header("Location: ../index.php?signUp=invalid");
        exit();
      } else {
          //check if email is invalid
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../index.php?signUp=invalidEmail");
            exit();
          } else {
              $sql = "SELECT * FROM users WHERE user_uid='$uid'";
              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);

              if($resultCheck > 0){
                header("Location: ../index.php?signUp=invalidUsername");
                exit();
              } else {
                //hash the Password
                $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                //insert the user into the DATABASE
                $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
                mysqli_query($conn, $sql);
                header("Location: ../index.php?signUp=signUpSuccess");
                exit();
              }
          }
      }
    }
}else {
  header("Location: ../index.php");
  exit();
}
