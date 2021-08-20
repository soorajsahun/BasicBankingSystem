<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="icon" href="images/tsf.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
     .table{
            opacity: 1;
        }
        .bg{
            width: 100%;
            height: 100%;
            position:absolute;
            z-index: -1;
            opacity: 0.9;
        }
      button{
        border: 2px solid black;
        background-color: white;
        color: black;
        padding: 14px 28px;
        font-size: 16px;
        cursor: pointer;
        margin: 5px;
      }
      button:hover{
        color: white;
        font-size: 16px;
    background-color: #9dc5c3;
background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
      }
      
      .colum-color{
        color:black;
        background-color:white;
      }
      .footer {
        position:absolute;
        bottom:0;
        width:100%;
        height:60px;   /* Height of the footer */
        background:#007bff;
      }

    </style>
</head>

<?php
    include 'config.php';
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
  ?>

<body style="background-image : url(https://source.unsplash.com/1600x900/?nature,water)" class="bg">
<div class="container">
        <h2 class="text-center pt-4" style="color : black;">Customers</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:white;">
                        <thead style="color : white;">
                            <tr>
                            <th scope="col" class="text-center py-2 colum-color">Account No.</th>
                            <th scope="col" class="text-center py-2 colum-color">Account Holder Name</th>
                            <th scope="col" class="text-center py-2 colum-color">E-Mail</th>
                            <th scope="col" class="text-center py-2 colum-color">Account Balance(in Rs.)</th>
                            <th scope="col" class="text-center py-2 colum-color">Operation</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : white;">
                        <td class="py-2 colum-color"><?php echo $rows['id'] ?></td>
                        <td class="py-2 colum-color"><?php echo $rows['Name']?></td>
                        <td class="py-2 colum-color"><?php echo $rows['Email']?></td>
                        <td class="py-2 colum-color"><?php echo $rows['Balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transfer money</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>