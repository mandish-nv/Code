<?php
include "recipeinfoDBdisplay.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Recipe</title>

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
  <link rel="stylesheet" href="../CSS/recipe.css" />
</head>

<body>
  <header></header>

  <nav class="recipe-nav">
    <div>
      <p class="recipe-nav-title">Navigation:</p>
    </div>
    <div class="recipe-nav-contents">
      <p><a href="#title">1. Title</a></p>
      <p><a href="#ingredients-required-section">2. Ingredients required</a></p>
      <!-- <p>3. Video demonstration</p> -->
      <p><a href="#procedure-section">3. Procedure</a></p>
      <p><a href="#additional-information-section">4. Additional information</a></p>
      <!-- <p>5. Comments</p>
        <p>6. Similar recipe</p> -->
    </div>
  </nav>

  <div>
    <section class="recipe-title-info" id="title">
      <div class="recipe-title-left">
        <div class="recipe-title-main">
          <div class="recipe-title-main-division1">
            <div class="recipe-name-div">
              <p class="recipe-name"><?php echo $row["recipeName"] ?></p>
            </div>
            <div>
              <i class="fa-regular fa-heart fa-2x" style="color: #993b00"></i>
            </div>
          </div>
          <div class="recipe-title-main-division2">
            <div>
              <p class="chef-name"><?php echo $row["chefName"] ?></p>
            </div>
            <div>
              <i class="fa-regular fa-star fa-xl" style="color: #ffb427"></i>
              <i class="fa-regular fa-star fa-xl" style="color: #ffb427"></i>
              <i class="fa-regular fa-star fa-xl" style="color: #ffb427"></i>
              <i class="fa-regular fa-star fa-xl" style="color: #ffb427"></i>
              <i class="fa-regular fa-star fa-xl" style="color: #ffb427"></i>
            </div>
          </div>
        </div>

        <div class="recipe-title-description">
          <div>
            <p class="recipe-title-description-title">Category: </p>
            <p class="recipe-title-description-info"><?php echo $row["category"] ?></p>
          </div>
          <div>
            <div>
              <p class="recipe-title-description-title">Difficulty Level: </p>
              <p class="recipe-title-description-info"><?php echo $row["difficultyLevel"] ?></p>
            </div>
            <div>
              <p class="recipe-title-description-title">Serving Portion: </p>
              <p class="recipe-title-description-info"><?php echo $row["servingPortion"] ?> servings</p>
            </div>
            <div>
              <p class="recipe-title-description-title">Time required: </p>
              <p class="recipe-title-description-info"><?php echo $row["timeRequiredHour"] ?>hr
                <?php echo $row["timeRequiredMinute"] ?>min
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="recipe-title-right">
        <img src="../uploadedImages/<?php echo $row["recipeImage"] ?>" class="recipe-title-image" />
      </div>
    </section>

    <section id="ingredients-required-section">
      <div>
        <p class="recipe-title">Ingredients required</p>
      </div>
      <div>
        <div class="ingredients-content-container">
          <p>
            <?php
            $file_content = file_get_contents(filename: "../uploadedTexts/uploadedIngredientsRequired/" . $row["ingredientsRequired"]);
            echo nl2br(htmlspecialchars($file_content));
            ?>
          </p>
        </div>
      </div>
    </section>

    <!-- Video -->
    <section></section>

    <section id="procedure-section">
      <div>
        <p class="recipe-title">Procedure</p>
      </div>
      <div class="procedure-content-container">
        <p>
          <?php
          $file_content = file_get_contents(filename: "../uploadedTexts/uploadedProcedureSteps/" . $row["procedureSteps"]);
          echo nl2br(htmlspecialchars($file_content));
          ?>
        </p>
      </div>
    </section>

    <section id="additional-information-section">
      <div>
        <p class="recipe-title">Additional information</p>
      </div>
      <div class="additional-information-content-container">
        <div class="additional-information-content">
          <div>
            <p class="additional-information-content-container-title">Nutritional Facts</p>
          </div>
          <div>
            <p class="additional-information-content-container-info">
              <?php
              $file_content = file_get_contents(filename: "../uploadedTexts/uploadedNutritionalFacts/" . $row["nutritionalFacts"]);
              echo nl2br(htmlspecialchars($file_content));
              ?>
            </p>
          </div>
        </div>
        <div class="additional-information-content">
          <div>
            <p class="additional-information-content-container-title">Tips & Tricks</p>
          </div>
          <div>
            <p class="additional-information-content-container-info">
              <?php
              $file_content = file_get_contents(filename: "../uploadedTexts/uploadedTipsTricks/" . $row["tipsTricks"]);
              echo nl2br(htmlspecialchars($file_content));
              ?>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- comments -->
    <section></section>

    <!-- similar recipe -->
    <section></section>
  </div>

  <footer></footer>

  <script type="module" src="../JS/recipe.js"></script>
</body>

</html>