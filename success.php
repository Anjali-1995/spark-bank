<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> 

    
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

    <style>
        .container{

background-color: white;
border: 2px solid white;
/* padding: 90px; */
padding: 70px 25px 75px;
margin: auto;
width: 75%;
text-align: center;
box-sizing: border-box;
overflow-x:auto;

}
.container1{

background-color: red;
border: 2px solid white;
/* padding: 90px; */
padding: 70px 25px 75px;
margin: auto;
width: 75%;
text-align: center;
box-sizing: border-box;
overflow-x:auto;

}


    </style>

  <title>YOUR BANK</title>
</head>

<body>
<?php
include("nav.php");
?>
  
  
  
    <div class="container">
  <h5>TRANSFER MONEY</h5>
  <form class="transact" id="form" action="transferdata.php" form method="POST">
    
    <input type="text" class="form-control" name="senderName" placeholder="Sender's Name" id="sname" required><br>
    <input type="text" class="form-control" placeholder="Recipient's Name" name="recipientName" id="rname" required><br>
    <input type="number" class="form-control" placeholder="Amount" id="amt" name="amount" required ><br>
    <a href="success.php"><button class="btn btn-primary text-dark" type="submit"  value="Transaction" name="Transact"class= "form control">Transact</button></a>
    <br><br><br>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>HURRY!</strong> SUCCESSFULLY TRANSFERED.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

    </div> 
    
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    

  </body>
  </html>

  