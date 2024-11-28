<!-- resources/views/site/header.blade.php -->
<!-- Announcement Section -->
<div class="announcement-bar">
    <p> Tostun meşhur adresine hoş geldiniz!</p>
</div>
<header>
    <!-- Desktop Navbar -->
    <nav class="navbar desktop-navbar">
        <ul class="navbar-links left-links">
            <li><a href="/hikayemiz">HAKKINDA</a></li>
            <li><a href="/lezzetsirri">LEZZET SIRRI</a></li>
            <li><a href="/locations">ŞUBELER</a></li>
        </ul>
        
       
        <div class="logo">
            <a href="/">
                <img src="/images/logo.png" alt="Logo">
            </a>
        </div>
        
        <ul class="navbar-links right-links">
            <li><a href="/contact">İLETİŞİM</a></li>
            <li><a href="/social">TOSTTAN FAZLASI</a></li>
            <li><a href="/franchise">FRANCHISE</a></li>
        </ul>
    </nav>


        <!-- Mobile Header -->
       <!-- Mobile Header -->
        <div class="mobile-header">
            <!-- Mobile Logo -->
            <div class="mobile-logo">
                <a href="/">
                    <img src="/images/logo.png" alt="Logo">
                </a>
            </div>
            <!-- Toggle Button -->
            <button class="navbar-toggle" onclick="toggleMobileNavbar()">☰</button>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <ul class="mobile-navbar-links">
                <li><a href="/hikayemiz">HAKKINDA</a></li>
                <li><a href="/lezzetsirri">LEZZET SIRRI</a></li>
                <li><a href="/locations">ŞUBELER</a></li>
                <li><a href="/contact">İLETİŞİM</a></li>
                <li><a href="/social">TOSTTAN FAZLASI</a></li>
                <li><a href="/franchise">FRANCHISE</a></li>
            </ul>
        </div>

    </header>



    <style>
    /* Announcement Bar Styling */
    .announcement-bar {
        width: 100%;
        background-color: #907847; /* Light cream color */
        color: #691f06; /* Dark red for text */
        text-align: left;
        padding: 0.5rem;
        font-family: 'Fira Sans', sans-serif;
        font-size: 1rem;
        font-weight: bold;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional shadow */
        position: relative; /* Ensures it stays above the header */
        z-index: 2;
    }
    /* Full-width header styling */
    /* Genel Header ve Navbar Ayarları */
    header {
        width: 100%;
        background-color: #691f06; /* Ana renk: Koyu kırmızı */
        position: relative;
        font-family: 'Fira Sans', sans-serif;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 1.5rem 2rem;
    }
    .desktop-navbar {
        display: flex;
    }
    .mobile-header {
        display: none;
    }

    /* Desktop Navbar */
    .navbar {
        display: flex;
        align-items: center;
        padding: 1rem 2rem;
        position: relative;
        z-index: 1;
        max-width: 1800px;
        margin: 0 auto;
        justify-content: space-between;
    }

    /* Desktop Navbar */
    .navbar-links {
        display: flex;
        flex-wrap: nowrap; /* Prevent wrapping of links */
        list-style: none;
        gap: 2rem; /* Adjust spacing dynamically */
        justify-content: space-between; /* Dynamically distribute space */
    }
    @media (max-width: 1400px) {
        .navbar-links {
        display: flex;
        list-style: none;
        gap: 0.5rem;
        /* Smaller gap for smaller screens */
        }
    }

    @media (max-width: 768px) {
    .desktop-navbar {
        display: none; /* Hide the desktop navbar on mobile */
    }
}
    .left-links li,
    .right-links li {
        opacity: 0;
        transform: translateY(-20px);
        animation: linkFadeIn 0.6s ease-in-out forwards;
    }

    /* Stagger the animation for each link */
    .left-links li:nth-child(1),
    .right-links li:nth-child(1) { animation-delay: 0.7s; }
    .left-links li:nth-child(2),
    .right-links li:nth-child(2) { animation-delay: 0.8s; }
    .left-links li:nth-child(3),
    .right-links li:nth-child(3) { animation-delay: 0.9s; }
    .left-links li:nth-child(4),
    .right-links li:nth-child(4) { animation-delay: 1s; }


    .navbar-links li a {
    text-decoration: none;
    color: #e8ad69; /* Text color */
    font-weight: bold;
    font-size: clamp(0.8rem, 1vw, 1.2rem); /* Responsive font size */
    transition: color 0.3s ease;
    white-space: nowrap; /* Prevent text from wrapping */
}
    .navbar-links li a:hover {
        color:  #c45e2b; /* Yardımcı renk: Kırmızımsı ton */
    }


    .navbar-links li a::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0;
        height: 2px;
        background-color: #A3371A; /* Color of the underline effect */
        transition: width 0.3s ease;
    }


    .navbar-links li a:hover::after {
        width: 100%; /* Full width underline on hover */
    }

    .left-links, .right-links {
        display: flex;
        flex: 1;
        justify-content: space-between;
        list-style: none;
        gap: 10%;
    }

    .left-links {
        justify-content: flex-end;
        margin-right: 20%; /* Space between left-links and logo */
    }

    .right-links {
        justify-content: flex-start;
        margin-left: 20%; /* Space between right-links and logo */
    }

    /* Centered logo styling */
    .logo img {
        width: 150px;
        height: auto;
        animation: fadeIn 1.5s ease-in-out forwards;
        animation-delay: 0.5s; /* Delayed slightly to match navbar links */
    }

    .logo {
        position: absolute;
        top: -25px; /* Move the logo up to overflow the navbar */
        left: 50%;
        transform: translateX(-50%);
        border-radius: 50%;
        padding: 0.5rem;
        z-index: 2; /* Ensure it stays above the navbar */
    }
    /* Navbar and link animations */
    @keyframes navbarFadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes linkFadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Basic Fade-In Animation for logo */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @media (max-width: 768px) {
    /* Mobile Header */
    .mobile-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #691f06; /* Match desktop header color */
        padding: 1rem;
        position: relative;
        z-index: 10;
        height: 40px; /* Smaller height for mobile */
    }

    /* Mobile Logo */
    .mobile-logo img {
        width: 120px; /* Smaller size for mobile */
        height: 120px;
        object-fit: contain;
    }

    /* Adjust Logo Placement */
    .mobile-logo {
        position: absolute;
        top: -10px; /* Overlap header */
        left: 50%;
        transform: translateX(-50%);
        z-index: 3;
    }

    /* Navbar Toggle */
    .navbar-toggle {
        font-size: 2rem;
        color: #e8ad69; /* Match branding */
        border: none;
        background: none;
        cursor: pointer;
    }

    /* Mobile Menu */
    .mobile-menu {
        display: none; /* Initially hidden */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9); /* Semi-transparent dark overlay */
        z-index: 9;
        padding-top: 20rem; /* Add space for the toggle button */
        text-align: center;
        animation: slideIn 0.3s ease-in-out;
    }

    .mobile-menu.open {
        display: block;
    }

    /* Mobile Navbar Links */
    .mobile-navbar-links {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .mobile-navbar-links li a {
        color: #e8ad69; /* Match desktop text color */
        text-decoration: none;
        font-size: 1.2rem;
        font-weight: bold;
        padding: 0.5rem 1rem;
        border-radius: 5px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .mobile-navbar-links li a:hover {
        color: #c45e2b; /* Hover color */
        background-color: rgba(255, 255, 255, 0.1); /* Subtle background highlight */
    }

    /* Slide-in Animation */
    @keyframes slideIn {
        from {
            transform: translateX(-100%);
        }
        to {
            transform: translateX(0);
        }
    }
}


    </style>


    <script>
  function toggleMobileNavbar() {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.classList.toggle('open');
}
    </script>