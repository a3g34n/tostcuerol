<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
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
            transition: transform 0.3s ease;
        }
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container gallery-container">
        <h1 class="text-center mb-4">Our Restaurant Gallery</h1>
        <div class="row g-3">
            <!-- Gallery Item -->
            <div class="col-md-4 gallery-item">
                <img src="images/dish1.jpg" alt="Dish 1">
                <div class="gallery-caption">Delicious Pasta</div>
            </div>
            <div class="col-md-4 gallery-item">
                <img src="images/dish2.jpg" alt="Dish 2">
                <div class="gallery-caption">Fresh Salad</div>
            </div>
            <div class="col-md-4 gallery-item">
                <img src="images/dish3.jpg" alt="Dish 3">
                <div class="gallery-caption">Gourmet Burger</div>
            </div>
            <!-- Add more items as needed -->
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
