export function insertHeader() {
  const header = `
  <div>
      <i class="fa-solid fa-bars fa-2x" style="color: #993b00"></i>
    </div>
    <div>
      <p class="title-text" onclick="location.href='../HTML/index.html';">Recipetopia</p>
    </div>
    <div class="right-utilities">
      <div class="search-box">
        <div>
          <input type="text" placeholder="Search box" class="search-box-input" />
        </div>
        <div>
          <i class="fa-solid fa-magnifying-glass fa-xl" style="color: #993b00"></i>
        </div>
      </div>
      <div>
        <i class="fa-regular fa-heart fa-2x" style="color: #993b00"></i>
      </div>
      <div class="profile-picture-container" onclick="location.href='../PHP/recipeForm.php';">
        <img src="../images/chef.jpg" alt="profile picture" class="profile-picture-image" />
      </div>
  </div>
  `;

  document.querySelector("header").innerHTML = header;
}
