<!-- resources/views/site/home.blade.php -->
@extends('layouts.app')

@section('content')
    @include('site.header')

    <!-- Full-Width Banner Section -->
    <section class="banner">
        <img src="{{ asset('images/tost.jpeg') }}" alt="logo" class="banner-image">
        <!-- Overlay and Text -->
        <div class="banner-overlay">
            <h1 class="banner-title">Bir tosttan fazlası: geçmişe, hatıralara ve paylaşıma bir yolculuk</h1>
            <a href="#" class="btn btn-primary">Explore More</a>
        </div>
    </section>

    <!-- Content Section Below Banner -->
    <section class="content-section">
        <h2>Our Dishes</h2>
        <p>Discover a variety of delightful options that bring back the taste of classic neighborhood memories.</p>
        <div class="dish-categories">
            <div class="dish-category">
                <img src="{{ asset('images/avocado-toast.jpg') }}" alt="Entrees and Fast Foods" class="dish-category-image">
                <h3>Entrees and Fast Foods</h3>
                <p>Classic and flavorful, made with love and tradition.</p>
            </div>
            <div class="dish-category">
                <img src="{{ asset('images/fetaost.jpg') }}" alt="Steak and Chicken" class="dish-category-image">
                <h3>Steak and Chicken</h3>
                <p>Perfectly grilled and seasoned to perfection.</p>
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

    /* Banner Section Styling */
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

    /* Overlay styling */
    .banner-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
        padding: 0 2rem;
    }

    /* Overlay text styling */
    .banner-title {
        font-size: 3rem;
        max-width: 80%;
        line-height: 1.4;
        margin-bottom: 1.5rem;
    }

    .btn {
        display: inline-block;
        background-color: #D99B60;
        color: white;
        text-decoration: none;
        padding: 0.8rem 1.5rem;
        border-radius: 4px;
        font-size: 1.1rem;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #c68744;
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
</style>