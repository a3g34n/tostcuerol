<!-- resources/views/site/home.blade.php -->
@extends('layouts.app')

@section('content')
    @include('site.header')

<section id="gallery">
    <div class="container gallery-container">
        <h1 class="text-center mb-4">Our Menu Highlights</h1>
        <div class="row g-3">
            <!-- Gallery Items -->
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="images/image1.jpeg" alt="Dish 1" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('images/image1.jpeg')">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="images/image2.jpg" alt="Dish 2" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('images/image2.jpg')">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="images/image3.jpeg" alt="Dish 3" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('images/image3.jpeg')">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="images/image4.jpeg" alt="Dish 4" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('images/image4.jpeg')">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="images/image5.jpg" alt="Dish 5" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('images/image5.jpg')">
            </div>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="images/image1.jpeg" alt="Dish 6" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('images/image1.jpeg')">
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img id="modalImage" src="" alt="Large View" class="img-fluid">
                </div>
            </div>
        </div>
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

    .gallery-item {
        position: relative;
        overflow: hidden;
    }

    .gallery-item img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease, border-radius 0.3s ease;
        border-radius: 12px; /* Rounded corners */
        cursor: pointer;
    }

    .gallery-item:hover img {
        transform: scale(1.05); /* Slight zoom effect on hover */
        border-radius: 12px;
    }

    /* Modal custom styles */
    .modal-content {
        background: transparent;
        border: none;
        box-shadow: none;
    }

    .modal-body {
        padding: 0;
    }

    #modalImage {
        border-radius: 12px; /* Keep rounded corners in modal */
        max-width: 100%;
        max-height: 90vh;
        object-fit: contain;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    // Function to change the modal image
    function showImage(src) {
        document.getElementById('modalImage').src = src;
    }
</script>
