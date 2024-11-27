@extends('layouts.app')

@section('content')
    @include('site.header')

    <section class="social-responsibility">
        <!-- Full-width banner -->
        <div class="banner">
            <img src="{{ asset('images/banner.jpg') }}" alt="Banner Image" class="banner-image">
        </div>

        <!-- Social Responsibility Text -->
        <div class="social-container">
            <h1 class="social-title">Sosyal Sorumluluk</h1>
            <p class="social-text">
                “Her tost bir çocuğun yüzünde gülümsemeye dönüşüyor. Bu mutluluğun bir parçası olduğun için teşekkür ederiz!”
            </p>
        </div>

        <!-- Image Grid -->
        <div class="image-grid">
            <!-- Image with Title and Description -->
            <div class="grid-item">
                <img src="{{ asset('images/image1.jpeg') }}" alt="Image 1" class="grid-image">
                <h3 class="image-title">Image Title 1</h3>
                <p class="image-description">This is the description for the first image. It provides details about the content of the image.</p>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/image2.jpg') }}" alt="Image 2" class="grid-image">
                <h3 class="image-title">Image Title 2</h3>
                <p class="image-description">This is the description for the second image. It provides details about the content of the image.</p>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/image3.jpeg') }}" alt="Image 3" class="grid-image">
                <h3 class="image-title">Image Title 3</h3>
                <p class="image-description">This is the description for the third image. It provides details about the content of the image.</p>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/image4.jpeg') }}" alt="Image 4" class="grid-image">
                <h3 class="image-title">Image Title 4</h3>
                <p class="image-description">This is the description for the fourth image. It provides details about the content of the image.</p>
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

    /* Full-width banner */
    .banner {
        width: 100%;
        overflow: hidden;
    }

    .banner-image {
        width: 100%;
        height: auto;
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
</style>
