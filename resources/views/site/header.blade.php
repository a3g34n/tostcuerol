<!-- resources/views/site/header.blade.php -->
<header>
    <!-- Desktop Navbar -->
    <nav class="navbar desktop-navbar">
        <ul class="navbar-links left-links">
            <li><a href="/">Home</a></li>
            <li><a href="/menu">Menu</a></li>
            <li><a href="/locations">Locations</a></li>
            <li><a href="/franchise">Franchise</a></li>
        </ul>
        
        <div class="logo">
            <img src="/images/logo.png" alt="Logo">
        </div>
        
        <ul class="navbar-links right-links">
            <li><a href="/contact">Contact</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/gallery">Gallery</a></li>
            <li><a href="/social-responsibility">Social</a></li>
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
   /* Full-width header styling */
/* Full-width header styling */
header {
    width: 100%;
    background-color: #D99B60;
    position: relative; 
}

.desktop-navbar {
    display: flex;
}
.mobile-header {
    display: none;
}

/* Navbar styling */
.navbar {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    z-index: 1;
    padding: 0.25rem 2rem;
}

/* Animation for navigation links */
.navbar-links {
    display: flex;
    list-style: none;
    gap: 2.0rem;
    opacity: 0;
    animation: navbarFadeIn 1s ease-in-out forwards;
    animation-delay: 0.5s;
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

/* Styling for the links */
.navbar-links li a {
    position: relative;
    text-decoration: none;
    color: white;
    font-weight: bold;
    font-size: 1.2rem;
    padding: 0.25rem 0; /* Add padding for better spacing */
    transition: color 0.3s ease; /* Smooth color transition */
    white-space: nowrap;
}

.navbar-links li a:hover {
    color: #A3371A; /* Change text color on hover (e.g., gold color) */
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

    .mobile-header {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 1rem;
        background-color: #D99B60;
        position: relative;
    }

    /* Toggle button styling */
    .navbar-toggle {
        background: none;
        border: none;
        font-size: 1.5rem;
        color: white;
        cursor: pointer;
        position: absolute;
        top: 15px;
        left: 10px;
    }

    /* Centered mobile logo styling */
  

    

    /* Mobile menu styling */
    .mobile-menu {
        display: none;
        position: absolute;
        top: 60px;
        left: 0;
        right: 0;
        background-color: #D99B60;
        padding: 1rem 2rem;
        z-index: 1;
        padding-top: 100px;
    }

    .mobile-menu.open {
        display: block;
    }

    .mobile-navbar-links {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .mobile-navbar-links li a {
        color: white;
        text-decoration: none;
        font-size: 1.2rem;
        font-weight: bold;
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
    background-color: white;
    border-radius: 50%;
    padding: 0.5rem;
    width: 300px;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 2;
    top: 100px; /* Adjust to overflow the navbar */
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