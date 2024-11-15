<?php
$recipeName = $_GET['recipeName'];
$chefName = $_GET['chefName'];

$sql = "SELECT * FROM recipe where recipeName= '" . $recipeName . "' and chefName = '" . $chefName . "';";

$conn = mysqli_connect("localhost", "root", "", "recipetopia");
$result = mysqli_query($conn,$sql );
$row = mysqli_fetch_assoc($result);

// $category=$_GET['category'];
// $difficultyLevel=$_GET['difficultyLevel'];
// $servingPortion=$_GET['servingPortion'];
// $timeRequiredHour	=$_GET['timeRequiredHour	'];
// $timeRequiredSecond=$_GET['timeRequiredSecond'];
// $ingredientsRequired	=$_GET['ingredientsRequired	'];
// $procedureSteps=$_GET['procedureSteps'];
// $nutritionalFacts=$_GET['nutritionalFacts'];
// $tipsTricks=$_GET['tipsTricks'];
// $recipeImage=$_GET['recipeImage'];
// $views=$_GET['views'];



?>