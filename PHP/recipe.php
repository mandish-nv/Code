<?php
  include "recipeinfoDBdisplay.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recipe</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Katibeh&family=Roboto:ital,wght@0,400;0,500;1,500&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Katibeh&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,400;0,500;1,500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../CSS/general.css" />
    <link rel="stylesheet" href="../CSS/header.css" />
    <link rel="stylesheet" href="../CSS/recipe.css" />
  </head>
  <body>
    <header></header>

    <nav class="recipe-nav">
      <div>
        <p>Navigation:</p>
      </div>
      <div>
        <p>1. Title</p>
        <p>2. Ingredients required</p>
        <p>3. Video demonstration</p>
        <p>4. Procedure</p>
        <p>5. Additional information</p>
        <p>5. Comments</p>
        <p>6. Similar recipe</p>
      </div>
    </nav>

    <div class="recipe-body-main">
      <section class="recipe-title-info">
        <div class="recipe-title-left">
          <div class="recipe-title-main">
            <div class="recipe-title-main-division1">
              <div>
                <p class="recipe-name"><?php echo $row["recipeName"] ?></p>
              </div>
              <div>
                <i class="fa-regular fa-heart fa-2x" style="color: #993b00"></i>
              </div>
            </div>
            <div class="recipe-title-main-division2">
              <div>
                <p><?php echo $row["chefName"] ?></p>
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
              <p>Category: <?php echo $row["category"] ?></p>
            </div>
            <div>
              <p>Difficulty Level: <?php echo $row["difficultyLevel"] ?></p>
              <p>Serving Portion: <?php echo $row["servingPortion"] ?> servings</p>
              <p>Time required: <?php echo $row["timeRequiredHour"] ?>hr <?php echo $row["timeRequiredSecond"] ?>sec</p>
            </div>
          </div>
        </div>

        <div class="recipe-title-right">
          <img src="../uploadedImages/<?php echo $row["recipeImage"] ?>" class="recipe-title-image" />
        </div>
      </section>

      <section id="ingredients-required-section">
        <div>
          <p>Ingredients required</p>
        </div>
        <div>
          <div class="ingredients-content-container">
            <?php 
              //echo $row["ingredientsRequired"] 
              $file_content = file_get_contents(filename: "../uploadedTexts/uploadedIngredientsRequired/".$row["ingredientsRequired"] );
              echo nl2br(htmlspecialchars($file_content));
            ?>
          </div>
        </div>
      </section>

      <!-- Video -->
      <section></section>

      <section id="procedure-section">
        <div>
          <p>Procedure</p>
        </div>
        <div>
          <?php 
          //echo $row["procedureSteps"] 
          $file_content = file_get_contents(filename: "../uploadedTexts/uploadedProcedureSteps/".$row["procedureSteps"] );
          echo nl2br(htmlspecialchars($file_content));
          ?>
        </div>
      </section>

      <section id="additional-information-section">
        <div>
          <p>Additional information</p>
        </div>
        <div class="additional-information-content-container">
          <div class="additional-information-content">
            <div>
              <p>Nutritional Facts</p>
            </div>
            <div>
              <p>
                <?php 
                //echo $row["nutritionalFacts"] 
                $file_content = file_get_contents(filename: "../uploadedTexts/uploadedNutritionalFacts/".$row["nutritionalFacts"] );
                echo nl2br(htmlspecialchars($file_content));
                ?>
              </p>
            </div>
          </div>
          <div class="additional-information-content">
            <div>
              <p>Tips & Tricks</p>
            </div>
            <div>
              <?php 
              //echo $row["tipsTricks"] 
              $file_content = file_get_contents(filename: "../uploadedTexts/uploadedTipsTricks/".$row["tipsTricks"] );
              echo nl2br(htmlspecialchars($file_content));
              ?>
            </div>
          </div>
        </div>
      </section>

      <!-- comments -->
      <section></section>

      <!-- similar recipe -->
      <section></section>
    </div>

    <footer id="footer">
      <div class="footer-left">
        <div>
          <p>Ready to cook?</p>
          <p>Sign up for our weekly newsletters!</p>
        </div>
        <div class="email-entry">
          <div>
            <input type="email" placeholder="Enter your email" />
          </div>
          <div>
            <input type="submit" value="Sign up" />
          </div>
        </div>
        <div>
          <div>
            <p>Follow us on other platforms</p>
          </div>
          <div>
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-youtube"></i>
          </div>
        </div>
      </div>
      <div class="footer-right">
        <div>
          <ul>
            <li>About us</li>
            <li>Terms of Services</li>
            <li>Editorial Guidelines</li>
            <li>Services</li>
          </ul>
        </div>
        <div>
          <ul>
            <li>FAQ</li>
            <li>Terms of Use</li>
            <li>Contact Us</li>
            <li>Review</li>
          </ul>
        </div>
      </div>
    </footer>

    <script type="module" src="../JS/recipe.js"></script>
  </body>
</html>

<!-- Nav bar right side -->
