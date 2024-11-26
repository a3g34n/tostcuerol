<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f9f2e7;
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
            border-radius: 12px; /* Rounded corners for images */
            cursor: pointer;
        }
        .gallery-item:hover img {
            transform: scale(0.9);
            border-radius: 12px; /* Slightly more rounded on hover */
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
</head>
<body>
    <div class="container gallery-container">
        <h1 class="text-center mb-4">Our Menu Highlights</h1>
        <div class="row g-3">
            <!-- Gallery Items -->
            <div class="col-md-4 gallery-item">
                <img src="images/image1.jpeg" alt="Dish 1" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('images/image1.jpeg')">
            </div>
            <div class="col-md-4 gallery-item">
                <img src="images/image2.jpg" alt="Dish 2" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('images/image2.jpg')">
            </div>
            <div class="col-md-4 gallery-item">
                <img src="images/image3.jpeg" alt="Dish 3" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('images/image3.jpeg')">
            </div>
            <div class="col-md-4 gallery-item">
                <img src="images/image4.jpeg" alt="Dish 4" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('images/image4.jpeg')">
            </div>
            <div class="col-md-4 gallery-item">
                <img src="images/image5.jpg" alt="Dish 5" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('images/image5.jpg')">
            </div>
            <div class="col-md-4 gallery-item">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    // Function to change the modal image
    function showImage(src) {
        document.getElementById('modalImage').src = src;
    }
</script>
</body>
</html>