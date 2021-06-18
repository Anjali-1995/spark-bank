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
 .container1 {
    border: 2px solid white;
    /* padding: 90px; */
    padding: 25px 25px 75px;
    margin: auto;
    width: 75%;
    text-align: justify;
    box-sizing: border-box;
}

.container4 h5{
  text-align: center;
}
.container1 h5{
  text-align: center;
}
.container2{
  text-align:center;
  margin: auto;
  padding-top: 50px;
  padding-bottom: 50px;
}
.container3{
  text-align:center;
}
#align{
  margin: auto;
  display: block;
}
.container4 {
    border: 2px solid rgb(218, 211, 211);
    /* padding: 90px; */
    padding: 25px 50px 75px;
    margin: auto;
    width: 75%;
    text-align: justify;
    box-sizing: border-box;
    background-color:#dee2e6;
}



    </style>

  <title>YOUR BANK</title>
</head>

<body>
<?php
 include("nav.php");
 ?>

  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel ">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/N2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>THE SPARK FOUNDATION BANK</h5>
          <p>available at 24*7</p>

          <div class="btn-group" role="group" aria-label="Basic mixed styles example">
          <form action="transfer.php">
            <button type="submit"  class="btn btn-danger">Transfer money</button>
            </form>
            <form action="display.php">
            <button type="submit"  class="btn btn-warning">Customers details</button>
            </form>
            <form action="history.php">
            <button type="submit"  class="btn btn-success">Transaction history</button>
            </form>
          </div>

        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/N3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>THE SPARK FOUNDATION BANK</h5>
          <p>save money wisely</p>

          <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <form action="transfer.php">
              <button type="submit"  class="btn btn-danger">Transfer money</button>
              </form>
              <form action="display.php">
              <button type="submit"  class="btn btn-warning">Customers details</button>
              </form>
              <form action="history.php">
              <button type="submit"  class="btn btn-success">Transaction history</button>
              </form>
            </div>

        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/N6.jpg"  class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>THE SPARK FOUNDATION BANK</h5>
          <p>count on us , your own bank</p>

          <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <form action="transfer.php">
              <button type="submit"  class="btn btn-danger">Transfer money</button>
              </form>
              <form action="display.php">
              <button type="submit"  class="btn btn-warning">Customers details</button>
              </form>
              <form action="history.php">
              <button type="submit"  class="btn btn-success">Transaction history</button>
              </form>
            </div>


        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container-fluid container2  d-block d-md-none">
     <h5>THE SPARK FOUNDATION BANK</h5>
          <p>available at 24*7</p>

          
          <!-- <div class="btn-group" role="group" aria-label="Basic mixed styles example"> -->
            <form action="transfer.php">
            <button type="submit" style="width:200px;" class="btn btn-danger">Transfer money</button>
          </form><br><br>
            <form action="display.php">
              <button type="submit" style="width:200px;" class="btn btn-warning" >Customers details</button>
            </form><br><br>
              <form action="history.php">
            <button type="submit" style="width:200px;" class="btn btn-success">Transaction history</button>  
          </form>
  <!-- </div> -->
  </div>

  

  <div class="container1"></div>
  <?php
  include("config.php");
  ?>

  <div class="container4">
    <h5>CREATE NEW USER</h5>
    <form action="" method="POST">
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">NAME</label>
      <input type="text" class="form-control" name="name" id="formGroupExampleInput">
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">EMAIL</label>
      <input type="email" class="form-control" name="email" id="inputEmail3">
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">BALANCE</label>
      <input type="number" class="form-control" name="balance" id="formGroupExampleInput2" >
    </div>
    <button id= "align" type="submit" name="submit" onclick= "myfunction()" class="btn-btn-dark" >SUBMIT</button>
    </form>
  </div>
  <?php
if(isset($_POST['submit']))
{
 
  $name=$_POST['name'];
  $email=$_POST['email'];
  $balance=$_POST['balance'];
 
  if($name!="" && $balance!="" )
  {
  $result=mysqli_query($con,"INSERT INTO `create_user` (`ID`, `NAME`, `EMAIL`, `BALANCE`) VALUES (NULL, '$name', '$email', '$balance')");
  
if($result)
{
  echo '<script>alert("successfully entered")</script>';
}
  }
else
{
  echo '<script>alert("All fields are required")</script>';
  echo "All fields are required";
}
}

?>
 
 
  <div class="container1"></div>

 

  <div class="container1 ">
    <h5>OUR PARTNERS</h5>
    <p>SUNSHINE are aspedia preferred partner for processing eCommerce transactions. Not only do they integrate with all major banks in Australia, but they offer a competitively priced solution that has led to eCommerce success for many of our clients.BLUE OCEAN eLearn3 is a web design and brand agency tailored for both International and Australian Learning Providers (Corporate or RTO Based). We understand that everyone needs a different solution, so we offer a variety of different packages to suit your individual needs and budget. We offer eCommerce enabled web design solutions that will help you take your business online to the cloud.RED ROSE Managed Services with Fixed Prices - Be sure about your IT Security Centra Networks are specialists in supplying, installing, maintaining and securing the perfect network for your business.</p>
  </div>



  <div class="container1">
    <div class="row row-cols-1 row-cols-md-3 g-4 ">
      <div class="col">
        <div class="card h-100">
          <img src="/img/i1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">SUNSHINE CLUB</h5>
            
          </div>
          
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="/img/i2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">BLUE OCEAN CLUB</h5>
            
          </div>
         
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="/img/i3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">RED ROSE CLUB</h5>
            
          </div>
          
        </div>
      </div>
    </div>
  </div>
  


  

 

  

  <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=banglore&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.bgmi.org/">BGMI</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>


  


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