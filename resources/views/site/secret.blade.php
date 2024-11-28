@extends('layouts.app')

@section('content')
    @include('site.header')

    <!-- Banner Section -->
    <section class="banner">
        <img src="{{ asset('images/banner_secret.jpg') }}" alt="Banner Image" class="banner-image">
        <div class="banner-content">
            <h1>Welcome to Our Delicious World</h1>
            <p>Experience the joy of authentic flavors</p>
        </div>
    </section>

     <!-- Image Grid -->
     <div class="image-grid">
            <!-- Image with Title and Description -->
            <div class="grid-item">
                <img src="{{ asset('images/image1.jpeg') }}" alt="Image 1" class="grid-image">
                <h3 class="image-title">Image Title 1</h3>
                <p class="image-description">This is the description for the first image. It provides details about the content of the image.</p>
                <a href="#" class="info-button">Daha fazla bilgi</a>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/image2.jpg') }}" alt="Image 2" class="grid-image">
                <h3 class="image-title">Image Title 2</h3>
                <p class="image-description">This is the description for the second image. It provides details about the content of the image.</p>
                <a href="#" class="info-button">Daha fazla bilgi</a>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/image3.jpeg') }}" alt="Image 3" class="grid-image">
                <h3 class="image-title">Image Title 3</h3>
                <p class="image-description">This is the description for the third image. It provides details about the content of the image.</p>
                <a href="#" class="info-button">Daha fazla bilgi</a>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/image4.jpeg') }}" alt="Image 4" class="grid-image">
                <h3 class="image-title">Image Title 4</h3>
                <p class="image-description">This is the description for the fourth image. It provides details about the content of the image.</p>
                <a href="#" class="info-button">Daha fazla bilgi</a>
            </div>

            <div class="grid-item">
                <img src="{{ asset('images/image1.jpeg') }}" alt="Image 1" class="grid-image">
                <h3 class="image-title">Image Title 1</h3>
                <p class="image-description">This is the description for the first image. It provides details about the content of the image.</p>
                <a href="#" class="info-button">Daha fazla bilgi</a>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/image2.jpg') }}" alt="Image 2" class="grid-image">
                <h3 class="image-title">Image Title 2</h3>
                <p class="image-description">This is the description for the second image. It provides details about the content of the image.</p>
                <a href="#" class="info-button">Daha fazla bilgi</a>
            </div>
        </div>
    </section>


    <!-- Footer Section -->
    @include('site.footer')
@endsection



<style>
    /* General Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Fira Sans', sans-serif;
        color: #691f06; /* Main color */
        background-color: #FFF4E6; /* Page background */
        overflow-x: hidden !important;
    }

    .spacer {
        height: 600px; /* Add space between sections */
        background-color: #FFF4E6;
    }

    .banner {
        position: relative;
        height: 100vh; /* Full height */
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .banner-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        object-fit: cover; /* Cover proportionally */
    }

    .banner-content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: white;
        padding: 20px;
        border-radius: 10px;
    }

    .banner h1 {
        font-size: 3rem;
        margin-bottom: 10px;
    }

    .banner p {
        font-size: 1.5rem;
        margin: 0;
    }

    /* Image Grid */
    .image-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr); /* Two columns */
        gap: 30px;
        max-width: 1200px;
        margin: 2rem auto;
        background-color: #FFF4E6;
    }

    .grid-item {
        display: flex;
        flex-direction: column;
       
        align-items: flex-start; /* Left-align content */
        text-align: left; /* Ensure text is left-aligned */
        background-color: #FFFFFF; /* Set container background to white */
        height: 467px;
        width: 567px; /* Container height */
        padding: 0px; /* Add padding to create space around the content */
    }

    .image-title {
        font-size: 1.5rem;
        color: #691f06;
        margin: 10px 0 5px; /* Add spacing above and below */
        padding-left: 10px; /* Add spacing from the left edge */
    }

    .image-description {
        font-size: 1rem;
        color: #555;
        line-height: 1.6;
        margin-bottom: 15px; /* Add spacing below the description */
        padding-left: 10px; /* Add spacing from the left edge */
    }

    .grid-image {
        width: 567px; /* Fixed width */
        height: 246px; /* Fixed height */
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 10px; /* Space between image and title */
    }

    .image-title {
        font-size: 1.5rem;
        color: #691f06;
        margin-bottom: 5px;
    }

    .image-description {
        font-size: 1rem;
        color: #555;
        line-height: 1.6;
    }

    .info-button {
        display: inline-block;
        font-size: 1rem;
        color: #FFFFFF;
        background-color: #691f06;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
        margin: 25px 0 5px; /* Add spacing above and below */
       
        margin-left: 10px; /* Add consistent left padding */
    }

    .info-button:hover {
        background-color: #8a2d09;
    }

    @media (max-width: 768px) {
    body {
        overflow-x: hidden; /* Prevent horizontal scrolling */
    }

    .image-grid {
        grid-template-columns: 1fr; /* Single column */
        gap: 20px; /* Adjust spacing between rows */
        padding: 0 15px; /* Add padding for better alignment on mobile */
    }

    .grid-item {
        width: 100%; /* Ensure cards take full width */
        height: auto; /* Allow dynamic height */
        padding: 15px; /* Add padding around the card for breathing space */
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Add a subtle shadow for better visibility */
        border-radius: 8px; /* Make cards look more polished */
    }

    .grid-image {
        width: 100%; /* Full width of the container */
        height: auto; /* Maintain aspect ratio */
    }

    .image-title {
        font-size: 1.2rem; /* Adjust title font size */
        padding-left: 0; /* Remove padding to align with the container */
    }

    .image-description {
        font-size: 1rem; /* Adjust font size for better readability */
        line-height: 1.4;
        padding-left: 0; /* Remove padding */
    }

    .info-button {
        margin-left: 0; /* Align button with the content */
        width: fit-content; /* Adjust button width to fit content */
        font-size: 0.9rem; /* Slightly reduce font size */
    }
}
</style>
