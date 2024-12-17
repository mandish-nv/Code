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
  <link rel="stylesheet" href="../CSS/recipeForm.css" />

</head>

<body>
  <header></header>

  <section class="recipeForm">
    <div class="center-align">
      <p class="recipe-title">Enter your recipe: </p>
    </div>

    <form id="myForm" name="myForm" action="recipeDBinsert.php" method="post" enctype="multipart/form-data">
      <table>
        <tr>
          <th>
            <p>Recipe name: </p>
          </th>
          <td><input type="text" id="recipeName" name="recipeName" maxlength="20">
            <div class="error" id="recipeNameError"></div>
          </td>
        </tr>

        <tr>
          <th>
            <p>Chef name: </p>
          </th>
          <td><input type="text" id="chefName" name="chefName" maxlength="20">
            <div class="error" id="chefNameError"></div>
          </td>
        </tr>

        <tr>
          <th>
            <p>Category: </p>
          </th>
          <td><select id="category" name="category">
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
          </td>
        </tr>

        <tr>
          <th>
            <p>Difficulty level: </p>
          </th>
          <td><select name="difficultyLevel" id="difficultyLevel">
              <option>Very easy</option>
              <option>Easy</option>
              <option selected>Moderate</option>
              <option>Difficult</option>
              <option>Very difficult</option>
            </select></td>
        </tr>

        <tr>
          <th>
            <p>Serving portion: </p>
          </th>
          <td><input type="number" id="servingPortion" name="servingPortion"></td>
        </tr>

        <tr>
          <th>
            <p>Time required: </p>
          </th>
          <td><input type="number" id="timeRequiredHour" name="timeRequiredHour">
            <p> hr </p>
            <input type="number" id="timeRequiredMinute" name="timeRequiredMinute">
            <p> min </p>
          </td>
        </tr>

        <tr>
          <th>
            <p>Recipe image: </p>
          </th>
          <td><input type="file" id="recipeImage" name="recipeImage" accept="file/*">
            <div class="error" id="fileError"></div>
          </td>
        </tr>

        <tr>
          <th>
            <p>Ingredients<br>required: </p>
          </th>
          <td><textarea id="ingredientsRequired" name="ingredientsRequired"
              style="height: 16rem; width: 44rem;"></textarea>
            <div class="error" id="ingredientsRequiredError"></div>
          </td>
        </tr>

        <tr>
          <th>
            <p>Procedure: </p>
          </th>
          <td><textarea id="procedure" name="procedure" style="height: 20rem; width: 44rem;"></textarea>
            <div class="error" id="procedureError"></div>
          </td>
        </tr>

        <tr>
          <th>
            <p>Nutritional Facts: <br>(optional)</p>
          </th>
          <td><textarea id="nutritionalFacts" name="nutritionalFacts" style="height: 12rem; width: 44rem;"></textarea>
          </td>
        </tr>

        <tr>
          <th>
            <p>Tips & Tricks: <br>(optional)</p>
          </th>
          <td><textarea id="tipsTricks" name="tipsTricks" style="height: 12rem; width: 44rem;"></textarea></td>
        </tr>
      </table>

      <div class="center-align" style="padding-top:3rem">
        <input type="submit" value="Submit" class="submitButton">
      </div>

    </form>
  </section>

  <footer></footer>

  <script type="module" src="../JS/recipeForm.js"></script>
</body>

</html>