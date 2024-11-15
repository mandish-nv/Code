<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Recipetopia</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Katibeh&family=Roboto:ital,wght@0,400;0,500;1,500&display=swap"
    rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Katibeh&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,400;0,500;1,500&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="../CSS/general.css" />
  <link rel="stylesheet" href="../CSS/header.css" />
  <link rel="stylesheet" href="../CSS/hero.css" />

</head>

<body>
  <header></header>

  <form name="myForm" action="recipeDBinsert.php" method="post" enctype="multipart/form-data" style="padding-top: 5rem;">
    <p>Recipe name: </p>
    <input type="text" name="recipeName">
    <br><br>

    <p>Chef name: </p>
    <input type="text" name="chefName">
    <br><br>

    <p>Category: </p>
    <select name="category">
      <option>Snack</option>
      <option>Lunch</option>
      <option>Drink</option>
      <option>Dinner</option>
    </select>
    <br><br>

    <p>Difficulty level: </p>
    <select name="difficultyLevel">
      <option>Very easy</option>
      <option>Easy</option>
      <option>Moderate</option>
      <option>Difficult</option>
      <option>Very difficult</option>
    </select>
    <br><br>

    <p>Serving portion: </p>
    <input type="text" name="servingPortion">
    <br><br>

    <p>Time required: </p>
    <input type="number" name="timeRequiredHour">hr
    <input type="number" name="timeRequiredSecond">sec
    <br><br>

    <p>Recipe image: </p>
    <input type="file" name="recipeImage" accept="image/*">
    <br><br>

    <p>Ingredients required: </p>
    <textarea name="ingredientsRequired" style="height: 8rem; width: 50rem;"></textarea>
    <br><br>

    <p>Procedure: </p>
    <textarea name="procedure" style="height: 8rem; width: 50rem;"></textarea>
    <br><br>

    <p>Nutritional Facts: </p>
    <textarea name="nutritionalFacts" style="height: 5rem; width: 50rem;"></textarea>
    <br><br>

    <p>Tips & Tricks: </p>
    <textarea name="tipsTricks" style="height: 5rem; width: 50rem;"></textarea>
    <br><br>

    <input type="submit" value="Submit">
  </form>

  <footer></footer>

  <script type="module" src="../JS/recipeForm.js"></script>
</body>
</html>