import { insertHeader } from "./header.js";
import { insertFooter } from "./footer.js";

insertHeader();
insertFooter();

function sortSelectAlphabetically(selectId) {
  const select = document.getElementById(selectId);
  const optionsArray = Array.from(select.options);

  // Sort the array of options alphabetically by text
  optionsArray.sort((a, b) => a.text.localeCompare(b.text));

  select.innerHTML = "";
  optionsArray.forEach((option) => select.add(option));
}
sortSelectAlphabetically("category");

document.getElementById("myForm").addEventListener("submit", (event) => {
  event.preventDefault(); // Prevent form submission

  let isValid = true; // Track validity
  const errors = {
    recipeName: "",
    chefName: "",
    category: "",
    recipeImage: "",
    ingredientsRequired: "",
    procedure: "",
  };

  // Clear previous error messages
  document.querySelectorAll(".error").forEach((el) => (el.textContent = ""));

  // Get form values
  const recipeName = document.getElementById("recipeName").value.trim();
  const chefName = document.getElementById("chefName").value.trim();
  const category = document.getElementById("category").value.trim();
  const difficultyLevel = document
    .getElementById("difficultyLevel")
    .value.trim();
  const servingPortion = document.getElementById("servingPortion").value.trim();
  const timeRequiredHour = document
    .getElementById("timeRequiredHour")
    .value.trim();
  const timeRequiredMinute = document
    .getElementById("timeRequiredMinute")
    .value.trim();
  const file = document.getElementById("recipeImage").value.trim();
  const ingredientsRequired = document
    .getElementById("ingredientsRequired")
    .value.trim();
  const procedure = document.getElementById("procedure").value.trim();
  const nutritionalFacts = document
    .getElementById("nutritionalFacts")
    .value.trim();
  const tipsTricks = document.getElementById("tipsTricks").value.trim();

  console.log(isValid);
  //CHECKING
  //recipeName
  if (!recipeName) {
    errors.recipeName = "Recipe name is required.";
    isValid = false;
  } else if (recipeName.length < 3) {
    errors.username = "Recipe name must be at least 3 characters long.";
    isValid = false;
  }
  console.log(isValid);

  //chefName
  if (!chefName) {
    errors.chefName = "Chef name is required.";
    isValid = false;
  } else if (chefName.length < 3) {
    errors.chefName = "Chef name must be at least 3 characters long.";
    isValid = false;
  }
  console.log(isValid);

  //category -> check
  if (!category) {
    errors.category = "Category is required.";
    isValid = false;
  }
  console.log(isValid);

  //recipeImage
  if (!file) {
    errors.file = "File is required.";
    isValid = false;
  } else if (file.size > 10 * 1024 * 1024) {
    errors.file = "File size must not exceed 10 MB.";
    isValid = false;
  }
  console.log(isValid);

  //ingredientsRequired
  if (!ingredientsRequired) {
    errors.ingredientsRequired = "Ingredients Required is required.";
    isValid = false;
  } else if (ingredientsRequired.length < 10) {
    errors.ingredientsRequired =
      "Ingredients Required must be at least 10 characters long.";
    isValid = false;
  }
  console.log(isValid);

  //procedure
  if (!procedure) {
    errors.procedure = "Procedure is required.";
    isValid = false;
  } else if (procedure.length < 10) {
    errors.procedure = "Procedure must be at least 10 characters long.";
    isValid = false;
  }
  console.log(isValid);

  // Display error messages
  if (!isValid) {
    document.getElementById("recipeNameError").textContent = errors.recipeName;
    document.getElementById("chefNameError").textContent = errors.chefName;
    document.getElementById("categoryError").textContent = errors.category;
    document.getElementById("ingredientsRequiredError").textContent =
      errors.ingredientsRequired;
    document.getElementById("procedureError").textContent = errors.procedure;
    document.getElementById("fileError").textContent = errors.file;
    return;
  }

  //insert default values

  //Success
  alert("Form submitted successfully!");
  event.target.submit();
});