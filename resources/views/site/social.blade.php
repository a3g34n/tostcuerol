@extends('layouts.app')

@section('content')
    @include('site.header')

    <section class="social-responsibility">
        <!-- Full-width banner -->
       
    <section class="video-banner">
        <!-- Full-width banner with play button, text, and banner image -->
        <div class="banner-container">
            <!-- Play button on the left -->
            <div class="banner-play-button">
                <button id="play-video-btn">
                    <i class="fa fa-play-circle"></i>
                </button>
            </div>

            <!-- Banner image on the right -->
            <div class="banner-image-container">
                <img src="{{ asset('images/nature.png') }}" alt="Banner Image" class="banner-image">
            </div>

            <!-- Overlay text -->
           
        </div>
    </section>

    <!-- Video Modal -->
    <div id="video-modal" class="video-modal">
        <div class="modal-content">
            <video id="fullscreen-video" controls>
                <source src="{{ asset('images/Franchise.mp4') }}" type="video/mp4">
              
            </video>
        </div>
    </div>
    <div class="intro-section">
        <h1 class="intro-title">Her Zaman Bir Tosttan Fazlası</h1>
        <p class="intro-description">
            Geçmişten günümüze, geleneklerimizi koruyarak geleceğe taşıdığımız bir hikaye.
        </p>
    </div>
        <!-- Image Grid -->
        <div class="image-grid">
            <!-- Image with Title and Description -->
            <div class="grid-item">
                <img src="{{ asset('images/image1.jpeg') }}" alt="Image 1" class="grid-image">
               
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/image2.jpg') }}" alt="Image 2" class="grid-image">
                
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/image3.jpeg') }}" alt="Image 3" class="grid-image">
               
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/image4.jpeg') }}" alt="Image 4" class="grid-image">
               
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
        color: #691f06; /* Main color */
        background-color: #FFF4E6; /* Background color */
    }

    /* Banner Container */
    .banner-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        height: 500px;
        background-color: #691f06;
        overflow: hidden;
        padding: 0; /* Remove padding */
    margin: 0; /* Remove margin */
    border-radius: 12px; /* Remove rounded corners */
    
        width: 100%; /* Ensure full width */
    }

    /* Play Button */
    .banner-play-button {
        position: absolute;
        left: 2%;
        z-index: 10;
    }

    .banner-play-button button {
        background: transparent;
        border: none;
        font-size: 4rem;
        color: #FFF;
        cursor: pointer;
    }

    .banner-play-button button:hover {
        color: #ffd700;
    }

    /* Banner Image */
    .banner-image-container {
        flex: 1;
        display: flex;
        justify-content: flex-end;
        
    }

    .banner-image {
        height: 600px;
        width: 1200px;
        background:transparent;
        object-fit: cover;
    }

    /* Overlay Text */
    .banner-text {
        position: absolute;
        left: 20%;
        top: 50%;
        transform: translateY(-50%);
        color: #FFF;
        text-align: left;
        max-width: 40%;
    }

    .banner-text h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
    }

    .banner-text p {
        font-size: 1.5rem;
        line-height: 1.6;
    }

    /* Video Modal */
    .video-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 1000;
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        position: relative;
        width: 80%;
        max-width: 900px;
        background: #000;
        padding: 1rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    #fullscreen-video {
        width: 100%;
        height: auto;
    }

    .video-modal.show {
        display: flex;
    }

    .social-responsibility {
        background-color: #FFF4E6; /* Background color */
        padding: 4rem 2rem;
        text-align: center;
    }

    .social-container {
        max-width: 800px;
        margin: 0 auto;
        background-color: #FFF4E6;
        padding: 2rem;
    }

    .social-title {
        font-size: 2.5rem;
        font-family: 'Fira Sans', sans-serif;
        color: #691f06; /* Title color */
        margin-bottom: 1rem;
    }

    .social-text {
        font-size: 1.2rem;
        font-family: 'Fira Sans', sans-serif;
        line-height: 1.8;
        color: #333;
    }

    /* Image Grid */
    .image-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr); /* Two columns */
        gap: 30px;
        background: #FFF4E6;
        max-width: 1200px;
        margin: 2rem auto;
    }

    .grid-item {
        text-align: center;
        padding: 20px;
        background: #FFF4E6;
       
       
    }

    .grid-image {
        width: 600px;
        height: 600px;
        object-fit: cover;
        border-radius: 8px;
    }

    .image-title {
        font-size: 1.5rem;
        color: #691f06;
        margin: 10px 0 5px;
    }

    .image-description {
        font-size: 1rem;
        color: #555;
        line-height: 1.6;
    }

    .custom-footer {
        background-color: #691F06; /* Footer color */
        color: #FFF4E6; /* Footer text color */
        text-align: center;
        padding: 20px;
        font-size: 1rem;
        font-family: 'Fira Sans', sans-serif;
    }

    .custom-footer p {
        margin: 0;
    }


    .banner-play-button {
        position: relative;
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 10;
    }

    /* Play Button Styling */
    .banner-play-button button {
        background: transparent;
        border: none;
        font-size: 4rem;
        color: #FFF;
        cursor: pointer;
        position: relative;
        z-index: 2;
        animation: pulse 1.5s infinite ease-in-out;
    }

    .banner-play-button button:hover {
        color: #ffd700;
        transform: scale(1.1);
        transition: transform 0.2s ease-in-out;
    }

    /* Play Button Pulsing Animation */
    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.2);
        }
    }

    /* Circular Glow Effect */
    .banner-play-button button::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100px;
        height: 100px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        z-index: 1;
        animation: glow 1.5s infinite ease-in-out;
    }

    .intro-section {
    text-align: center;
    margin-bottom: 3rem;
}

.intro-title {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    margin-top: 4rem;
}

.intro-description {
    font-size: 1.2rem;
    line-height: 1.6;
    color: #907847;
}

    @keyframes glow {
        0%, 100% {
            opacity: 0.6;
            transform: translate(-50%, -50%) scale(1);
        }
        50% {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1.3);
        }
    }

    @media (max-width: 768px) {
    body {
        overflow-x: hidden; /* Prevent horizontal scrolling */
        margin: 0;
        padding: 0;
    }

    .banner-play-button {
        top: 100%; /* Move the button further down */
         /* Add padding for spacing */
        transform: translateY(-10%); /* Center it relative to the new position */
        width: auto; /* Ensure proper size on mobile */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 10;
    }

    .banner-play-button button {
        font-size: 2.5rem; /* Keep the size appropriate for smaller screens */
    }

    .banner-play-button button::after {
        width: 70px; /* Keep the glow effect proportionate */
        height: 70px;
    }

    .banner-container {
        flex-direction: column; /* Stack elements vertically */
        height: auto; /* Adjust the overall height dynamically */
        padding: 20px; /* Add some padding for spacing */
    }

    .banner-image-container {
        width: 100%; /* Ensure the image scales properly */
        height: auto; /* Maintain aspect ratio */
    }

    .banner-image {
        width: 100%; /* Scale the image appropriately */
        height: auto; /* Ensure aspect ratio remains intact */
    }
    .image-grid {
        grid-template-columns: 1fr; /* Single column layout */
        gap: 20px; /* Adjust spacing between rows */
        padding: 0 10px; /* Add padding for alignment */
    }

    .grid-item {
        width: 100%; /* Full width for each card */
        margin: 0 auto; /* Center-align the card */
        height: auto; /* Adjust height dynamically */
        padding: 10px; /* Add padding for better spacing */
        background: #FFF4E6; /* Ensure background is consistent */
        border-radius: 8px; /* Maintain rounded corners */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    }

    .grid-image {
        width: 100%; /* Scale images to fit card */
        height: auto; /* Maintain aspect ratio */
        border-radius: 6px; /* Rounded corners for images */
    }

    .intro-section {
        padding: 10px; /* Add padding for mobile devices */
    }

    .intro-title {
        font-size: 1.8rem; /* Slightly smaller title size */
    }

    .intro-description {
        font-size: 1rem; /* Adjust font size for better readability */
        line-height: 1.5;
    }

    .banner-play-button button {
        font-size: 3rem; /* Adjust play button size */
    }

    .video-modal .modal-content {
        width: 90%; /* Make modal fit smaller screens */
    }
}
</style>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const playButton = document.getElementById('play-video-btn');
        const videoModal = document.getElementById('video-modal');
        const videoElement = document.getElementById('fullscreen-video');

        playButton.addEventListener('click', () => {
            videoModal.classList.add('show');
            videoElement.play();
        });

        videoModal.addEventListener('click', (event) => {
            if (event.target === videoModal) {
                videoModal.classList.remove('show');
                videoElement.pause();
            }
        });
    });
</script>