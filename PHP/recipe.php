<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $recipeName = $_POST['recipeName'];
  $chefName = $_POST['chefName'];
  $category = $_POST['category'];
  $difficultyLevel = $_POST['difficultyLevel'];
  $servingPortion = $_POST['servingPortion'];
  $timeRequiredHour = $_POST['timeRequiredHour'];
  $timeRequiredSecond = $_POST['timeRequiredSecond'];
  $ingredientsRequired = $_POST['ingredientsRequired'];
  $procedureSteps = $_POST['procedure'];
  $nutritionalFacts = $_POST['nutritionalFacts'];
  $tipsTricks = $_POST['tipsTricks'];

  // Image
  $file_name = $_FILES['recipeImage']['name'];
  $tempname = $_FILES['recipeImage']['tmp_name'];
  $folder = '../uploadedImages/' . $file_name;

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "recipetopia";

  $conn = mysqli_connect($servername, $username, $password, $database);

  $sql = "insert into recipe values ('" . $recipeName . "','" . $chefName . "','" . $category . "','" . $difficultyLevel . "'," . $servingPortion . "," . $timeRequiredHour . "," . $timeRequiredSecond . ",'" . $ingredientsRequired . "','" . $procedureSteps . "','" . $nutritionalFacts . "','" . $tipsTricks . "','" . $file_name . "');";
  echo $sql;
  mysqli_query($conn, $sql);

  // Image
  if (move_uploaded_file($tempname, $folder)) {
    echo "File uploaded successfully.";
  } else {
    echo "File not uploaded.";
  }



  mysqli_close($conn);
} else {
  echo "Invalid request method.";
}
?>