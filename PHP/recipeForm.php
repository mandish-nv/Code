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

  <form id="myForm" name="myForm" action="recipeDBinsert.php" method="post" enctype="multipart/form-data" style="padding-top: 5rem;">
    <p>Recipe name: </p>
    <input type="text" id="recipeName" name="recipeName" maxlength="20">
    <div class="error" id="recipeNameError"></div>
    <br><br>

    <p>Chef name: </p>
    <input type="text" id="chefName" name="chefName" maxlength="20">
    <div class="error" id="chefNameError"></div>
    <br><br>

    <p>Category: </p>
    <select id="category" name="category">
      <option disabled selected value value=""> -- select an option -- </option>
      <option value="Snacks">Snacks</option>
      <option value="Lunch">Lunch</option>
      <option value="Drink">Drink</option>
      <option value="Dinner">Dinner</option>
      <option value="Cuisine">Cuisine</option>
      <option value="Healthy">Healthy</option>
      <option value="Non-veg">Non-veg</option>
      <option value="Veg">Veg</option>
      <option value="Appetizers">Appetizers</option>
      <option value="Desserts">Desserts</option>
      <option value="Breakfast">Breakfast</option>
      <option value="Fast">Fast</option>
    </select>
    <div class="error" id="categoryError"></div>
    <br><br>

    <p>Difficulty level: </p>
    <select name="difficultyLevel" id="difficultyLevel">
      <option>Very easy</option>
      <option>Easy</option>
      <option selected>Moderate</option>
      <option>Difficult</option>
      <option>Very difficult</option>
    </select>
    <br><br>

    <p>Serving portion: </p>
    <input type="number" id="servingPortion" name="servingPortion">
    <br><br>

    <p>Time required: </p>
    <input type="number" id="timeRequiredHour" name="timeRequiredHour">hr
    <input type="number" id="timeRequiredMinute" name="timeRequiredMinute">min
    <br><br>

    <p>Recipe image: </p>
    <input type="file" id="recipeImage" name="recipeImage" accept="file/*">
    <div class="error" id="fileError"></div>
    <br><br>

    <p>Ingredients required: </p>
    <textarea id="ingredientsRequired" name="ingredientsRequired" style="height: 8rem; width: 50rem;"></textarea>
    <div class="error" id="ingredientsRequiredError"></div>
    <br><br>

    <p>Procedure: </p>
    <textarea id="procedure" name="procedure" style="height: 8rem; width: 50rem;"></textarea>
    <div class="error" id="procedureError"></div>
    <br><br>

    <p>Nutritional Facts: (optional)</p>
    <textarea id="nutritionalFacts" name="nutritionalFacts" style="height: 5rem; width: 50rem;"></textarea>
    <br><br>

    <p>Tips & Tricks: (optional)</p>
    <textarea id="tipsTricks" name="tipsTricks" style="height: 5rem; width: 50rem;"></textarea>
    <br><br>

    <input type="submit" value="Submit">
  </form>

  <footer></footer>

  <script type="module" src="../JS/recipeForm.js"></script>
</body>
</html>