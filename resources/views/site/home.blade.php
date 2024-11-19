<!-- resources/views/site/home.blade.php -->
@extends('layouts.app')

@section('content')
    @include('site.header')

    <!-- Full-Width Banner Section -->
    <section class="banner">
        <img src="{{ asset('images/tost.jpeg') }}" alt="Tost" class="banner-image">
        <!-- Overlay and Text -->
        <div class="banner-overlay">
            <h1 class="banner-title">Bir tosttan fazlası: geçmişe, hatıralara ve paylaşıma bir yolculuk</h1>
            <a href="#" class="btn btn-primary">Keşfet</a>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <h2 class="values-title">Hikayemiz</h2>
        <p class="values-description">Bir tosttan daha fazlası: Samimiyet, paylaşım ve geçmişin sıcaklığıyla dolu bir yolculuk.</p>
        <div class="values-container">
            <div class="value-card">
                <img src="{{ asset('images/sincerity.jpg') }}" alt="Samimiyet" class="value-image">
                <h3 class="value-title">Samimiyet</h3>
                <p class="value-text">
                    Müşterilerimizi misafir olarak görüyor, onlarla duygusal bir bağ kuruyoruz. Her tost, geçmişin anılarını bugüne taşıyan bir davet.
                </p>
            </div>
            <div class="value-card">
                <img src="{{ asset('images/sharing.jpg') }}" alt="Paylaşmak" class="value-image">
                <h3 class="value-title">Paylaşmak</h3>
                <p class="value-text">
                    Tostlarımız, yalnızca birer yiyecek değil; paylaşmanın, dostluğun ve birlikteliğin sembolü.
                </p>
            </div>
            <div class="value-card">
                <img src="{{ asset('images/nostalgia.jpg') }}" alt="Nostalji" class="value-image">
                <h3 class="value-title">Nostalji</h3>
                <p class="value-text">
                    Geçmişin sıcaklığını bugünün sofralarına taşıyoruz. Her tost, eski dostlarla yeniden buluşturan bir köprü.
                </p>
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
        background-color: rgba(105, 31, 6, 0.6); /* Transparan kırmızı */
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
        background-color: #fff4e6; /* Açık krem */
        text-align: center;
    }

    .values-title {
        font-size: 2.5rem;
        font-family: 'Fira Sans Heavy', sans-serif;
        color: #691f06;
        margin-bottom: 1rem;
    }

    .values-description {
        font-size: 1.2rem;
        font-family: 'Fira Sans Medium', sans-serif;
        color: #907847; /* Zeytin yeşili */
        margin-bottom: 2rem;
        max-width: 800px;
        margin: 0 auto;
    }

    .values-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 2rem;
    }

    .value-card {
        background-color: #e36e52; /* Yardımcı kırmızımsı ton */
        color: #fff4e6; /* Açık krem */
        border-radius: 8px;
        padding: 2rem;
        max-width: 300px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .value-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 8px 8px 0 0;
        margin-bottom: 1rem;
        border: 3px solid #691f06;
    }

    .value-title {
        font-size: 1.5rem;
        font-family: 'Fira Sans Bold', sans-serif;
        margin-bottom: 0.5rem;
    }

    .value-text {
        font-size: 1rem;
        font-family: 'Fira Sans Book', sans-serif;
        line-height: 1.5;
    }

    /* Mobil Uyumluluk */
    @media (max-width: 768px) {
        .values-container {
            flex-direction: column;
        }

        .value-card {
            max-width: 90%;
        }
    }

</style>