@extends('layouts.app')

@section('content')
    @include('site.header')

    <section class="social-responsibility">
        <!-- Full-width banner -->
       
    <section class="video-banner">
        <!-- Full-width banner with play button, text, and banner image -->
        <div class="banner-container">
            <!-- Play button on the left -->
            {{-- <div class="banner-play-button">
                <button id="play-video-btn">
                    <i class="fa fa-play-circle"></i>
                </button>
            </div> --}}

            <!-- Banner image on the right -->
            <div class="banner-image-container">
                <img src="{{ asset('images/nature.png') }}" alt="Banner Image" class="banner-image">
            </div>

            <!-- Overlay text -->
           
        </div>
    </section>

    {{-- <!-- Video Modal -->
    <div id="video-modal" class="video-modal">
        <div class="modal-content">
            <video id="fullscreen-video" controls>
                <source src="{{ asset('images/Franchise.mp4') }}" type="video/mp4">
              
            </video>
        </div>
    </div> --}}
    <div class="intro-section">
        <h1 class="intro-title">Tosttan Fazlası: İyilikle Doyuyoruz</h1>
        <p class="intro-description">
            Meşhur Sanayi Tostçusu’nda her lokma sadece lezzet değil, iyiliğin bir dokunuşudur. Biz, tostlarımızı paylaşmayı seven, topluma değer katmayı hedefleyen bir markayız. İşte bu yüzden sadece karınları değil, hayatları doyurmak için de çalışıyoruz.
        </p>
    </div>
        <!-- Image Grid -->
        {{-- <div class="image-grid">
            <!-- Image with Title and Description -->
            <div class="grid-item">
                <img src="{{ asset('images/image1.jpeg') }}" alt="Image 1" class="grid-image">
               
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/image2.jpg') }}" alt="Image 2" class="grid-image">
                
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/image3.jpeg') }}" alt="Image 3" class="grid-image">
               
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/image4.jpeg') }}" alt="Image 4" class="grid-image">
               
            </div>
        </div> --}}
        <div class="spacer"></div>

        <div class="advantages-grid">
            <div class="advantage-card">
                {{-- <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        <path d="M9 12l2 2 4-4"></path>
                    </svg>
                </div> --}}
                <h3>Paylaşmanın Gücüne İnanıyoruz</h3>
                <p>Sanayi tostunun doğasında paylaşım var. Bu yüzden biz de lezzetimizi ve sevgimizi paylaşarak büyüyoruz. Satılan her tostumuzun bir parçasını, daha adil ve mutlu bir dünya için iyiliğe dönüştürüyoruz.</p>
            </div>
            <div class="advantage-card">
                {{-- <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                        <polyline points="17 6 23 6 23 12"></polyline>
                      </svg>                          
                </div> --}}
                <h3>Herkes İçin Gıda Erişimi</h3>
                <p>Gıda eşitliğini temel bir insan hakkı olarak görüyoruz. Dünyada gıdaya erişim hakkı için çalışan vakıflar ve sivil toplum kuruluşlarıyla iş birliği yaparak, daha fazla insanın temel besin ihtiyaçlarına ulaşmasını sağlamayı amaçlıyoruz. Satılan her tostumuz, bu hedefe bir adım daha yaklaşmamıza destek oluyor.</p>
            </div>
            <div class="advantage-card">
                {{-- <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="8.5" cy="7" r="4"></circle>
                        <path d="M20 8v6"></path>
                        <path d="M23 11h-6"></path>
                    </svg>
                </div> --}}
                <h3>Lezzetimizle İyiliğe Köprü Kuruyoruz</h3>
                <p>Her tost, sadece bir lezzet değil; umut, iyilik ve destek taşıyan bir bağdır. Yerel vakıflarla iş birliği yapıyor, gıda eşitliği için mücadele eden organizasyonlara katkıda bulunuyoruz. Tostlarımızla iyiliği sofralara taşıyoruz.</p>
            </div>
            <div class="advantage-card">
                {{-- <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                        <polyline points="17 2 12 7 7 2"></polyline>
                      </svg>                          
                </div> --}}
                <h3>Doğaya Saygılıyız</h3>
                <p>Biz sadece insanları değil, gezegenimizi de seviyoruz. Üretim süreçlerimizde doğa dostu malzemeler kullanıyor, çevreye duyarlı bir yaklaşım benimsiyoruz. Daha iyi bir dünya için hem sofralarda hem de doğada iz bırakıyoruz.</p>
            </div>
            <div class="advantage-card">
                {{-- <div class="card-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M2 7a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2z"></path>
                    <path d="M22 7a2 2 0 0 0-2-2h-6a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2z"></path>
                    </svg>                          
                </div> --}}
                <h3>Birlikte Daha Güçlüyüz</h3>
                <p>Tostlarımızı paylaşarak iyiliğin çoğalacağına inanıyoruz. Müşterilerimizle birlikte oluşturduğumuz bağ, sadece lezzeti değil, iyilik yapma gücümüzü de artırıyor. Sen de bir tostla bu iyiliğe ortak ol!</p>
            </div>
        </div>
        <div class="spacer"></div>

        <div class="intro-section2">
            <p class="intro-description2">
                Meşhur Sanayi Tostçusu olarak, sadece bir lezzet markası değil; iyiliği büyüten, paylaşmanın değerini bilen bir aileyiz. Sosyal sorumluluk projelerimizle her lokmamız, sadece doyurmakla kalmaz; paylaşmanın mutluluğunu büyütür. Gel, birlikte hem lezzeti hem de iyiliği paylaşalım.
            </p>
        </div>
    </section>

   
<!-- Footer Section -->
@include('site.footer')
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
        color: #691f06; /* Main color */
        background-color: #FFF4E6; /* Background color */
    }
    .spacer {
        height: 2vw; /* Add space between the banner and footer */
        background-color: #e8ad69; /* Match the background color of the page */
        border-radius: 10px;
        margin-bottom: 4rem;
        margin-top: 4rem;
    }
    /* Banner Container */
    .banner-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        height: 500px;
        background-color: #691f06;
        overflow: hidden;
        padding: 0; /* Remove padding */
    margin: 0; /* Remove margin */
    border-radius: 12px; /* Remove rounded corners */
    
        width: 100%; /* Ensure full width */
    }

    /* Play Button */
    .banner-play-button {
        position: absolute;
        left: 2%;
        z-index: 10;
    }

    .banner-play-button button {
        background: transparent;
        border: none;
        font-size: 4rem;
        color: #FFF;
        cursor: pointer;
    }

    .banner-play-button button:hover {
        color: #ffd700;
    }

    /* Banner Image */
    .banner-image-container {
        flex: 1;
        display: flex;
        justify-content: flex-end;
        
    }

    .banner-image {
        height: 600px;
        width: 1200px;
        background:transparent;
        object-fit: cover;
    }

    /* Overlay Text */
    .banner-text {
        position: absolute;
        left: 20%;
        top: 50%;
        transform: translateY(-50%);
        color: #FFF;
        text-align: left;
        max-width: 40%;
    }

    .banner-text h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
    }

    .banner-text p {
        font-size: 1.5rem;
        line-height: 1.6;
    }

    .advantages-grid {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: 2rem;
    }
    .advantage-card {
    background-color: var(--white);
    padding: 2.5rem;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease;
}

    .advantage-card:hover {
        transform: translateY(-10px);
    }
    
    .advantage-card h3 {
        font-size: 1.5rem;
        font-family: 'Fira Sans Bold', sans-serif;
        color: #691f06;
        margin-bottom: 4rem;
        margin: 1rem auto; /* Center the paragraph */
        max-width: 50vw; /* Limit the width of the paragraph */
    }

    .advantage-card p {
        font-size: 1.2rem;
        line-height: 1.6;
        color: #907847;
        margin-bottom: 3rem;
        margin: 1rem auto; /* Center the paragraph */
        max-width: 50vw; /* Limit the width of the paragraph */
    }
    .card-icon {
        width: 70px;
        height: 70px;
        background-color: var(--secondary-color);
        color: var(--white);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
    }

    .card-icon svg {
        width: 35px;
        height: 35px;
        stroke: var(--white);
    }


    /* Video Modal */
    .video-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 1000;
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        position: relative;
        width: 80%;
        max-width: 900px;
        background: #000;
        padding: 1rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    #fullscreen-video {
        width: 100%;
        height: auto;
    }

    .video-modal.show {
        display: flex;
    }

    .social-responsibility {
        background-color: #FFF4E6; /* Background color */
        padding: 4rem 2rem;
        text-align: center;
    }

    .social-container {
        max-width: 800px;
        margin: 0 auto;
        background-color: #FFF4E6;
        padding: 2rem;
    }

    .social-title {
        font-size: 2.5rem;
        font-family: 'Fira Sans', sans-serif;
        color: #691f06; /* Title color */
        margin-bottom: 1rem;
    }

    .social-text {
        font-size: 1.2rem;
        font-family: 'Fira Sans', sans-serif;
        line-height: 1.8;
        color: #333;
    }

    /* Image Grid */
    .image-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr); /* Two columns */
        gap: 30px;
        background: #FFF4E6;
        max-width: 1200px;
        margin: 2rem auto;
    }

    .grid-item {
        text-align: center;
        padding: 20px;
        background: #FFF4E6;
       
       
    }

    .grid-image {
        width: 600px;
        height: 600px;
        object-fit: cover;
        border-radius: 8px;
    }

    .image-title {
        font-size: 1.5rem;
        color: #691f06;
        margin: 10px 0 5px;
    }

    .image-description {
        font-size: 1rem;
        color: #555;
        line-height: 1.6;
    }

    .custom-footer {
        background-color: #691F06; /* Footer color */
        color: #FFF4E6; /* Footer text color */
        text-align: center;
        padding: 20px;
        font-size: 1rem;
        font-family: 'Fira Sans', sans-serif;
    }

    .custom-footer p {
        margin: 0;
    }


    .banner-play-button {
        position: relative;
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 10;
    }

    /* Play Button Styling */
    .banner-play-button button {
        background: transparent;
        border: none;
        font-size: 4rem;
        color: #FFF;
        cursor: pointer;
        position: relative;
        z-index: 2;
        animation: pulse 1.5s infinite ease-in-out;
    }

    .banner-play-button button:hover {
        color: #ffd700;
        transform: scale(1.1);
        transition: transform 0.2s ease-in-out;
    }

    /* Play Button Pulsing Animation */
    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.2);
        }
    }

    /* Circular Glow Effect */
    .banner-play-button button::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100px;
        height: 100px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        z-index: 1;
        animation: glow 1.5s infinite ease-in-out;
    }

    .intro-section {
    text-align: center;
    margin-bottom: 3rem;
}

.intro-section2 {
    text-align: center;
    margin-bottom: 3rem;
    margin-top: 3rem;
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
    font-size: 1.5rem;
    margin: 0 auto; /* Center the paragraph */
    max-width: 50vw; /* Limit the width of the paragraph */
}
.intro-title2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    margin-top: 4rem;
}

.intro-description2 {
    font-size: 1.2rem;
    line-height: 1.6;
    color: #907847;
    font-size: 1.5rem;
    margin: 0 auto; /* Center the paragraph */
    max-width: 50vw; /* Limit the width of the paragraph */
}
    @keyframes glow {
        0%, 100% {
            opacity: 0.6;
            transform: translate(-50%, -50%) scale(1);
        }
        50% {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1.3);
        }
    }

    @media (max-width: 768px) {
    body {
        overflow-x: hidden; /* Prevent horizontal scrolling */
        margin: 0;
        padding: 0;
    }

    .banner-play-button {
        top: 100%; /* Move the button further down */
         /* Add padding for spacing */
        transform: translateY(-10%); /* Center it relative to the new position */
        width: auto; /* Ensure proper size on mobile */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 10;
    }

    .banner-play-button button {
        font-size: 2.5rem; /* Keep the size appropriate for smaller screens */
    }

    .banner-play-button button::after {
        width: 70px; /* Keep the glow effect proportionate */
        height: 70px;
    }

    .banner-container {
        flex-direction: column; /* Stack elements vertically */
        height: auto; /* Adjust the overall height dynamically */
        padding: 20px; /* Add some padding for spacing */
    }

    .banner-image-container {
        width: 100%; /* Ensure the image scales properly */
        height: auto; /* Maintain aspect ratio */
    }

    .banner-image {
        width: 100%; /* Scale the image appropriately */
        height: auto; /* Ensure aspect ratio remains intact */
    }
    .image-grid {
        grid-template-columns: 1fr; /* Single column layout */
        gap: 20px; /* Adjust spacing between rows */
        padding: 0 10px; /* Add padding for alignment */
    }

    .grid-item {
        width: 100%; /* Full width for each card */
        margin: 0 auto; /* Center-align the card */
        height: auto; /* Adjust height dynamically */
        padding: 10px; /* Add padding for better spacing */
        background: #FFF4E6; /* Ensure background is consistent */
        border-radius: 8px; /* Maintain rounded corners */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    }

    .grid-image {
        width: 100%; /* Scale images to fit card */
        height: auto; /* Maintain aspect ratio */
        border-radius: 6px; /* Rounded corners for images */
    }

    .intro-section {
        padding: 10px; /* Add padding for mobile devices */
    }

    .intro-title {
        font-size: 1.8rem; /* Slightly smaller title size */
    }

    .intro-description {
        font-size: 1rem; /* Adjust font size for better readability */
        line-height: 1.5;
    }

    .banner-play-button button {
        font-size: 3rem; /* Adjust play button size */
    }

    .video-modal .modal-content {
        width: 90%; /* Make modal fit smaller screens */
    }
}
</style>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const playButton = document.getElementById('play-video-btn');
        const videoModal = document.getElementById('video-modal');
        const videoElement = document.getElementById('fullscreen-video');

        playButton.addEventListener('click', () => {
            videoModal.classList.add('show');
            videoElement.play();
        });

        videoModal.addEventListener('click', (event) => {
            if (event.target === videoModal) {
                videoModal.classList.remove('show');
                videoElement.pause();
            }
        });
    });
</script>