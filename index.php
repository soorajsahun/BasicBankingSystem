<!DOCTYPE html>
<html lang="en">
<head>
   <title>Basic Banking System</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/tsf.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <style>
    h4{
      position: absolute;
    top: 0%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: black;
}
*{
        font-family: 'Sriracha', cursive;
    }

.card-body a:hover{
  color: white;
        font-size: 16px;
    background-color: #9dc5c3;
background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
}

  </style>
</head>
<body>

<!-- Navigation bar-->
<?php
  include 'navbar.php';
  ?>

  <div class="container-fluid">
        <!-- Introduction section -->
        <div class="intro py-1">
            <div >
                <div >
                   <center> <h1>Welcome to Basic Banking System</h1></center>
                </div>
            </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
            </div>
<
<!-- Caraousel-->
<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/i1.jpg" alt="Easy Transfer" width="1100" height="500">
      <div class="carousel-caption d-none d-md-block">
        <h4>Quick Transaction</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/i2.jpg" alt="Quick Deposit" width="1100" height="500">
      <div class="carousel-caption d-none d-md-block">
        <h4>Quick Loans</h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/i5.jpg" alt="Low interests" width="1100" height="500">
      <div class="carousel-caption d-none d-md-block">
        <h4>Customer Satisfaction</h4>
      </div>
  </div>
  
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="container my-4">
      <div class="row">
        <div class="card col-sm-3 mx-auto" style="width: 25rem;">
          <img src="images/user1.jpg" class="img-thumbnail mt-2" alt="...">         
           <div class="card-body">
              <a href="customers.php" class="btn btn-warning">Customers</a>
          </div>
        </div>
        <div class="card col-sm-3 mx-auto" style="width:25rem;">
          <img src="images/transaction.jpg" class="img-thumbnail mt-2" alt="...">
          <div class="card-body">
              <a href="customers.php" class="btn btn-warning">Transfer Money</a>
          </div>
        </div>
        <div class="card col-sm-3 mx-auto" style="width: 25rem;">
          <img src="images/view transaction.jpg" class="img-thumbnail mt-2" alt="...">
          <div class="card-body">
              <a href="transactions.php" class="btn btn-warning">Transaction History</a>
          </div>
        </div>
    </div>
<!--About us-->
<footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Suraj Sahu</b> <br> For the Project of  <b>The Sparks Foundation</b></p>
    </footer>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>
</html>