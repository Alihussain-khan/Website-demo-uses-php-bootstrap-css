<!DOCTYPE html>
<html>
<head>
	<title>Electric Cars, Solar & Clean Energy | Order Done</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel = "icon" href="images\Icon.jpg" type = "image/x-icon" > 
			<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-expand-lg navbar-light bg-transparent">
  <a href="#"><img class="navbar-brand" src="images\Logo.png" href="index.php" style="height:50px; width:300px;"></img></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
	  <li class="nav-item">
        <a class="nav-link" href="Index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Model 3.php">Model 3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Model S.php">Model S</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Model X.php">Model X</a>
      </li> 
	  <li class="nav-item">
        <a class="nav-link" href="Model Y.php">Model Y</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Charging.php">Charging</a>
      </li>
      
    </ul>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\order done.jpg" alt="Tesla Model 3" width="1100" height="500">
      <div class="carousel-caption">
        <h3 style="color: white; font-weight: bold; font-size: 300%; ">Welcome To The Family</h3>
		 <p style="color: white; font-weight: bold;">Your Order Has been received<br> Our Employee Will be contacting you soon</p>
    </div>
  </div>
</div>
<br>
<h1 class="py-5"align="center">Order Received :-)</h1>
<br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tesla_orders";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM orders where Id=(select Max(Id) from orders)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<table style='font-weight: bold; margin-left:40%; margin-bottom:10%; font-size:150%;'   height='500px' width='400px' border-style= '5x'>" . "<tr>" . "<td style='font-weight:bold;'>" . "Order ID : " ."</td>". "<td>" .$row["Id"]."</td>"."</tr>". "<tr>" . "<td style='font-weight:bold;'>". "Name :  " ."</td>". "<td>" .$row["Name"]."</td>"."</tr>"."<tr>" . "<td style='font-weight:bold;'>". "Email : " ."</td>". "<td>" . $row["Email"]. "</td>"."</tr>"."<tr>" . "<td style='font-weight:bold;'>". "Adress : "."</td>". "<td>" . $row["Address"] ."</td>"."</tr>"."<tr>" . "<td style='font-weight:bold;'>". "Model : "."</td>". "<td>" . $row["Model"]."</td>"."</tr>"."<tr>" . "<td style='font-weight:bold;'>". "Color : "."</td>". "<td>" . $row["Color"]."</td>"."</tr>"."<tr>" . "<td style='font-weight:bold;'>". "Drive Train : "."</td>". "<td>" . $row["Drive_Train"]."</td>"."</tr>"."<tr>" . "<td style='font-weight:bold;'>". "Interior Trim : "."</td>". "<td>" . $row["Interior_Trim"]."</td>"."</tr>"."<tr>" . "<td style='font-weight:bold;'>". "Mile Range : "."</td>". "<td>" . $row["Mile_Range"]."</td>"."</tr>"."<tr>" . "<td style='font-weight:bold;'>". "Charger : "."</td>". "<td>" . $row["Charger"]."</td>"."</tr>". "</table>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<footer class="page-footer bg-dark text-white">

	<div class="bg-dark">
		<div class="container">
			<div class="row py-4 d-flex align-items-center">
				<div class="col-md-12 text-center">
					<a href="#"><i class="fab fa-facebook-square text-white mr-4"></i></a>
					<a href="#"><i class="fab fa-twitter text-white mr-4"></i></a>
					<a href="#"><i class="fab fa-google-plus-square text-white mr-4"></i></a>
					<a href="#"><i class="fab fa-linkedin text-white"></i></a>
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	
	<div class="container text-center text-md-left mt-5">
		<div class="row">
			<div class="col-md-3 mx-auto mb-4">
				<h6 class="text-uppercase font-weight-bold">Customer Privacy Notice</h6>
				<hr class="bg-success mb-4 mt-0 d-inline-block mx=auto" style="width: 220px; heght: 2px">
				<p class="m-2"> Get to know our Privacy Notice and your choices 
				about how information is used. This notice is designed to provide transparency into 
				our privacy practices, in a format that is easy to read, understand and navigate. 
				Reference each section to get an overview of how we collect, use, share, 
				and safeguard your information, or click learn more to expand and view the full Customer Privacy Notice.</p> 
			</div>
			<div class="col-md-2 mx-auto mb-4">
				<h6 class="text-uppercase font-weight-bold">Our Products</h6>
				<hr class="bg-success mb-4 mt-0 d-inline-block mx=auto" style="width: 120px; heght: 2px">
			
				<ul class="list-unstyled">
					<li class="my-2"><a href="Model 3.php">Model 3</a></li>
					<li class="my-2"><a href="Model X.php">Model X</a></li>
					<li class="my-2"><a href="Model Y.php">Model Y</a></li>
					<li class="my-2"><a href="Model S.php">Model S</a></li>
				</ul>
			</div>
			<div class="col-md-2 mx-auto mb-4">
				<h6 class="text-uppercase font-weight-bold">Page Links</h6>
				<hr class="bg-success mb-4 mt-0 d-inline-block mx=auto" style="width: 120px; heght: 2px">
				
				<ul class="list-unstyled">
					<li class="my-2"><a href="Index.php">Home</a></li>
					<li class="my-2"><a href="About Us.php">About Us</a></li>
					<li class="my-2"><a href="Charging.php">Charging</a></li>
					<li class="my-2"><a href="Company Goals.php">Company Goals</a></li>
				</ul>
			</div>
			<div class="col-md-3 mx-auto mb-4">
				<h6 class="text-uppercase font-weight-bold">Contact Us</h6>
				<hr class="bg-success mb-4 mt-0 d-inline-block mx=auto" style="width: 120px; heght: 2px">
				
				<ul class="list-unstyled">
					<li class="my-2"><i class="fas fa-home"> Burgemeester Stramanweg 1221101 EN, Amsterdam Netherlands</i></li>
					<li class="my-2"><i class="fas fa-envelope "></i> Dubai_Sales@tesla.com</li>
					<li class="my-2"><i class="fas fa-phone"></i> 800035704364</li>
					<li class="my-2"><i class="fas fa-fax"></i> 800035704364</li>
					
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright text-center py-3">
		<p>&copy: Copyright
			<a href="#">techreverie.com</a></p>
		<p>Designed and implimented by Ali Hussain Khan</p>
	</div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

</body>
</html>