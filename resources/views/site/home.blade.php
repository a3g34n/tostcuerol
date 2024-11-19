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
  <!-- Values Section -->
  <section class="values-section">
    <h2 class="values-title">Marka Değerleri</h2>
    <p class="values-description">
        Sanayi Tostçusu olarak değerlerimizle müşterilerimize sıcak bir deneyim sunuyoruz.
    </p>
    <div class="values-container">
        <!-- Samimiyet -->
        <div class="value-card">
            <div class="card-inner">
                <div class="card-front">
                    
                    <h3 class="value-title">Samimiyet</h3>
                </div>
                <div class="card-back">
                    <p class="value-text">Biz müşterilerimizi birer misafir olarak görüyoruz. Onları yalnızca doyurmakla kalmıyoruz, onlarla duygusal bir bağ kuruyoruz. Her tost, geçmişin anılarını bugüne taşıyan bir davet.</p>
                </div>
            </div>
        </div>

        <!-- Paylaşmak -->
        <div class="value-card">
            <div class="card-inner">
                <div class="card-front">
                   
                    <h3 class="value-title">Paylaşmak</h3>
                </div>
                <div class="card-back">
                    <p class="value-text">Tostlarımız yalnızca birer yiyecek değil; paylaşmanın, birlikteliğin ve dostluğun sembolü. Bir masada buluşan herkes markamızın en önemli parçası.</p>
                </div>
            </div>
        </div>

        <!-- Sorumluluk -->
        <div class="value-card">
            <div class="card-inner">
                <div class="card-front">
                    
                    <h3 class="value-title">Sorumluluk</h3>
                </div>
                <div class="card-back">
                    <p class="value-text">Yalnızca kendi kazancımıza değil toplumun tamamına katkıda bulunmayı amaçlıyoruz. Eşit gıda erişimini destekleyen projelerle, daha iyi bir gelecek yaratmak için üzerimize düşeni yapıyoruz.</p>
                </div>
            </div>
        </div>

        <!-- Doyuruculuk -->
        <div class="value-card">
            <div class="card-inner">
                <div class="card-front">
                    
                    <h3 class="value-title">Doyuruculuk</h3>
                </div>
                <div class="card-back">
                    <p class="value-text">Misafirlerimize dolu dolu bir lezzet sunuyoruz. Tostlarımız, gerçek anlamda tatmin edici ve samimi bir deneyim yaşatıyor</p>
                </div>
            </div>
        </div>

        <!-- Uygun Fiyat -->
        <div class="value-card">
            <div class="card-inner">
                <div class="card-front">
                    
                    <h3 class="value-title">Uygun Fiyat</h3>
                </div>
                <div class="card-back">
                    <p class="value-text">Herkes için erişilebilir olmayı önemsiyoruz. Doyurucu ve uygun fiyatlı bir lezzet sunarak kaliteyi erişilebilir kılmak önceliğimiz.</p>
                </div>
            </div>
        </div>

        <!-- Nostalji -->
        <div class="value-card">
            <div class="card-inner">
                <div class="card-front">
                   
                    <h3 class="value-title">Nostalji</h3>
                </div>
                <div class="card-back">
                    <p class="value-text">Biz, geçmişin sıcaklığını bugünün sofralarına taşıyoruz. Her tost, müşterilerimizi eski dostlarla yeniden buluşturan bir köprü.</p>
                </div>
            </div>
        </div>

        <!-- Topluluk -->
        <div class="value-card">
            <div class="card-inner">
                <div class="card-front">
                   
                    <h3 class="value-title">Topluluk</h3>
                </div>
                <div class="card-back">
                    <p class="value-text">Misafirlerimizi birer müşteri değil, topluluğumuzun bir parçası olarak görüyoruz. Hep birlikte büyüyen, birbirini destekleyen bir aile yaratmayı hedefliyoruz.</p>
                </div>
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
        background-color: #E9AD69; /* Açık krem */
        text-align: center;
    }

    .values-title {
        font-size: 2.5rem;
        font-family: 'Fira Sans Heavy', sans-serif;
        color: #691f06;
        margin-bottom: 1rem;
    }

    .values-description {
        font-size: 1.4rem;
        font-family: 'Fira Sans Medium', sans-serif;
        color: #fff4e6; /* Zeytin yeşili */
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
    width: 300px;
    height: 200px;
    perspective: 1000px; /* Enables 3D effect */
    margin: 1rem;
}
.card-inner {
    width: 100%;
    height: 100%;
    position: relative;
    transform-style: preserve-3d; /* Preserve 3D for child elements */
    transition: transform 0.6s; /* Smooth flip animation */
}

.value-card:hover .card-inner {
  
    transform: rotateY(180deg);
  
}

/* Front Face */
.card-front,
.card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden; /* Ensures hidden side does not appear */
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem;
    font-family: 'Fira Sans', sans-serif;
}

/* Front Face */
.card-front {
    background: #C55F2B; /* Nostalgic purple-pink gradient */
    color: #fff4e6; /* Light cream text color */
    transform: rotateY(0deg); /* Default face */
}

.card-front .card-logo {
    width: 50px;
    height: 50px;
    margin-bottom: 1rem;
}

.card-front .value-title {
    font-size: 1.5rem;
    font-weight: bold;
    text-align: center;
}


/* Back Face */
.card-back {
    background: #C55F2B; /* Nostalgic purple-pink gradient */
    color : #fff4e6; /* Light cream text color */
    transform: rotateY(180deg); /* Hidden by default */
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem;
    border: 2px solid #C55F2B; /* Border matches front face */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
}

.card-back .value-text {
    color: #ffffff; /* Ensure white text for better contrast */
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2); /* Subtle shadow for readability */
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
    color: #fff4e6; /* Matches the background of the page */
    margin-bottom: 0.5rem;
}

    .value-text {
    font-size: 1rem;
    font-family: 'Fira Sans Book', sans-serif;
    line-height: 1.6;
    color: #fff; /* Keeps text legible */
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