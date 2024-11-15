export function insertFooter() {
  const footer = `
  <div class="footer-left">
        <div>
          <p>Ready to cook?</p>
          <p>Sign up for our weekly newsletters!</p>
        </div>
        <div class="email-entry">
          <div>
            <input type="email" placeholder="Enter your email">
          </div>
          <div>
            <input type="submit" value="Sign up">
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
  `;

  document.querySelector("footer").innerHTML = footer;
}
