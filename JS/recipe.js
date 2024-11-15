import { insertHeader } from "./header.js";

insertHeader();

const url = new URL(window.location.href);
console.log(url.searchParams.get("recipeName"));
console.log(url.searchParams.get("chefName"));

const recipeName = url.searchParams.get("recipeName");
const chefName = url.searchParams.get("chefName");


//send parameters
var ajax = new XMLHttpRequest();
ajax.open("GET", "../PHP/recipeinfoDBdisplay.php", true);
ajax.send();
//ajax.send("recipeName="+ recipeName +"&chefName=" + chefName);

ajax.onreadystatechange = function () {
  if (this.readyState == 4 && this.status == 200) {
    var data = JSON.parse(this.responseText);
    console.log(data);

    let recipeInfoSection = "";

      //add data
      let recipeName = data.recipeName;
      let chefName = data.chefName;
      let category = data.category;
      let difficultyLevel = data.difficultyLevel;
      let recipeImage = data.recipeImage;


      recipeInfoSection = 
    `
    
    `;

    
    console.log(recipeInfoSection);
    document.querySelector(".recipe-body-main").innerHTML = recipeInfoSection; 
  }
};