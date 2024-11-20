import { insertHeader } from "./header.js";
import { insertFooter } from "./footer.js";

insertHeader();
insertFooter();

export function recipeSlotDisplay() {
  var ajax = new XMLHttpRequest();
  ajax.open("GET", "../PHP/recipeDBdisplay.php", true);
  ajax.send();

  ajax.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      try {
        var data = JSON.parse(this.responseText);
      } catch (error) {
        console.error("Error parsing JSON:", error);
        return;
      }

      let recipeContainer = "";
      for (var a = 0; a < data.length; a++) {
        let recipeName = data[a].recipeName || "Unknown recipeName";
        let chefName = data[a].chefName || "Unknown chefName";
        let category = data[a].category || "Unknown category";
        let difficultyLevel =
          data[a].difficultyLevel || "Unknown difficultyLevel";
        let recipeImage = data[a].recipeImage || "default-image.jpg";
        let views = data[a].views || "0";

        recipeContainer += `
            <div class="recipe-slot" onclick="location.href='../PHP/recipe.php?recipeName=${recipeName}&chefName=${chefName}';"> 
              <div class="favorites-absolute">
                <i class="fa-regular fa-heart fa-2x" style="color: #993b00"></i>
              </div>
              <div>
                <img src="../uploadedImages/${recipeImage}" class="recipe-image" />
              </div>
              <div class="recipe-info">
                <div>
                  <p>${recipeName}</p>
                </div>
                <div>
                  <p>${chefName}</p>
                </div>
                <div>
                  <p>Category: ${category}</p>
                </div>
                <div>
                  <p>Difficulty level: ${difficultyLevel}</p>
                </div>
                <div>
                  <p>${views} views</p>
                </div>
              </div>
            </div>

        `;
      }
      document.querySelector(".recipe-container").innerHTML = recipeContainer;
    }
  };
}
recipeSlotDisplay();

function recipeCategoryDisplay() {
  const categories = [
    "Breakfast",
    "Snacks",
    "Lunch",
    "Drink",
    "Dinner",
    "Cuisine",
    "Healthy",
    "Non-veg",
    "Veg",
    "Fast",
    "Appetizers",
    "Desserts",
  ];
  categories.sort();

  let recipeCategoryContainer = "";

  categories.forEach((element) => {
    recipeCategoryContainer += `
        <div class="slider-content">
          <div class="recipe-image-container">
            <img src="../images/Icons/Categories/${element}.png" class="slider-icon" />
          </div>
          <div>
            <p class="slider-content-text">${element}</p>
          </div>
        </div>
        `;
  });

  document.querySelector(".slider-content-container").innerHTML =
    recipeCategoryContainer;
}
recipeCategoryDisplay();

function slider() {
  const sliderWrapper = document.querySelector(".slider-content-container");
  const sliderContainer = document.querySelector(".slider");

  // Calculate the visible width excluding padding
  const computedStyle = getComputedStyle(sliderContainer);
  const visibleWidth =
    sliderContainer.offsetWidth -
    parseFloat(computedStyle.paddingLeft) -
    parseFloat(computedStyle.paddingRight);

  const sliderItems = document.querySelectorAll(".slider-content");
  const itemWidth = sliderItems[0].offsetWidth + 18; // Include margin or gap
  const totalItems = sliderItems.length;

  const maxScrollPosition = itemWidth * totalItems - visibleWidth;
  let currentPosition = 0;

  // Next button functionality
  document.querySelector(".right-arrow").addEventListener("click", () => {
    if (Math.abs(currentPosition) < maxScrollPosition) {
      currentPosition -= itemWidth;
      sliderWrapper.style.transform = `translateX(${currentPosition}px)`;
    }
  });

  // Previous button functionality
  document.querySelector(".left-arrow").addEventListener("click", () => {
    if (currentPosition < 0) {
      currentPosition += itemWidth;
      sliderWrapper.style.transform = `translateX(${currentPosition}px)`;
    }
  });
}
slider();
