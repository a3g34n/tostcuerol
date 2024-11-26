@extends('layouts.app')

@section('content')
@include('site.header')

<section class="nostalgic-page">

    <!-- Title and Description -->
    <div class="intro-section">
        <h1 class="intro-title">Bizim Yolculuğumuz</h1>
        <p class="intro-description">
            Geçmişten günümüze, geleneklerimizi koruyarak geleceğe taşıdığımız bir hikaye.
        </p>
    </div>

    <!-- Full-Width Timeline -->
    <div class="timeline-container">
        <div class="timeline">
            <!-- Timeline Items -->
            <div class="timeline-item">
                <div class="timeline-circle"></div>
                <div class="timeline-content">
                    <h3>Hikayemiz</h3>
                    <p>1950'lerde başlayan eşsiz bir yolculuk.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-circle"></div>
                <div class="timeline-content">
                    <h3>Misyon</h3>
                    <p>Lezzetlerimizi herkesle paylaşmak.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-circle"></div>
                <div class="timeline-content">
                    <h3>Vizyon</h3>
                    <p>Geleneksel tatlarımızı dünyaya tanıtmak.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Galeri Section -->
    <div class="gallery-section">
        <h2>Nostaljik Anılar</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="{{ asset('images/image1.jpeg') }}" alt="Retro Saat">
                <p>Retro Saat</p>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/image2.jpg') }}" alt="Retro Gazoz">
                <p>Retro Gazoz</p>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/image3.jpeg') }}" alt="Klasik Tost Makinesi">
                <p>Klasik Tost Makinesi</p>
            </div>
        </div>
    </div>
</section>
@endsection

<style>
 * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Fira Sans', sans-serif;
            color: #691f06; /* Ana renk */
            background-color: #FFF4E6; /* Set the entire body background color */
        }

.nostalgic-page {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
}

/* Hero Section */
.hero {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 4rem;
}

.text-block {
    flex: 1;
    padding: 1rem;
}

.text-block h1 {
    font-size: 3rem;
    font-family: 'Fira Sans Heavy', sans-serif;
    margin-bottom: 1rem;
    color: #691f06;
}

.text-block p {
    font-size: 1.2rem;
    line-height: 1.8;
    color: #907847; /* Zeytin yeşili */
    margin-bottom: 1.5rem;
}

.text-block .btn {
    padding: 0.8rem 1.5rem;
    border-radius: 4px;
    background-color: #691f06;
    color: #fff4e6;
    font-family: 'Fira Sans Bold', sans-serif;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.text-block .btn:hover {
    background-color: #c45e2b;
}

.image-block {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.image-block img {
    width: 800px;
    height: 600px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}


/* Galeri */
.gallery-section {
    text-align: center;
    margin-top: 4rem;
}

.gallery-section h2 {
    font-size: 2.5rem;
    font-family: 'Fira Sans Heavy', sans-serif;
    color: #691f06;
    margin-bottom: 2rem;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Proper responsive grid */
    gap: 6rem; /* Add spacing between grid items */
    justify-items: center; /* Center items horizontally */
    align-items: start; /* Align items to the top */
}

.gallery-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.gallery-item img {
    width: 400px; /* Ensure the image fits within the container */
     /* Limit the image width */
    height: 400px; /* Maintain aspect ratio */
    border-radius: 8px;
    margin-bottom: 1rem;
    border: 3px solid #691f06;
}

.gallery-item p {
    font-family: 'Fira Sans Bold', sans-serif;
    color: #907847;
    font-size: 1rem;
    margin-top: 0.5rem;
}
/* Intro Section */
.intro-section {
    text-align: center;
    margin-bottom: 3rem;
}

.intro-title {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    margin-top: 4rem;
}

.intro-description {
    font-size: 1.2rem;
    line-height: 1.6;
    color: #907847;
}

/* Timeline Section */
.timeline-container {
    width: 100%;
    overflow-x: hidden;
    padding: 2rem 1rem;
    position: relative;
}

.timeline {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

.timeline::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 4px;
    background-color: #691F06;
    z-index: 0;
}

.timeline-item {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    z-index: 1;
}

.timeline-circle {
    width: 60px;
    height: 60px;
    background-color: #691F06;
    border-radius: 50%;
    margin-bottom: 1rem;
}

.timeline-content {
    max-width: 200px;
    
    color: #907847;
}

.timeline-content h3 {
    font-size: 1.8rem;
    margin-top: 1rem;
    margin-bottom: 0.5rem;
    font-weight: bold;
    color: #691F06;
}

.timeline-content p {
    font-size: 1.0rem;
    line-height: 1.4;
}

/* Specific Adjustment for Middle Item */
.timeline-item.middle {
    flex-direction: column-reverse;
}

.timeline-item.middle .timeline-content {
    margin-top: 1rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .timeline {
        flex-direction: column;
        gap: 3rem;
    }

    .timeline::before {
        top: 0;
        left: 50%;
        height: 100%;
        width: 4px;
        transform: translateX(-50%);
    }

    .timeline-item {
        flex-direction: row;
        justify-content: center;
    }

    .timeline-circle {
        margin-right: 1rem;
        margin-bottom: 0;
    }
}
/* Mobil Uyumluluk */
@media (max-width: 768px) {
    .section {
        flex-direction: column;
    }

    .section.reverse {
        flex-direction: column;
    }
}
</style>
