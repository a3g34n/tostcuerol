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
                    <p>Geçmişin dostluk dolu anılarını bugüne taşıyan, her lokmada samimiyet ve mutluluk sunan bir markayız.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-circle"></div>
                <div class="timeline-content">
                    <h3>Misyon</h3>
                    <p>Her dolu tostumuzla insanları yalnızca doyurmakla kalmıyor, onları birbirine bağlayan duygusal bir deneyim sunuyoruz.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-circle"></div>
                <div class="timeline-content">
                    <h3>Vizyon</h3>
                    <p>Geçmişin sıcaklığını bugünün sofralarına taşıyarak, paylaşmanın ve birlikte olmanın değerini hissettiren bir marka olmayı hedefliyoruz.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Galeri Section -->
    <div class="gallery-section">
        <h2>Meşhur Sanayi Tostçusu: Bir
            Parça Mutluluk, Bir Parça
            Geçmiş</h2>
        <h3 class="highlight-brand">Bazı tatlar yalnızca damakta değil, yürekte iz bırakır.
            Meşhur Sanayi Tostçusu, işte o izlerin peşinde; her tost
            bir anı, her lokma bir tebessüm.</h3>
        <p class="highlight-description">Hikayemiz, eski sanayi mahallelerinin mütevazı
            tostçularından ilham alıyor. Burası lezzetin dostlukla
            harmanlandığı, paylaşılan bir ekmek parçasının dost
            meclisinde anlam bulduğu bir yer. Bugün bu nostaljiyi
            günümüze taşıyarak misafirlerimizi sadece doyurmak
            değil geçmişin huzurunu ve birlikte olmanın
            mutluluğunu hissettirmek istiyoruz.
        </p>
        <h3 class="highlight-brand">Her geçen gün misafirlerimzi daha iyi tanıyor daha
            yakın hissediyoruz. </h3>
            <p class="highlight-description">Çünkü bu bağı güçlendiren şey
                tostlarımızın doyuruculuğu kadar onlara kattığımız
                sevgidir. Her yeni misafir, bizim bir parçamız olur.
            </p>
            <p class="highlight-description"> Bugün yakın olanları yarın daha da yakın görmek için
                her adımda biraz daha fazlasını veriyoruz. Burada her
                şey biraz daha samimi biraz daha bizden. Her tostta
                hissedilen belki de en değerli malzeme: Birilikte
                olmanın anlamı.
            </p>
            <p class="highlight-description"> Aynı zamanda sadece kendi soframızı değil dünyadaki
                tüm sofraları düşünerek hareket ediyoruz. Açlıkla
                mücadele edenlere destek olmayı insanlığın bir gereği
                olarak görüyoruz. Bu yüzden yerel ve küresel
                kuruluşlarla iş biriliği yaparak gıdanın herkesin hakkı
                olduğu bir gelecek için çalışıyoruz. 
            </p>
    </div>
</section>

<!-- Footer Section -->
@include('site.footer')
<button class="back-to-top" id="backToTop">
    ↑
</button>
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
/* Back to Top Button */
.back-to-top {
    position: fixed;
    bottom: 20px; /* Distance from the bottom */
    right: 20px; /* Distance from the right */
    background-color: #e8ad69; /* Button color */
    color: white; /* Text color */
    border: none;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    font-size: 1.5rem; /* Font size for the arrow */
    cursor: pointer;
    display: none; /* Hidden by default */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3); /* Optional shadow */
    z-index: 1000; /* Ensures it stays above other elements */
    transition: opacity 0.3s ease; /* Smooth fade-in/out */
}

.back-to-top:hover {
    background-color: #c45e2b; /* Darker color on hover */
    opacity: 0.9;
}

.nostalgic-page {
    max-width: 1200px;
    margin: 5rem auto;
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
    font-family: 'Fira Sans', sans-serif;
    color: #691f06;
    margin-bottom: 3rem;
}
.gallery-section h3 {
    font-size: 1.5rem;
    font-family: 'Fira Sans Bold', sans-serif;
    color: #691f06;
    margin-bottom: 4rem;
    margin: 1rem auto; /* Center the paragraph */
    max-width: 50vw; /* Limit the width of the paragraph */
}
.gallery-section p {
    font-size: 1.2rem;
    line-height: 1.6;
    color: #907847;
    margin-bottom: 3rem;
    margin: 1rem auto; /* Center the paragraph */
    max-width: 50vw; /* Limit the width of the paragraph */
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
    padding: 3rem 2rem;
    position: relative;
}

.timeline {
    display: grid; /* Use grid for alignment */
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* Responsive grid */
    gap: 4rem; /* Adjust spacing between items */
    position: relative;
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

.timeline::before {
    content: '';
    position: absolute;
    top: 55%;
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
    max-width: 22vw;
    color: #907847;
}

.timeline-content h3 {
    font-size: 1.8rem;
    margin-top: 0rem;
    margin-bottom: 0.8rem;
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


/* Mobil Uyumluluk */
@media (max-width: 768px) {
    .section {
        flex-direction: column;
    }
    

    .section.reverse {
        flex-direction: column;
    }

    .timeline {
        flex-direction: column; /* Change to vertical layout */
        align-items: center;
    }

    .timeline::before {
        display: none; /* Remove the vertical line for mobile */
    }

    .timeline-item {
        flex-direction: row; /* Align circle and content horizontally */
        align-items: center;
        justify-content: flex-start;
        width: 90%; /* Ensure items fit within mobile width */
        margin-bottom: 2rem;
    }
    .timeline-circle {
        width: 20px !important; /* Force width */
        height: 20px !important; /* Force height */
        min-width: 20px; /* Prevent shrinking */
        min-height: 20px; /* Prevent shrinking */
        margin-right: 1rem; /* Adjust margin for alignment */
        margin-bottom: 0; /* Remove bottom margin for row layout */
    }

    .timeline-content {
        max-width: 100%; /* Allow content to stretch */
        text-align: left;
    }

    .timeline-content h3 {
        font-size: 1.5rem; /* Adjust heading size */
    }

    .timeline-content p {
        font-size: 0.9rem; /* Adjust paragraph size */
    }
    .gallery-section h3 {
        font-size: 1.2rem;
        max-width: 80vw;
    }
    .gallery-section h2 {
        font-size: 2rem;
        max-width: 90vw;
    }
    .gallery-section p {
        font-size: 0.9rem;
        max-width: 80vw;
    }
}
</style>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const backToTopButton = document.getElementById("backToTop");

    // Show/Hide button on scroll
    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            backToTopButton.style.display = "block";
        } else {
            backToTopButton.style.display = "none";
        }
    });

    // Scroll to top when button is clicked
    backToTopButton.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth", // Smooth scrolling
        });
    });
});
</script>