<!-- Footer -->
<footer>
    <!-- Newsletter Section -->
    <div class="newsletter-section">
        <div class="newsletter">
            <h2>Bizden Haberdar Ol!</h2>
            <div class="newsletter-text">
            <form action="{{ route('newsletter.subscribe') }}" method="POST" class="newsletter-form">
            @csrf
                    <input type="email" name="email" placeholder="Email adresi" required>
                    <button type="submit">Gönder</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer Links Section -->
    <div class="footer-section">
        <div class="footer-links">
            <div class="footer-section-item shop">
                <h4>HEMEN KEŞFEDİN</h4>
                <ul>
                    <li><a href="/franchise">Franchise</a></li>
                    <li><a href="/locations">Şubeler</a></li>
                </ul>
            </div>
            <div class="footer-section-item about">
                <h4>HİKAYEMİZ</h4>
                <ul>
                    <li><a href="/social">Tosttan Fazlası</a></li>
                    <li><a href="/hikayemiz">Hakkında</a></li>
                    <li><a href="/lezzetsirri">Lezzet Sırrı</a></li>
                </ul>
            </div>
            <div class="footer-section-item contact">
                <h4>İLETİŞİM</h4>
                <ul>
                    <li><a href="/contact">Bize Ulaşın</a></li>
                    <li>
                        <!-- Social Media Icons -->
                        <a href="https://www.instagram.com/meshursanayitostcusu.tr/" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="mailto:info@example.com" target="_blank" class="social-icon"><i class="fas fa-envelope"></i></a>
                    </li>
                </ul>
                
            </div>
            <div class="footer-logo">
                <a href="/">
                    <img src="/images/MST1.png" alt="Logo">
                </a>
            </div>
        </div>
        <p>Copyright&copy; Meşhur Sanayi Tostçucusu. Tüm hakları saklıdır.</p>
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
    padding: 2rem 10rem;
    color: #ffffff;
}
.footer-section p {
    margin-top: 5%;
    margin-left: 1%;
    margin-bottom: 0%;
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
    max-width: 25vw;
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

@media (max-width: 768px) {
    .footer-section {
        padding: 3rem 1rem;
    }

    .footer-links {
        flex-direction: column;
        gap: 1.5rem;
    }


    .footer-logo img {
        max-width: 70%;
    }

    .newsletter-section {
    background-color: #e36e52; /* Light background color */
    padding: 3rem 1rem; /* Ensure sufficient padding for all elements */
    color: #354433;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    min-height: 200px; /* Set a minimum height to avoid overflow issues */
    box-sizing: border-box; /* Include padding in the height calculation */
}

.newsletter {
    width: 100%;
    max-width: 400px; /* Restrict width for readability */
    display: flex;
    flex-direction: column; /* Stack elements vertically */
    align-items: center;
    gap: 1rem; /* Add space between elements */
}

.newsletter h2 {
    font-size: 1.5rem; /* Reduce font size for smaller screens */
    color: white;
    margin-bottom: 1rem; /* Add space below the heading */
}

.newsletter-form {
    width: 100%; /* Ensure the form spans the container */
    display: flex;
    flex-direction: column; /* Stack input and button vertically */
    align-items: center;
    gap: 1rem; /* Add space between input and button */
}

.newsletter-form input[type="email"] {
    width: 100%; /* Full width input field */
    border: none;
    border-bottom: 2px solid #907847;
    padding: 0.5rem 0;
    font-size: 1rem;
    background: transparent;
    color: #fff;
    text-align: center;
}

.newsletter-form input[type="email"]::placeholder {
    color: #ccc;
}

.newsletter-form button {
    width: 100%; /* Full width button for small screens */
    max-width: 200px; /* Limit the button's maximum width */
    background-color: #907847;
    color: #ffffff;
    border: none;
    padding: 0.7rem;
    font-size: 1rem;
    border-radius: 4px;
    cursor: pointer;
}

.newsletter-form button:hover {
    background-color: #546c57;
}

}
</style>
