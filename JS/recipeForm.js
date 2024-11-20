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
  optionsArray.forEach(option => select.add(option));
}
sortSelectAlphabetically("mySelect");