export function insertFooter() {
  const footer = `
  <div class="footer-left">
        <div class="footer-title-text">
          <p>Ready to cook?</p>
          <p>Sign up for our weekly newsletters!</p>
        </div>
        <div class="email-entry">
          <div>
            <input type="email" placeholder="Enter your email" class="email-entry-input">
          </div>
          <div>
            <input type="submit" value="Sign up" class="sign-up-button">
          </div>
        </div>
        <div>
          <div class="footer-platform-text">
            <p>Follow us on other platforms</p>
          </div>
          <div class="icon-container">
            <i class="fa-brands fa-xl fa-facebook-f" style="color: #592200;" onclick="location.href='facebook.com';"></i>
            <i class="fa-brands fa-xl fa-instagram" style="color: #592200;" onclick="location.href='instagram.com';"></i>
            <i class="fa-brands fa-xl fa-x-twitter" style="color: #592200;" onclick="location.href='x.com';"></i>
            <i class="fa-brands fa-xl fa-youtube" style="color: #592200;" onclick="location.href='youtube.com';"></i>
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
  `;
  document.querySelector("footer").innerHTML = footer;
}
