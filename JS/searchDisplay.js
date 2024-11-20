import { insertHeader } from "./header.js";
import { insertFooter } from "./footer.js";

insertHeader();
insertFooter();
searchRecipeSlotDisplay();

export function searchRecipeSlotDisplay() {
  const url = new URL(window.location.href);
  const searchParameter = url.searchParams.get('search');
  if (!searchParameter) {
    console.error("Search parameter is missing in the URL.");
    return;
  }

  var ajax = new XMLHttpRequest();
  ajax.open("GET", "../PHP/searchDBdisplay.php?search="+searchParameter, true);
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
        let difficultyLevel = data[a].difficultyLevel || "Unknown difficultyLevel";
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
