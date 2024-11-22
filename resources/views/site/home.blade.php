    <!-- resources/views/site/home.blade.php -->
    @extends('layouts.app')

    @section('content')
        @include('site.header')

        <!-- Full-Width Banner Section -->
        <section class="banner">
            <img src="{{ asset('images/image3.jpeg') }}" alt="Tost" class="banner-image">
            <!-- Overlay and Text -->
            <div class="banner-overlay">
                <h1 class="banner-title">Bir tosttan fazlası: geçmişe, hatıralara ve paylaşıma bir yolculuk</h1>
                <a href="#" class="btn btn-primary">Keşfet</a>
            </div>
        </section>

        <!-- Values Section -->
    <!-- Values Section -->
    <section class="values-section">
        <div class="carousel-images">
        <div class="carousel-slide">
        <div class="carousel-item">
            <img src="{{ asset('images/image1.jpeg') }}" alt="Image 1">
            <div class="carousel-text">Description for Image 1</div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/image2.jpg') }}" alt="Image 2">
            <div class="carousel-text">Description for Image 2</div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/image3.jpeg') }}" alt="Image 3">
            <div class="carousel-text">Description for Image 3</div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/image4.jpeg') }}" alt="Image 4">
            <div class="carousel-text">Description for Image 4</div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/image5.jpg') }}" alt="Image 5">
            <div class="carousel-text">Description for Image 5</div>
        </div>
    </div>
            <div class="carousel-slide">
        <div class="carousel-item">
            <img src="{{ asset('images/image1.jpeg') }}" alt="Image 1">
            <div class="carousel-text">Description for Image 1</div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/image2.jpg') }}" alt="Image 2">
            <div class="carousel-text">Description for Image 2</div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/image3.jpeg') }}" alt="Image 3">
            <div class="carousel-text">Description for Image 3</div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/image4.jpeg') }}" alt="Image 4">
            <div class="carousel-text">Description for Image 4</div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/image5.jpg') }}" alt="Image 5">
            <div class="carousel-text">Description for Image 5</div>
        </div>
    </div>
        </div>
    </section>
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
        }
        /* Full-width header styling */
        header {
            width: 100%;
            background-color: #D99B60;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 1.5rem 2rem;
        }

        .navbar {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
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
            font-family: 'Fira Sans Heavy', sans-serif;
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
        width: 300px; /* Adjust the size for uniformity */
        height: 450px;
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
    



    </style>

    <script>
            // Clone carousel-slide and append it for continuous looping
            document.addEventListener("DOMContentLoaded", function () {
                var copy = document.querySelector(".carousel-slide").cloneNode(true);
                
                document.querySelector(".carousel-images").appendChild(copy);
            });
    </script>


