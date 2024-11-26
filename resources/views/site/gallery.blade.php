@extends('layouts.app')

@section('content')
    @include('site.header')

<section id="gallery">
    <div class="container gallery-container">
        <div class="gallery-grid">
            <!-- Title -->
            <h1 class="gallery-title">Our Menu Highlights</h1>

            <!-- Gallery Items -->
            <div>
                <img src="{{ asset('images/image1.jpeg') }}"  alt="Dish 1" class="gallery-image" onclick="showImage('images/image1.jpeg')">
            </div>
            <div>
                <img src="{{ asset('images/image2.jpg') }}"  alt="Dish 2" class="gallery-image" onclick="showImage('images/image2.jpg')">
            </div>
            <div>
                <img src="{{ asset('images/image3.jpeg') }}"  alt="Dish 3" class="gallery-image" onclick="showImage('images/image3.jpeg')">
            </div>
            <div>
                <img src="{{ asset('images/image4.jpeg') }}"  alt="Dish 4" class="gallery-image" onclick="showImage('images/image4.jpeg')">
            </div>
            <div>
                <img src="{{ asset('images/image5.jpg') }}"  alt="Dish 5" class="gallery-image" onclick="showImage('images/image5.jpg')">
            </div>
            <div>
                <img src="{{ asset('images/image6.jpeg') }}"  alt="Dish 6" class="gallery-image" onclick="showImage('images/image6.jpeg')">
            </div>
        </div>
    </div>

    <!-- Fullscreen Modal -->
    <div id="fullscreenModal" class="fullscreen-modal" onclick="closeModal()">
        <img id="fullscreenImage" src="" alt="Large View" class="fullscreen-image">
    </div>
</section>

@endsection


<style>
    /* Global resets */
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

    .gallery-container {
        margin: 50px auto;
        max-width: 1200px;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        align-items: start;
    }

    .gallery-title {
        grid-column: 1 / -1; /* Span across all columns */
        text-align: center;
        font-size: 2rem;
        color: #691f06;
        margin-top: 40px;
        margin-bottom: 20px;
    }

    .gallery-image {
        width: 400px;
        height: 400px;
        border-radius: 8px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .gallery-image:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Fullscreen Modal */
    .fullscreen-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .fullscreen-modal.active {
        display: flex;
    }

    .fullscreen-image {
        width: 800px;
        height: 800px;
        border-radius: 8px;
    }
</style>

<script>
    // Function to display the selected image in full width
    function showImage(src) {
        const modal = document.getElementById('fullscreenModal');
        const fullscreenImage = document.getElementById('fullscreenImage');
        fullscreenImage.src = src;
        modal.classList.add('active');
    }

    // Function to close the fullscreen modal
    function closeModal() {
        const modal = document.getElementById('fullscreenModal');
        modal.classList.remove('active');
    }
</script>
