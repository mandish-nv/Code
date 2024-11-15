import { insertHeader } from "./header.js";
import { insertFooter } from "./footer.js";

insertHeader();
insertFooter();

var ajax = new XMLHttpRequest();
ajax.open("GET", "../PHP/recipeDBdisplay.php", true);
ajax.send();

ajax.onreadystatechange = function () {
  if (this.readyState == 4 && this.status == 200) {
    var data = JSON.parse(this.responseText);
    console.log(data);

    let recipeContainer = "";
    for (var a = 0; a < data.length; a++) {
      let recipeName = data[a].recipeName;
      let chefName = data[a].chefName;
      let category = data[a].category;
      let difficultyLevel = data[a].difficultyLevel;
      let recipeImage = data[a].recipeImage;
      let views = data[a].views;

      recipeContainer += 
      `
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
    console.log(recipeContainer);
    document.querySelector(".recipe-container").innerHTML = recipeContainer; 

    
  }
};
