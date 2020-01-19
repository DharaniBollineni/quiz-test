<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz Loader    </title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

     <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
    
    <!--custom css-->
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>css/quizpage.css"> -->
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"> Quiz Loader </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
  </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url('index.php/Home/index'); ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <!-- <li class="nav-item active">
              <a class="nav-link" href="styleFit.php">About</a>
          </li> -->
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="contactUs.php" id="navbarDropdown" data-toggle="dropdown">More</a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?php echo base_url('index.php/Home/contactUs'); ?>">ContactUs</a>
                  <a class="dropdown-item" href="<?php echo base_url('index.php/Home/quizPage'); ?>">Try a free quiz</a>
                  <a class="dropdown-item"  id="showRecords" href="<?php echo base_url('index.php/Home/viewAllResult'); ?>">View Result</a>
                 <!--  <div class="dropdown-divider">
                      <a class="dropdown-item" href="#">contact3</a>
                  </div> -->
              </div>

          </li>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
      </ul>
  </div>
</nav>
<body>