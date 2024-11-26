@extends('layouts.app')

@section('content')
@include('site.header')

<section class="nostalgic-page">
    <!-- Hero Section -->
    <div class="section hero">
        <div class="text-block">
            <h1>Geçmişe Yolculuk</h1>
            <p>Geçmişin büyüsü, modern tasarımla harmanlanarak bugüne ulaşıyor. Sizi nostaljik bir deneyime davet ediyoruz.</p>
            <a href="#" class="btn">Hikayemizi Keşfet</a>
        </div>
        <div class="image-block">
            <img src="{{ asset('images/retro-hero.jpg') }}" alt="Retro Görsel">
        </div>
    </div>

    <!-- Hikayemiz Section -->
    <div class="section story">
        <div class="image-block">
            <img src="{{ asset('images/old-toast-machine.jpg') }}" alt="Eski Tost Makinesi">
        </div>
        <div class="text-block">
            <h2>Hikayemiz</h2>
            <p>
                Eski sanayi mahallelerinin mütevazı tostçularından ilham alıyoruz. Her lokmada, geçmişin sıcaklığını bugüne taşıyan bir bağ kurmayı hedefliyoruz.
            </p>
        </div>
    </div>

    <!-- Misyonumuz Section -->
    <div class="section mission reverse">
        <div class="text-block">
            <h2>Misyonumuz</h2>
            <p>
                Her sofraya nostaljik lezzetlerimizi taşıyarak, misafirlerimize sıcak ve unutulmaz anılar sunmak.
            </p>
        </div>
        <div class="image-block">
            <img src="{{ asset('images/nostalgic-bottle.jpg') }}" alt="Nostaljik Gazoz Şişesi">
        </div>
    </div>

    <!-- Vizyonumuz Section -->
    <div class="section vision">
        <div class="image-block">
            <img src="{{ asset('images/retro-kitchen.jpg') }}" alt="Retro Mutfak">
        </div>
        <div class="text-block">
            <h2>Vizyonumuz</h2>
            <p>
                Geçmişin sıcaklığını bugüne taşıyarak, birlikteliğin ve paylaşmanın sembolü olmaya devam ediyoruz.
            </p>
        </div>
    </div>

    <!-- Galeri Section -->
    <div class="gallery-section">
        <h2>Nostaljik Anılar</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="{{ asset('images/vintage-clock.jpg') }}" alt="Retro Saat">
                <p>Retro Saat</p>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/retro-bottle.jpg') }}" alt="Retro Gazoz">
                <p>Retro Gazoz</p>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/classic-toaster.jpg') }}" alt="Klasik Tost Makinesi">
                <p>Klasik Tost Makinesi</p>
            </div>
        </div>
    </div>
</section>
@endsection

<style>
/* Genel Ayarlar */
body {
    font-family: 'Fira Sans', sans-serif;
    color: #691f06; /* Koyu kırmızı */
    margin: 0;
    padding: 0;
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
    background-color: #e36e52;
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
    max-width: 90%;
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
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.gallery-item img {
    width: 100%;
    border-radius: 8px;
    margin-bottom: 1rem;
    border: 3px solid #e36e52;
}

.gallery-item p {
    font-family: 'Fira Sans Bold', sans-serif;
    color: #907847;
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
