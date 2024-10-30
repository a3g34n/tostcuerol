<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toast Haven</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Reset and Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #faf6f0 0%, #f1ebe1 100%);
            color: #2a2a2a;
            line-height: 1.6;
            min-height: 100vh;
        }

        /* Utility Classes */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styling */
        .header {
            background-color: rgba(249, 243, 232, 0.98);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            font-size: 1.8em;
            color: #2a4d6e;
            font-weight: 700;
            letter-spacing: 1px;
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .nav {
            display: flex;
            gap: 30px;
        }

        .nav a {
            color: #2a4d6e;
            text-decoration: none;
            font-size: 1em;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .nav a:hover {
            background-color: #2a4d6e;
            color: #fff;
        }

        /* Hero Section */
        .hero {
            background: transparent;
            padding: 160px 20px 80px;
            text-align: center;
        }

        .hero-title {
            font-size: 3em;
            color: #2a4d6e;
            margin-bottom: 20px;
            animation: fadeIn 1s ease-out;
        }

        .hero-subtitle {
            font-size: 1.2em;
            color: #555;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Menu Icons Section */
        .menu-icons {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            padding: 60px 20px;
            background-color: transparent;
        }

        .icon-card {
            background-color: transparent;
            color: #2a4d6e;
            border: 2px solid rgba(42, 77, 110, 0.1);
            border-radius: 15px;
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            backdrop-filter: blur(5px);
            transition: all 0.3s ease;
        }

        .icon-card:hover {
            transform: translateY(-10px);
            border-color: rgba(42, 77, 110, 0.3);
            box-shadow: 0 6px 20px rgba(42, 77, 110, 0.1);
        }

        .icon-card img {
            width: 80px;
            height: 80px;
            margin-bottom: 15px;
        }

        .icon-card h3 {
            color: #2a4d6e;
            margin-bottom: 8px;
        }

        .icon-card p {
            color: #555;
        }

        /* About Section */
        .about {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            padding: 80px 20px;
            background-color: transparent;
        }

        .about-image {
            width: 100%;
            border-radius: 20px;
            border: 2px solid rgba(42, 77, 110, 0.1);
            transition: transform 0.3s ease;
        }

        .about-image:hover {
            transform: scale(1.02);
            border-color: rgba(42, 77, 110, 0.3);
        }

        .about-text {
            padding: 20px;
            background-color: transparent;
            border: 2px solid rgba(42, 77, 110, 0.1);
            border-radius: 15px;
            backdrop-filter: blur(5px);
        }

        .about-text h2 {
            color: #2a4d6e;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .about-text p {
            font-size: 1.1em;
            color: #555;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        /* Menu Section */
        .menu {
            padding: 80px 20px;
            background-color: transparent;
        }

        .menu-title {
            font-size: 2.5em;
            color: #2a4d6e;
            text-align: center;
            margin-bottom: 50px;
        }

        .menu-items {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .menu-card {
            background: transparent;
            border: 2px solid rgba(42, 77, 110, 0.1);
            border-radius: 20px;
            padding: 30px;
            text-align: left;
            backdrop-filter: blur(5px);
            transition: all 0.3s ease;
        }
        
        .menu-card:hover {
            transform: translateY(-10px);
            border-color: rgba(42, 77, 110, 0.3);
            box-shadow: 0 6px 20px rgba(42, 77, 110, 0.1);
        }

        .menu-card h3 {
            color: #2a4d6e;
            font-size: 1.5em;
            margin-bottom: 15px;
            position: relative;
        }

        .menu-card h3::after {
            content: '';
            display: block;
            width: 40px;
            height: 3px;
            background: #e63e00;
            margin-top: 10px;
        }
        .cart-button {
    position: relative;
    background-color: #2a4d6e;
    color: #fff;
    border: none;
    padding: 8px 16px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    gap: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.cart-button:hover {
    background-color: #1e3a56;
}

.cart-button svg {
    stroke: #fff;
    width: 20px;
    height: 20px;
}

/* Cart Count Badge */
.cart-count {
    position: absolute;
    top: -5px;
    right: -5px;
    background-color: #e63e00;
    color: #fff;
    font-size: 0.8em;
    padding: 2px 6px;
    border-radius: 50%;
    font-weight: 700;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}
        .menu-card p {
            color: #555;
            font-size: 1.1em;
            margin-bottom: 15px;
        }

        .menu-card .price {
            color: #e63e00;
            font-weight: 600;
            font-size: 1.2em;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2em;
            }

            .header-content {
                flex-direction: column;
                gap: 20px;
            }

            .nav {
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <div class="logo">TOAST HAVEN</div>
            <nav class="nav">
                <a href="#menu">MENU</a>
                <a href="#about">ABOUT</a>
                <a href="#contact">CONTACT</a>
                <button class="cart-button">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="8" cy="21" r="1"/>
        <circle cx="19" cy="21" r="1"/>
        <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/>
    </svg>
    <span class="cart-count">0</span>
</button>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h1 class="hero-title">Your Friendly Neighborhood Toast Joint</h1>
        <p class="hero-subtitle">Crafting perfect toasts with love, one slice at a time</p>
    </section>

    <!-- Menu Icons Section -->
    <section class="menu-icons container">
        <div class="icon-card">
            <img src="{{ asset('images/v1of.jpg') }}" alt="Classic Toast Icon">
            <h3>Classic Toast</h3>
            <p>Traditional comfort</p>
        </div>
        <div class="icon-card">
            <img  src="{{ asset('images/avocado-toast-with-everything-bagel-seasoning-feat.jpg') }}" alt="Avocado Icon">
            <h3>Avocado Delight</h3>
            <p>Fresh & healthy</p>
        </div>
        <div class="icon-card">
            <img src="/api/placeholder/80/80" alt="French Toast Icon">
            <h3>French Toast</h3>
            <p>Sweet indulgence</p>
        </div>
        <div class="icon-card">
            <img src="/api/placeholder/80/80" alt="Berry Icon">
            <h3>Berry Bliss</h3>
            <p>Fruity perfection</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="about container" id="about">
    <img src="{{ asset('images/High-quality-Pretty-Patty.jpg') }}" alt="Toast Haven Interior" class="about-image">
    <div class="about-text">
        <h2>Our Story</h2>
        <p>At TOAST HAVEN, we believe in the power of perfect toast to brighten your day. Our journey began with a simple mission: to elevate the humble toast into an art form. Using locally-sourced ingredients and artisanal breads, we craft each piece with precision and care.</p>
        <p>Whether you're starting your day with our Classic Toast or treating yourself to our indulgent French Toast, every bite is a testament to our commitment to quality and taste.</p>
    </div>
</section>

    <!-- Menu Section -->
    <section class="menu" id="menu">
        <h2 class="menu-title">Our Signature Toasts</h2>
        <div class="menu-items">
            <div class="menu-card">
                <h3>Classic Toast</h3>
                <p>Golden-brown artisanal bread topped with premium grass-fed butter and your choice of homemade jam.</p>
                <div class="price">$6.50</div>
            </div>
            <div class="menu-card">
                <h3>Avocado Delight</h3>
                <p>Crushed avocado on toasted sourdough with cherry tomatoes, micro greens, and chili flakes.</p>
                <div class="price">$12.50</div>
            </div>
            <div class="menu-card">
                <h3>French Toast</h3>
                <p>Thick-cut brioche dipped in vanilla custard, topped with maple syrup and fresh berries.</p>
                <div class="price">$14.50</div>
            </div>
        </div>
    </section>
</body>
</html>