<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: admin_login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Library Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 300px;
  }
  </style>
</head>
<body>
<?php
include 'include/header.php';
include 'include/config.php';
?>
<div class="container">
  
  <div class="card-columns">
    <div class="card">
      <div class="card-body text-center">
      <i class="fa fa-book fa-3x py-3" aria-hidden="true"></i>
      <?php
          $sql = "SELECT COUNT(*) 'Nunber of Rows' FROM books";
          $result = $link->query($sql);
          while($row = $result->fetch_assoc()){
            foreach($row as $ma){
              echo '<h3>'.$ma.'</h3>';
            }
          }
        ?>
      <h5>Book Lists</h5>
      </div>
    </div>
    <div class="card">
      <div class="card-body text-center">
     <i class="fa fa-calendar fa-3x py-3" aria-hidden="true"></i>
     <h3>2</h3>
      <h5>Time Book Issued</h5>
      </div>
    </div>
    <div class="card">
      <div class="card-body text-center">
      <i class="fa fa-calendar fa-3x py-3" aria-hidden="true"></i>
     <h3>2</h3>
      <h5>Time Book Returned</h5>
      </div>
    </div>
    <div class="card">
      <div class="card-body text-center">
      <i class="fa fa-users fa-3x py-3" aria-hidden="true"></i>
        <?php
          $sql = "SELECT COUNT(*) 'Nunber of Rows' FROM students";
          $result = $link->query($sql);
          while($row = $result->fetch_assoc()){
            foreach($row as $ma){
              echo '<h3>'.$ma.'</h3>';
            }
          }
        ?>
      <h5>Register Users</h5>
      </div>
    </div>  
    <div class="card">
      <div class="card-body text-center">
      <i class="fa fa-user fa-3x py-3" aria-hidden="true"></i>
      <?php
          $sql = "SELECT COUNT(*) 'Nunber of Rows' FROM authors";
          $result = $link->query($sql);
          while($row = $result->fetch_assoc()){
            foreach($row as $ma){
              echo '<h3>'.$ma.'</h3>';
            }
          }
        ?>
      <h5>Authors List</h5>
      </div>
    </div>
    <div class="card">
      <div class="card-body text-center">
      <i class="fa fa-list fa-3x py-3" aria-hidden="true"></i>
      <?php
          $sql = "SELECT COUNT(*) 'Nunber of Rows' FROM category";
          $result = $link->query($sql);
          while($row = $result->fetch_assoc()){
            foreach($row as $ma){
              echo '<h3>'.$ma.'</h3>';
            }
          }
        ?>
      <h5>Categories List</h5>
      </div>
    </div>
  </div>
</div>
</body>
</html>