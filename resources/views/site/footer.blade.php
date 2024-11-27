<!-- Footer -->
<footer>
    <!-- Newsletter Section -->
    <div class="newsletter-section">
        <div class="newsletter">
            <h2>Newsletter</h2>
            <div class="newsletter-text">
                <form action="/subscribe" method="POST" class="newsletter-form">
                    <input type="email" name="email" placeholder="Email address" required>
                    <button type="submit">Sign Up</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer Links Section -->
    <div class="footer-section">
        <div class="footer-links">
            <div class="footer-section-item shop">
                <h4>Franchise</h4>
                <ul>
                    <li><a href="/delivery">Bize ulaşın</a></li>
                    <li>
                        <!-- Social Media Icons -->
                        <a href="https://instagram.com" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="https://tiktok.com" target="_blank" class="social-icon"><i class="fab fa-tiktok"></i></a>
                        <a href="mailto:info@example.com" target="_blank" class="social-icon"><i class="fas fa-envelope"></i></a>
                    </li>
                </ul>
            </div>
            <div class="footer-section-item about">
                <h4>Hakkında</h4>
                <ul>
                    <li><a href="/our-story">Tosttan Fazlası</a></li>
                    <li><a href="/why-humble">Why Humble?</a></li>
                    <li><a href="/locations">Locations</a></li>
                </ul>
            </div>
            <div class="footer-section-item contact">
                <h4>İletişim</h4>
                <ul>
                    <li><a href="/careers">Careers</a></li>
                    <li><a href="/email-us">Email Us</a></li>
                    <li><a href="/office-popups">Office Pop-Ups</a></li>
                    <li><a href="/buy-women-built">Buy Women Built</a></li>
                </ul>
            </div>
            <div class="footer-logo">
                <img src="/images/logoWriting.png" alt="Logo">
            </div>
        </div>
    </div>
</footer>

<style>
/* General Styles */
body {
    font-family: 'Fira Sans', sans-serif;
}

/* Newsletter Section */
.newsletter-section {
    background-color: #e36e52; /* Light beige for the newsletter section */
    padding: 4rem 10rem; /* Adjust padding as needed */
    color: #354433;
}

.newsletter {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 5rem;
}

.newsletter h2 {
    font-size: 2.5rem;
    font-weight: bold;
    color: white;
}

.newsletter-form {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.newsletter-form input[type="email"] {
    border: none;
    border-bottom: 2px solid #907847;
    padding: 0.5rem 0;
    font-size: 1rem;
    background: transparent;
    width: 300px;
}

.newsletter-form button {
    background-color: #907847;
    color: #ffffff;
    border: none;
    padding: 0.7rem 1.5rem;
    font-size: 1rem;
    border-radius: 4px;
    cursor: pointer;
}

.newsletter-form button:hover {
    background-color: #546c57;
}

/* Footer Section */
.footer-section {
    background-color: #907847; /* Darker color for the footer section */
    padding: 5rem 10rem;
    color: #ffffff;
}

.footer-links {
    display: flex;
    justify-content: space-between;
    gap: 1rem;
}

.footer-section-item {
    flex: 1;
    padding: 0 1rem;
}

.footer-section-item h4 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: #f5f1e9;
}

.footer-section-item ul {
    list-style: none;
    padding: 0;
}

.footer-section-item ul li {
    margin-bottom: 0.5rem;
}

.footer-section-item ul li a {
    text-decoration: none;
    color: #f5f1e9;
    font-size: 1rem;
}

.footer-section-item ul li a:hover {
    text-decoration: underline;
    color: #ffffff;
}

/* Footer Logo */
.footer-logo img {
    max-width: 15vw;
    height: auto;
    margin: 1rem auto;
    display: block;
}

/* Social Media Icon Styling */
.social-icon {
    margin-right: 15px;
    font-size: 2rem;
    color: #f5f1e9;
    transition: color 0.3s ease;
}

.social-icon:hover {
    color: #ffffff;
}
</style>
