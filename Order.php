<?php
$con=mysqli_connect('localhost','root');

if($con)
	{
		
		echo ("connected");

	}else{
		echo "No Connection";
	}

mysqli_select_db($con,'tesla_orders');



		$Name = $_POST['Name'];
		$Email = $_POST['Email'];
		$Address = $_POST['Address'];
		$Model = $_POST['Model'];
		$Color = $_POST['Color'];
		$Drive_Train = $_POST['Drive_Train'];
		$Interior_Trim = $_POST['Interior_Trim'];
		$Mile_Range = $_POST['Mile_Range'];
		$Charger = $_POST['Charger'];
		
		$query = "INSERT INTO `orders` (`Id`, `Name`, `Email`, `Address`, `Model`, `Color`, `Drive_Train`, 
		`Interior_Trim`, `Mile_Range`, `Charger`) VALUES (NULL, '$Name', '$Email', '$Address', '$Model', '$Color ', '$Drive_Train',
		'$Interior_Trim', '$Mile_Range', '$Charger')";
		
		mysqli_query($con, $query);
		header('location:fetch.php')


?>
