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
            <li><a href="/social">LEZZET SIRRI</a></li>
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
     <div class="mobile-header">
    <div class="mobile-logo">
        <img src="/images/logo.png" alt="Logo">
    </div>
    <button class="navbar-toggle" onclick="toggleMobileNavbar()">☰</button>
    <div class="mobile-menu">
        <ul class="mobile-navbar-links">
            <li><a href="/">Home</a></li>
            <li><a href="/menu">Menu</a></li>
            <li><a href="/locations">Locations</a></li>
            <li><a href="/franchise">Franchise</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/gallery">Gallery</a></li>
            <li><a href="/social-responsibility">Social</a></li>
        </ul>
    </div>
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


.navbar-links {
    display: flex;
    list-style: none;
    gap: 2rem;
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
    color: #e8ad69; /* Açık krem */
    font-weight: bold;
    font-size: 0.8rem;
    transition: color 0.3s ease;
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
    gap: 3rem;
}

.left-links {
    justify-content: flex-end;
    margin-right: 20rem; /* Space between left-links and logo */
}

.right-links {
    justify-content: flex-start;
    margin-left: 20rem; /* Space between right-links and logo */
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
    /* Hide the desktop navbar */
    .desktop-navbar {
        display: none;
    }

   /* Mobile Header */
    .mobile-header {
        display: none;
        background-color: #691f06; /* Ana renk */
        padding: 1rem;
        justify-content: space-between;
        align-items: center;
    }


    /* Toggle button styling */
    .navbar-toggle {
        font-size: 1.5rem;
        color: #fff4e6; /* Açık krem */
        background: none;
        border: none;
        cursor: pointer;
    }


    /* Centered mobile logo styling */
  

    

    /* Mobile menu styling */
    .mobile-menu {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #691f06; /* Ana renk */
        color: #fff4e6;
        padding: 1rem;
        z-index: 10;
        text-align: center;
    }

    .mobile-menu.open {
        display: block;
    }


    .mobile-navbar-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .mobile-navbar-links li a {
        display: block;
        padding: 1rem;
        text-decoration: none;
        color: #fff4e6;
        font-size: 1.2rem;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .mobile-header {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #D99B60;
        padding: 1rem;
        position: relative;
        overflow: visible; /* Allow logo to overflow */
    }

/* Toggle button positioning */
.navbar-toggle {
    position: absolute;
    top: 15px;
    left: 15px;
    background: none;
    border: none;
    font-size: 1.5rem;
    color: white;
    cursor: pointer;
    z-index: 3;
}

/* Centered mobile logo with overflow effect */
.mobile-logo {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #fff4e6; /* Açık krem */
    border-radius: 50%;
    padding: 0.5rem;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.mobile-logo img {
    width: 80%;
    height: auto;
}

/* Slide-in mobile menu styling */
.mobile-menu {
    position: fixed;
    top: 0;
    left: -100%; /* Initially hidden off-screen */
    width: 50%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent overlay */
    transition: left 0.3s ease; /* Smooth slide-in effect */
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Mobile menu links */
.mobile-navbar-links {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.mobile-navbar-links li a {
    color: white;
    text-decoration: none;
    font-size: 1.5rem;
    font-weight: bold;
}

/* Open menu state */
.mobile-menu.open {
    left: 0; /* Slide into view */
}
}


</style>


<script>
    function toggleMobileNavbar() {
        const mobileMenu = document.querySelector('.mobile-menu');
        mobileMenu.classList.toggle('open');
    }
</script>