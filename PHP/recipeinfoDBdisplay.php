<?php
$recipeName = $_GET['recipeName'];
$chefName = $_GET['chefName'];

$conn = mysqli_connect("localhost", "root", "", "recipetopia");

$sql = "SELECT * FROM recipe where recipeName= '" . $recipeName . "' and chefName = '" . $chefName . "';";
$result = mysqli_query($conn,$sql );
$row = mysqli_fetch_assoc($result);

$sql = "Update recipe set views=views+1 where recipeName= '" . $recipeName . "' and chefName = '" . $chefName . "';";
mysqli_query($conn,$sql );

?>