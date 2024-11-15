<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $recipeName = $_POST['recipeName'];
  $chefName = $_POST['chefName'];
  $category = $_POST['category'];
  $difficultyLevel = $_POST['difficultyLevel'];
  $servingPortion = $_POST['servingPortion'];
  $timeRequiredHour = $_POST['timeRequiredHour'];
  $timeRequiredSecond = $_POST['timeRequiredSecond'];
  // $ingredientsRequired = $_POST['ingredientsRequired'];
  //$procedureSteps = $_POST['procedure'];
  //$nutritionalFacts = $_POST['nutritionalFacts'];
  //$tipsTricks = $_POST['tipsTricks'];

  // Image
  $file_name = $_FILES['recipeImage']['name'];
  $tempname = $_FILES['recipeImage']['tmp_name'];
  $folder = '../uploadedImages/' . $file_name;

  //ingredientsRequired
  $ingredientsRequired = $_POST['ingredientsRequired'];
  $file_name_ir = "ingredientsRequired-".$recipeName."-".$chefName.".txt";
  $file_path = "../uploadedTexts/uploadedIngredientsRequired/".$file_name_ir;
  file_put_contents($file_path, $ingredientsRequired);
  echo "Text has been saved to " . $file_path;

  //procedure
  $procedureSteps = $_POST['procedure'];
  $file_name_ps = "procedureSteps-".$recipeName."-".$chefName.".txt";
  $file_path = "../uploadedTexts/uploadedProcedureSteps/".$file_name_ps;
  file_put_contents($file_path, $procedureSteps);
  echo "Text has been saved to " . $file_path;

  //nutritionalFacts
  $nutritionalFacts = $_POST['nutritionalFacts'];
  $file_name_nf = "nutritionalFacts-".$recipeName."-".$chefName.".txt";
  $file_path = "../uploadedTexts/uploadedNutritionalFacts/".$file_name_nf;
  file_put_contents($file_path, $nutritionalFacts);
  echo "Text has been saved to " . $file_path;

  //tipsTricks
  $tipsTricks = $_POST['tipsTricks'];
  $file_name_tt = "tipsTricks-".$recipeName."-".$chefName.".txt";
  $file_path = "../uploadedTexts/uploadedTipsTricks/".$file_name_tt;
  file_put_contents($file_path, $tipsTricks);
  echo "Text has been saved to " . $file_path;

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "recipetopia";

  $conn = mysqli_connect($servername, $username, $password, $database);

  //(recipeName,chefName,category,difficultyLevel,servingPortion,timeRequiredHour,timeRequiredSecond,ingredientRequired,procedureSteps,nutritionalFacts,tipsTricks,recipeImage,views)
  //default value hala
  $sql = "insert into recipe values ('" . $recipeName . "','" . $chefName . "','" . $category . "','" . $difficultyLevel . "'," . $servingPortion . "," . $timeRequiredHour . "," . $timeRequiredSecond . ",'" . $file_name_ir . "','" . $file_name_ps . "','" . $file_name_nf . "','" . $file_name_tt . "','" . $file_name . "',0);";
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