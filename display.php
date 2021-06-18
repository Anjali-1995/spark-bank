<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> 

    <style>
    .container{
    background-color: silver;
    border: 2px solid white;
    /* padding: 90px; */
    padding: 25px 25px 75px;
    margin: auto;
    width: 100%;
    text-align: justify;
    box-sizing: border-box;
    overflow-x:auto;
    
        }

        
table {
  border-collapse: collapse;
  width: 100%;
  
}

th, td {
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
.container2{
  text-align:center;
  margin: auto;
  padding-top: 50px;
  padding-bottom: 50px;
}
</style>


<title>YOUR BANK</title>
</head>

<body>
<?php
include("nav.php");
?>
<div class="container2">
<h4>CUSTOMER DETAILS</h4>
</div>
<div class="container">

<?php
include("config.php");
error_reporting(0);
$query="SELECT * FROM `create_user`  ";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
//echo "$total";
// $result = mysqli_query($con,"SELECT * FROM contact");

echo "<table border='3' >
<tr>
<th>ID</th>
<th>NAME</th>
<th>EMAIL</th>

<th>BALANCE</th>



</tr>";




 while($row = mysqli_fetch_assoc($data))
{
echo "<tr>";
echo "<td>" . $row['ID'] . "</td>";
echo "<td>" . $row['NAME'] . "</td>";
echo "<td>" . $row['EMAIL'] . "</td>";

echo "<td>" . $row['BALANCE'] . "</td>";

echo "</tr>";
}
echo "</table>";


mysqli_close($con);

?> 

</div>

<div class="container2"></div>

<footer class="footer mt-auto py-3 bg-dark">
    <div class="container text-center">
      <span class="text-muted">YOUR BANK THE SPARK FOUNDATION </span>
    </div>
  </footer>
  

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
</body>

</html>
