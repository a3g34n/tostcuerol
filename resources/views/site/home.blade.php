    <!-- resources/views/site/home.blade.php -->
    @extends('layouts.app')

    @section('content')
        @include('site.header')

        <!-- Full-Width Banner Section -->
        <section class="banner">
            <img src="{{ asset('images/image3.jpeg') }}" alt="Tost" class="banner-image">
            <!-- Overlay and Text -->
            <div class="banner-overlay">
                <h1 class="banner-title">Bizim hikayemiz, tam ekmekte bol malzemeyle, dost masalarında başladı.</h1>
                <a href="/hikayemiz" class="btn btn-primary">Keşfet</a>
            </div>
        </section>

        <section class="motto">
            <!-- Overlay and Text -->
            <div class="motto-overlay">
                <h1 class="motto-title">TÜRKİYE'NİN TOST EFSANESİ</h1>
                <img src="{{ asset('images/MST1.png') }}" alt="Sanayi Tostçusu Logo" class="motto-logo">
                <h1 class="motto-title2">Sanayi tostunun eşsiz tadı, nostaljik bir atmosfer ve doyurucu bir deneyimle yeniden hayat buluyor. Tam ekmek, bol malzeme, sıcacık bir tost ve koca bir gülümseme: İşte biz buyuz!</h1>
            </div>
        </section>

        <!-- Values Section -->
    <!-- Values Section -->
    <section class="values-section">
        <div class="carousel-images">
        <div class="carousel-slide">
        <div class="carousel-item">
            <img src="{{ asset('images/14.png') }}" alt="Image 1">
            <div class="carousel-text">Meşhur Sanayi Tostçusu</div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/11.png') }}" alt="Image 2">
            <div class="carousel-text">Meşhur Sanayi Tostçusu</div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/12.png') }}" alt="Image 3">
            <div class="carousel-text">Meşhur Sanayi Tostçusu</div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/13.png') }}" alt="Image 4">
            <div class="carousel-text">Meşhur Sanayi Tostçusu</div>
        </div>
        {{-- <div class="carousel-item">
            <img src="{{ asset('images/image5.jpg') }}" alt="Image 5">
            <div class="carousel-text">Description for Image 5</div>
        </div> --}}
    </div>
            <div class="carousel-slide">
        <div class="carousel-item">
            <img src="{{ asset('images/14.png') }}" alt="Image 1">
            <div class="carousel-text">Meşhur Sanayi Tostçusu</div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/11.png') }}" alt="Image 2">
            <div class="carousel-text">Meşhur Sanayi Tostçusu</div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/12.png') }}" alt="Image 3">
            <div class="carousel-text">Meşhur Sanayi Tostçusu</div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/13.png') }}" alt="Image 4">
            <div class="carousel-text">Meşhur Sanayi Tostçusu</div>
        </div>
        {{-- <div class="carousel-item">
            <img src="{{ asset('images/image5.jpg') }}" alt="Image 5">
            <div class="carousel-text">Description for Image 5</div>
        </div> --}}
    </div>
        </div>
    </section>

    {{-- <div class="custom-carousel-container">
    <button class="custom-carousel-btn custom-left-btn"></button>
    <!-- Carousel Items with Text -->
    <div class="custom-carousel-images">
        <div class="custom-carousel-item">
            <div class="custom-carousel-text">
                <h3>Image 1 Title</h3>
                <p>Description for Image 1</p>
            </div>
            <img src="{{ asset('images/image1.jpeg') }}" alt="Image 1">
        </div>
        <div class="custom-carousel-item">
            <div class="custom-carousel-text">
                <h3>Image 2 Title</h3>
                <p>Description for Image 2</p>
            </div>
            <img src="{{ asset('images/image2.jpg') }}" alt="Image 2">
        </div>
        <div class="custom-carousel-item">
            <div class="custom-carousel-text">
                <h3>Image 3 Title</h3>
                <p>Description for Image 3</p>
            </div>
            <img src="{{ asset('images/image3.jpeg') }}" alt="Image 3">
        </div>
        <div class="custom-carousel-item">
            <div class="custom-carousel-text">
                <h3>Image 4 Title</h3>
                <p>Description for Image 4</p>
            </div>
            <img src="{{ asset('images/image4.jpeg') }}" alt="Image 4">
        </div>
        <div class="custom-carousel-item">
            <div class="custom-carousel-text">
                <h3>Image 5 Title</h3>
                <p>Description for Image 5</p>
            </div>
            <img src="{{ asset('images/image5.jpg') }}" alt="Image 5">
        </div>
    </div>

    <!-- Navigation Buttons -->
    <button class="custom-carousel-btn custom-right-btn"></button>
    
    <!-- Indicator Circles -->
</div>

<div class="custom-carousel-indicators">
    <span class="custom-indicator active" data-index="0"></span>
    <span class="custom-indicator" data-index="1"></span>
    <span class="custom-indicator" data-index="2"></span>
    <span class="custom-indicator" data-index="3"></span>
    <span class="custom-indicator" data-index="4"></span>
</div> --}}

<section class="custom-banner">
    <div class="custom-banner-content">
        <h2>Her Ekmek Tam, Her Lokma Dolu Dolu!</h2>
        {{-- <img src="{{ asset('images/logo.png') }}" alt="Sanayi Tostçusu Logo" class="custom-banner-logo"> --}}
    </div>
</section>

<section class="custom-banner2">
    <div class="custom-banner-content2">
        <img src="{{ asset('images/kraft.png') }}" alt="Sanayi Tostçusu Logo" class="custom-banner-logo">
        <div>
        <h3>Meşhur Sanayi Tostçusu'nun bir parçası olun!</h3>
        <p> Lezzetimizle birlikte büyümeye, başarı hikayemizi kendi şehrinize taşımaya ne dersiniz? Güçlü iş modelimiz ve destek sistemimizle sizi bekliyoruz.</p>
        <a href="/franchise" class="btn btn-primary">Hemen Keşfedin!</a>
        </div>
    </div>
</section>
<!-- Footer Section -->
    @include('site.footer')
    @endsection



    <style>
        /* Remove margins and paddings */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Fira Sans', sans-serif;
            color: #691f06; /* Ana renk */
            background-color: #FFF4E6; /* Set the entire body background color */
        }

    /* Banner Section */
        .banner {
            position: relative;
            width: 100%;
            height: 80vh;
            overflow: hidden;
        }

        .banner-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(10, 10, 10, 0.6); /* Transparent dark gray */

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 2rem;
            color: #fff4e6; /* Açık krem */
        }

        .banner-title {
            font-size: 3rem;
            font-family: 'Fira Sans', sans-serif;
            max-width: 80%;
            line-height: 1.4;
            margin-bottom: 1.5rem;
        }

        .btn {
            background-color: #e8ad69; /* Yardımcı palet */
            color: #fff4e6; /* Yazı */
            padding: 0.8rem 1.5rem;
            border-radius: 4px;
            font-size: 1.1rem;
            text-decoration: none;
            transition: background-color 0.3s ease;
            font-family: 'Fira Sans Bold', sans-serif;
        }

        .btn:hover {
            background-color: #c45e2b; /* Daha koyu turuncu ton */
        }

        /* Motto Section */
        .motto {
            position: relative;
            width: 100%;
            height: 60vh;
            overflow: hidden;
        }
        .motto-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #e8ad69; /* Transparent dark gray */

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 2rem;
            color: #c45e2b; /* Açık krem */
        }
        .motto-title {
            font-size: 3rem;
            font-family: 'Fira Sans Heavy', sans-serif;
            max-width: 80%;
            line-height: 1.4;
        }
        .motto-logo {
            max-height: 10vw; /* Logonun boyutunu artır */
           
        }
        .motto-title1 {
            font-size: 8rem;
            font-family: 'Fira Sans Heavy', sans-serif;
            max-width: 80%;
            line-height: 1.4;
            margin-bottom: 1.5rem;
        }
        .motto-title2 {
            font-size: 2rem;
            font-family: 'Fira Sans Heavy', sans-serif;
            max-width: 80%;
            line-height: 1;
            margin-bottom: 1.5rem;
        }
        /* Content Section Below Banner */
        .content-section {
            padding: 4rem 2rem;
            background-color: #f8f8f8;
            text-align: center;
        }

        .content-section h2 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 1rem;
        }

        .dish-categories {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
            margin-top: 2rem;
        }

        .dish-category {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 300px;
        }
        
        .dish-category-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px 8px 0 0;
            margin-bottom: 1rem;
        }

        .dish-category h3 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 0.5rem;
        }

        @media (max-width: 768px) {
        .dish-categories {
            flex-direction: column; /* Stack items vertically */
            align-items: center; /* Center items */
        }

        .dish-category {
            max-width: 90%; /* Make it occupy most of the screen width */
        }
        }
        /* Values Section */
        .values-section {
            padding: 4rem 2rem;
            background-color: #FFF4E6; /* Açık krem */
            text-align: center;
        }

    
    
    .carousel-images {
        display: flex;
        white-space: nowrap;
        position: relative;
        overflow: hidden; /* Prevents horizontal overflow */
        width: 100%; /* Ensures it fills the container */
    
    }


    .carousel-item {
    position: relative;
    display: inline-block;
}

.carousel-item img {
    flex-shrink: 0;
    width: 300px;
    height: 450px;
    object-fit: cover;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4);
    margin-right: 30px;
    transition: filter 0.3s ease; /* Smooth transition for the blur effect */
}

.carousel-item:hover img {
    filter: blur(5px); /* Apply blur on hover */
}

.carousel-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 1.2rem;
    font-family: 'Fira Sans Bold', sans-serif;
    text-align: center;
    opacity: 0; /* Initially hidden */
    transition: opacity 0.3s ease; /* Smooth transition for opacity */
}

.carousel-item:hover .carousel-text {
    opacity: 1; /* Show the text on hover */
}

    .carousel-images:hover .carousel-slide {
  animation-play-state: paused;
}


    .carousel-images img {
        flex-shrink: 0;
        width: 400px; /* Adjust the size for uniformity */
        height: 550px;
        object-fit: cover; /* Maintains aspect ratio */
        border-radius: 5px; /* Optional rounded corners */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4); /* Subtle shadow for depth */
        margin-right: 30px; /* Add spacing between images */
    }
    .carousel-slide {
        display: flex ; /* Corrected layout for continuous sliding */
        animation: 20s slide infinite linear;
        
    }



    @keyframes slide {
            
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-100%); /* İlk setin sonuna kadar kayar */
            }
            }

        /* Mobil Uyumluluk */
        @media (max-width: 768px) {
            .values-container {
                flex-direction: column;
            }

            .value-card {
                max-width: 90%;
            }

            .carousel-images {
            gap: 10px; /* Reduce gap for smaller screens */

            }

        .carousel-images img {
            width: 80px; /* Reduce image size */
            }


        
        }
        .custom-carousel-container {
    position: relative;
    width: 100%; /* Adjust container width */
    margin: auto;
    padding: 20px 0;
    background-color: #FFF4E6; /* Updated background color */
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden; /* Prevents overflow */
}

.custom-carousel-images {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px; /* Consistent spacing */
}

.custom-carousel-item {
    display: flex; /* Aligns text and image side by side */
    align-items: flex-start; /* Align text and image at the top */
    gap: 20px; /* Space between the text and image */
    max-width: 1200px; /* Restrict the width for cleaner layout */
    width: 100%; /* Make the layout responsive */
    box-sizing: border-box; /* Include padding and border in width calculation */
}


.custom-carousel-item img {
    width: 600px; /* Restrict image width */
    height: 500px; /* Fixed height for consistency */
    object-fit: cover; /* Maintain aspect ratio */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4); /* Add depth to the image */
}
.custom-carousel-text {
   
    max-width: 50%; /* Limit the width of the text */
    text-align: left; /* Ensure left alignment of the text */
    margin: 0; /* Remove any existing margin */
    padding: 0; /* Remove any padding to align exactly with the image */
    display: flex; /* Use flexbox to align the content */
    flex-direction: column; /* Stack title and description vertically */
    justify-content: flex-start; /* Align text to the top */
    transform: translateX(-150px); /* Move the text 40px to the left */
}

.custom-carousel-text h3 {
    font-size: 2.8rem; /* Larger font for the title */
    font-weight: bold;
    margin: 0 0 1rem 0; /* Remove default margin except for the bottom */
    color: #691f06; /* Theme color */
}

.custom-carousel-text p {
    font-size: 1.6rem; /* Font size for description */
    line-height: 1.6; /* Line height for better readability */
    margin: 0 0 1.5rem 0; /* Remove extra margins except bottom */
    color: #691f06 !important;
}


.custom-carousel-btn {
    position: absolute;
    top: 50%;
    border: none; /* Remove any default border */
    transform: translateY(-50%);
    width: 50px; /* Adjust arrow width */
    height: 50px; /* Adjust arrow height */
    background-color: #A43E23; /* Arrow color */
    cursor: pointer;
    z-index: 10;
    clip-path: polygon(100% 50%, 0 100%, 0 0); /* Create the triangle shape */
    transition: transform 0.3s ease;
}

.custom-carousel-btn:hover {
    transform: translateY(-50%) scale(1.1); /* Slight zoom on hover */
}
.custom-left-btn {
    left: 60px; /* Position the left arrow outside the container */
    clip-path: polygon(0 50%, 100% 100%, 100% 0); /* Reverse triangle direction */
}


.custom-right-btn {
    right: 60px;
}

.custom-carousel-indicators {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}

.custom-indicator {
    width: 12px; /* Adjust circle size */
    height: 12px;
    border: 2px solid #691f06; /* Border color for the circle */
    border-radius: 50%; /* Make the shape circular */
    background-color: transparent; /* Transparent background by default */
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease; /* Add smooth transitions */
}
.custom-indicator.active {
    background-color: #691f06; /* Fill the active circle */
    transform: scale(1.2); /* Slightly enlarge the active indicator */
}


.custom-banner {
    background-color: #A43E23; /* Banner rengi */
    color: #FFF4E6; /* Yazı rengi */
    padding: 40px 60px; /* Daha büyük bir padding */
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    margin: 20px 0;
}

.custom-banner-content {
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: space-between;
    width: 100%;
    max-width: 60vw; /* Genişliği sınırlı tut */
}

.custom-banner h2 {
    font-size: 4.0rem; /* Daha büyük font boyutu */
    font-weight: bold;
    margin: 0;
    font-family: 'Fira Sans', sans-serif;
}

.custom-banner-logo {
    max-height: 400px; /* Logonun boyutunu artır */
    margin-left: 80px;
}



.custom-banner2 {
    background-color: white; /* Banner rengi */
    color: #FFF4E6; /* Yazı rengi */
    padding: 40px 60px; /* Daha büyük bir padding */
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    margin: 20px 0;
}

.custom-banner-content2 {
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: space-between;
    width: 100%;
    max-width: 100vw; /* Genişliği sınırlı tut */
}

.custom-banner2 p {
    font-size: 1.2rem;
    line-height: 1.6;
    color: #907847;
    margin-bottom: 3rem;
    margin: 1rem auto; /* Center the paragraph */
}
.custom-banner2 h3 {
    font-size: 1.5rem;
    font-family: 'Fira Sans Bold', sans-serif;
    color: #691f06;
    margin-bottom: 4rem;
    margin: 1rem auto; /* Center the paragraph */
    max-width: 50vw; /* Limit the width of the paragraph */
}
.custom-banner-logo2 {
    max-height: 400px; /* Logonun boyutunu artır */
    margin-left: 80px;
}

/* Footer Section */
.custom-footer {
    background-color: #691F06; /* Footer color matching the example */
    color: #FFF4E6; /* Text color for the footer */
    text-align: center;
    padding: 20px;
    font-size: 1rem;
    font-family: 'Fira Sans', sans-serif;
}

.custom-footer p {
    margin: 0; /* Remove default margin */
}


@media (max-width: 768px) {
    /* General Adjustments */
    body {
        font-size: 14px; /* Default font size for smaller screens */
    }

    /* Banner Section */
    .banner {
        height: 50vh; /* Reduce height for mobile */
    }

    .banner-title {
        font-size: 1.5rem; /* Reduce text size */
        margin-bottom: 1rem;
    }

    .btn {
        font-size: 0.9rem; /* Smaller buttons */
        padding: 0.6rem 1rem;
    }

    /* Motto Section */
    .motto {
        height: 500px; /* Adjust height dynamically */
        padding: 2rem 1rem;
    }

    .motto-title {
        font-size: 2rem; /* Reduce title size */
    }

    .motto-title2 {
        font-size: 1rem; /* Smaller secondary text */
        line-height: 1.4;
    }

    .motto-logo {
        max-height: 80px;
        max-width: 400px; /* Reduce logo size */
    }

    /* Values Section */
    .values-section {
        padding: 2rem 1rem;
    }

    .carousel-images {
        gap: 10px; /* Reduce gap between images */
        overflow-x: scroll; /* Enable horizontal scrolling for smaller screens */
        display: flex;
    }

    .carousel-item img {
        width: 150px; /* Reduce image width */
        height: 200px; /* Maintain smaller height */
    }

    .carousel-text {
        font-size: 0.9rem; /* Adjust text size */
    }

    /* Custom Carousel */
    .custom-carousel-container {
        flex-direction: column; /* Stack items */
    }

    .custom-carousel-item {
        flex-direction: column; /* Stack image and text */
        text-align: center; /* Center align text */
    }

    .custom-carousel-item img {
        width: 90%; /* Make images occupy most of the screen */
        height: auto; /* Maintain aspect ratio */
    }

    .custom-carousel-text h3 {
        font-size: 1.5rem; /* Adjust font size for mobile */
    }

    .custom-carousel-text p {
        font-size: 1rem; /* Adjust description size */
    }

    .custom-carousel-btn {
        width: 30px; /* Smaller arrows */
        height: 30px;
    }

    /* Custom Banner */
    .custom-banner h2 {
        font-size: 2.0rem; /* Reduce font size for titles */
        text-align: center;
    }

    .custom-banner-content2 {
    display: flex;
    flex-direction: column; /* Stack elements vertically */
    align-items: center; /* Center-align all child elements horizontally */
    text-align: center; /* Center-align text */
    padding: 1rem; /* Add some spacing around the content */
}

.custom-banner-logo {
    max-height: 180px; /* Ensure the logo is appropriately sized */
    margin-right: 5rem; /* Add spacing below the logo */
}

    .custom-banner2 h3 {
        font-size: 1.2rem; /* Reduce text size */
        text-align: center;
    }

    .custom-banner-content2 {
        flex-direction: column; /* Stack text and logo */
        align-items: center;
    }

    .custom-banner-content2 img {
        max-width: 80%; /* Adjust image size */
        margin-bottom: 1rem;
    }

    /* Footer Section */
    .custom-footer {
        padding: 10px;
        font-size: 0.9rem; /* Reduce footer text size */
    }
}

</style>

    <script>
     document.addEventListener("DOMContentLoaded", () => {
    const images = document.querySelectorAll(".custom-carousel-item");
    const indicators = document.querySelectorAll(".custom-indicator");
    const leftBtn = document.querySelector(".custom-left-btn");
    const rightBtn = document.querySelector(".custom-right-btn");
    let currentIndex = 0;

    // Update active item and indicator
    function updateCarousel() {
        images.forEach((item, index) => {
            item.style.display = index === currentIndex ? "flex" : "none";
        });
        indicators.forEach((ind, index) => {
            ind.classList.toggle("active", index === currentIndex);
        });
    }

    // Move to the next image
    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        updateCarousel();
    }

    // Move to the previous image
    function prevImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateCarousel();
    }

    // Attach event listeners to buttons
    rightBtn.addEventListener("click", nextImage);
    leftBtn.addEventListener("click", prevImage);

    // Attach event listeners to indicators
    indicators.forEach((indicator, index) => {
        indicator.addEventListener("click", () => {
            currentIndex = index;
            updateCarousel();
        });
    });

    // Initialize the carousel
    updateCarousel();
})
            // Clone carousel-slide and append it for continuous looping
            document.addEventListener("DOMContentLoaded", function () {
                var copy = document.querySelector(".carousel-slide").cloneNode(true);
                
                document.querySelector(".carousel-images").appendChild(copy);
            });
    </script>


