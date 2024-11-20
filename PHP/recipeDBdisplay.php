<?php
$conn = mysqli_connect("localhost", "root", "", "recipetopia");
$result = mysqli_query($conn, "SELECT recipeName, chefName, category, difficultyLevel, recipeImage, views FROM recipe ORDER BY RAND() LIMIT 16");

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  array_push($data, $row);
}

echo json_encode($data);
exit();