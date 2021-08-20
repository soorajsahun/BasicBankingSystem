<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="icon" href="images/tsf.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>
<style>
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
    .footer {
            position:absolute;
            bottom:0;
            width:100%;
            height:60px;   /* Height of the footer */
            background:#007bff;
      }
      .colum-color{
            color:black;
            background-color:white;
        }
        
</style>


<?php
  include 'navbar.php';
  ?>
<body style="background-image : url(https://source.unsplash.com/1600x900/?nature,water)" class="bg">



	<div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : white;">
            <tr>
                <th class="text-center colum-color">S.No.</th>
                <th class="text-center colum-color">Sender</th>
                <th class="text-center colum-color">Receiver</th>
                <th class="text-center colum-color">Amount</th>
                <th class="text-center colum-color">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from customers c, transaction t where c.id=t.Sender;";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : white;">
            <td class="py-2 colum-color"><?php echo $rows['id']; ?></td>
            <td class="py-2 colum-color"><?php echo $rows['Name']; ?></td>
            <td class="py-2 colum-color"><?php 
             $sq ="select Name from customers c where  c.id={$rows['Receiver']};";

             $quer =mysqli_query($conn, $sq);
 
             $row = mysqli_fetch_assoc($quer);
            echo $row['Name']; ?></td>
            <td class="py-2 colum-color"><?php echo $rows['Amount']; ?> </td>
            <td class="py-2 colum-color"><?php echo $rows['Date']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>