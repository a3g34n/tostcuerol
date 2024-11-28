@extends('layouts.app')

@section('content')
    @include('site.header')

    <!-- Banner Section -->
    <section class="banner">
        <img src="{{ asset('images/banner_secret.jpg') }}" alt="Banner Image" class="banner-image">
        <div class="banner-content">
            <h1>Bu Tostun Arkasında Özen Var</h1>
            <p>Sanayi tostlarımızı her lokmada güvenle tüketebilmeniz için, üretimden servise kadar en yüksek standartlarla çalışıyoruz. İşte lezzetimizin sırrı ve güvenilirliğimizin temelleri:</p>
        </div>
    </section>

     <!-- Image Grid -->
     <div class="image-grid">
            <!-- Image with Title and Description -->
            <div class="grid-item">
                <img src="{{ asset('images/image1.jpeg') }}" alt="Image 1" class="grid-image">
                <h3 class="image-title">Kaliteli Malzemeler</h3>
                <p class="image-description">Her tostumuzda kullandığımız malzemeler, güvenilir üreticilerden temin edilir ve en taze haliyle mutfağımıza girer. Doğallık ve kalite, her zaman önceliğimizdir.</p>
                {{-- <a href="#" class="info-button">Daha fazla bilgi</a> --}}
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/image2.jpg') }}" alt="Image 2" class="grid-image">
                <h3 class="image-title">Gıda Güvenliği Standartları</h3>
                <p class="image-description">Tüm üretim süreçlerimiz, uluslararası gıda güvenliği standartlarına uygun şekilde yürütülür. Çalışanlarımız düzenli hijyen eğitimlerinden geçer ve üretim alanlarımız sürekli denetim altındadır.</p>
                {{-- <a href="#" class="info-button">Daha fazla bilgi</a> --}}
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/image3.jpeg') }}" alt="Image 3" class="grid-image">
                <h3 class="image-title">Taze ve Günlük Üretim</h3>
                <p class="image-description">Tostlarımız için kullandığımız malzemeler her gün taze olarak hazırlanır. Üretimimizde dondurulmuş veya bayat ürünlere yer yoktur. Sizin için en iyisini sunmak bizim işimiz.</p>
                {{-- <a href="#" class="info-button">Daha fazla bilgi</a> --}}
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/image4.jpeg') }}" alt="Image 4" class="grid-image">
                <h3 class="image-title">El Emeği ve Ustalık</h3>
                <p class="image-description">Meşhur Sanayi Tostçusu’nda her tost, ustalarımızın tecrübesiyle hazırlanır. Ekmeklerimiz özenle kesilir, iç harçları bol malzeme ile doldurulur ve tam kıvamında pişirilir. Çünkü bizim için her tost, ayrı bir eserdir.</p>
                {{-- <a href="#" class="info-button">Daha fazla bilgi</a> --}}
            </div>

            <div class="grid-item">
                <img src="{{ asset('images/image1.jpeg') }}" alt="Image 1" class="grid-image">
                <h3 class="image-title">Gelenekten Geleceğe</h3>
                <p class="image-description">Markamız, yıllardır lezzetiyle anılan sanayi tostunu nostaljik ruhuyla bugüne taşır. Geleneksel lezzetleri modern bir dokunuşla harmanlayarak eşsiz bir deneyim sunuyoruz.</p>
                {{-- <a href="#" class="info-button">Daha fazla bilgi</a> --}}
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/image2.jpg') }}" alt="Image 2" class="grid-image">
                <h3 class="image-title">Müşteri Memnuniyeti</h3>
                <p class="image-description">Meşhur Sanayi Tostçusu’nda müşteri değil, misafirsiniz. Güler yüzlü hizmetimiz ve samimi yaklaşımımızla her zaman memnuniyetinizi sağlamak için buradayız.</p>
                {{-- <a href="#" class="info-button">Daha fazla bilgi</a> --}}
            </div>

            <div class="grid-item">
                <img src="{{ asset('images/image4.jpeg') }}" alt="Image 4" class="grid-image">
                <h3 class="image-title">Sosyal Sorumluluk</h3>
                <p class="image-description">Biz sadece tost yapmıyoruz; aynı zamanda topluma değer katıyoruz. Sosyal sorumluluk projelerimizle ihtiyaç sahiplerine destek oluyor, iyilik dolu bir geleceğe katkıda bulunuyoruz.</p>
                {{-- <a href="#" class="info-button">Daha fazla bilgi</a> --}}
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/image3.jpeg') }}" alt="Image 3" class="grid-image">
                <h3 class="image-title">Çevreye ve Sürdürülebilirliğe Duyarlılık</h3>
                <p class="image-description">Üretim sürecinde çevre dostu malzemeler ve sürdürülebilir kaynaklar kullanıyoruz. Geleceğe daha iyi bir dünya bırakmak için her adımda doğaya duyarlıyız.</p>
                {{-- <a href="#" class="info-button">Daha fazla bilgi</a> --}}
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

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .image-grid {
            grid-template-columns: 1fr; /* Single column on smaller screens */
        }

        .grid-image {
            width: 100%; /* Full width for smaller screens */
            height: auto; /* Maintain aspect ratio */
        }
    }
</style>
