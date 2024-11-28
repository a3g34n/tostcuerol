@extends('layouts.app')

@section('content')
    @include('site.header')

    <main class="franchise-container">
     
    <section class="franchise-highlight">
    <div class="highlight-container">
        <div class="highlight-content">
            <h1 class="highlight-title">Lezzetin Gücünü Paylaşmaya Hazır Mısınız?</h1>
            <h2 class="highlight-brand">Meşhur Sanayi Tostçusu</h2>
            <p class="highlight-description">Meşhur Sanayi Tostçusu, yalnızca bir lezzet markası olmanın ötesinde, her lokmasıyla geçmişin sıcak anılarını bugüne taşıyan, samimiyetiyle insanları bir araya getiren ve büyüyen bir hikayedir. Biz, sadece tost yapmıyoruz; insanların hayatlarına anlam katıyor, nostaljiyi modern bir dokunuşla yeniden hayata geçiriyoruz. Her ekmek diliminde bol malzeme, her lokmada içten bir hikaye taşıyan tostlarımız, lezzetin ötesinde unutulmaz bir deneyim sunuyor.
            </p>
            <p class="highlight-description">
                Bugün Türkiye’nin dört bir yanında insanlar, Meşhur Sanayi Tostçusu’nu sadece doyurucu lezzetleri için değil, aynı zamanda sıcak atmosferi ve samimi hizmet anlayışı için tercih ediyor. Bu, yılların emeğiyle yoğrulmuş, müşterilerimizin sevgisiyle büyümüş bir başarı hikayesidir. Şimdi, bu hikayenin bir parçası olmanız için harika bir fırsat var.
            </p>
            <p class="highlight-description">
                Franchise modelimizle, bu eşsiz lezzeti ve nostaljik deneyimi kendi şehrinize taşıyabilir, Meşhur Sanayi Tostçusu’nun başarısını paylaşabilirsiniz. Kendi işinizin patronu olurken, Türkiye’nin en sevilen tost markalarından birinin desteğini arkanıza alabilirsiniz. İster yoğun iş merkezlerinde ister üniversite bölgelerinde, her yerde herkesin kalbinde ve damağında unutulmaz bir yer edinebilirsiniz.
            </p>
            <h3>
                Siz de bu güçlü markanın bir parçası olun, insanları lezzetle buluşturarak hem kendi başarı hikayenizi yazın hem de Türkiye’nin tost efsanesini birlikte büyütelim!
            </h3>
        </div>
        {{-- <div class="highlight-image">
            <video autoplay muted loop playsinline >
        <source src="{{ asset('images/Franchise.mp4') }}" type="video/mp4">
        
    </video>
        </div> --}}
    </div>
</section>
<div class="custom-carousel-container">
    <button class="custom-carousel-btn custom-left-btn"></button>
    <!-- Carousel Items with Text -->
    <div class="custom-carousel-images">
        <div class="custom-carousel-item">
            {{-- <div class="custom-carousel-text">
                <h3>Image 1 Title</h3>
                <p>Description for Image 1</p>
            </div> --}}
            <img src="{{ asset('images/1.png') }}" alt="Image 1">
        </div>
        <div class="custom-carousel-item">
            {{-- <div class="custom-carousel-text">
                <h3>Image 2 Title</h3>
                <p>Description for Image 2</p>
            </div> --}}
            <img src="{{ asset('images/2.png') }}" alt="Image 2">
        </div>
        <div class="custom-carousel-item">
            {{-- <div class="custom-carousel-text">
                <h3>Image 3 Title</h3>
                <p>Description for Image 3</p>
            </div> --}}
            <img src="{{ asset('images/3.png') }}" alt="Image 3">
        </div>
        <div class="custom-carousel-item">
            {{-- <div class="custom-carousel-text">
                <h3>Image 4 Title</h3>
                <p>Description for Image 4</p>
            </div> --}}
            <img src="{{ asset('images/4.png') }}" alt="Image 4">
        </div>
        <div class="custom-carousel-item">
            {{-- <div class="custom-carousel-text">
                <h3>Image 5 Title</h3>
                <p>Description for Image 5</p>
            </div> --}}
            <img src="{{ asset('images/5.png') }}" alt="Image 5">
        </div>
        <div class="custom-carousel-item">
            {{-- <div class="custom-carousel-text">
                <h3>Image 6 Title</h3>
                <p>Description for Image 6</p>
            </div> --}}
            <img src="{{ asset('images/6.png') }}" alt="Image 6">
        </div>
    </div>

    <!-- Navigation Buttons -->
    <button class="custom-carousel-btn custom-right-btn"></button>
    
    <!-- Indicator Circles -->
</div>

<div class="custom-carousel-indicators">
    <span class="custom-indicator active" data-index="0"></span>
    <span class="custom-indicator" data-index="1"></span>
    <span class="custom-indicator" data-index="2"></span>
    <span class="custom-indicator" data-index="3"></span>
    <span class="custom-indicator" data-index="4"></span>
    <span class="custom-indicator" data-index="5"></span>
</div>

        <section id="franchise-details" class="franchise-advantages">
            <h2>Meşhur Sanayi Tostçusu: Yatırımın En Lezzetli Hali</h2>
            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <path d="M9 12l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3>Güçlü ve Tanınan Bir Marka</h3>
                    <p>Meşhur Sanayi Tostçusu, geniş bir müşteri kitlesinin güvenini kazanmış, lezzetiyle tanınan ve sevilen bir marka. Güçlü marka bilinirliğimiz, yeni şubelerimizi daha hızlı bir başarıya ulaştırır.</p>
                </div>
                <div class="advantage-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <path d="M20 8v6"></path>
                            <path d="M23 11h-6"></path>
                        </svg>
                    </div>
                    <h3>Kanıtlanmış İş Modeli</h3>
                    <p>
                        Başarıyla test edilmiş ve kanıtlanmış iş modelimiz sayesinde riskler en aza indirgenir. Her detay düşünülmüş bir sistemle işinizi kolayca yönetebilirsiniz.</p>
                </div>
                <div class="advantage-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                            <polyline points="17 2 12 7 7 2"></polyline>
                          </svg>                          
                    </div>
                    <h3>Nostaljik Konsept, Modern Yönetim</h3>
                    <p>Retro atmosferimiz ve doyurucu ürünlerimiz, markamızı rakiplerinden ayırır. Geleneksel sanayi ruhunu modern bir işletme anlayışıyla birleştiriyoruz.</p>
                </div>
                <div class="advantage-card">
                    <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M2 7a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2z"></path>
                        <path d="M22 7a2 2 0 0 0-2-2h-6a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2z"></path>
                        </svg>                          
                    </div>
                    <h3>Eğitim ve Operasyonel Destek</h3>
                    <p>İşe başlamadan önce kapsamlı bir eğitim ve sonrasında sürekli operasyonel destek sağlıyoruz. Deneyimli ekibimizle, her aşamada yanınızdayız.</p>
                </div>
                <div class="advantage-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                            <polyline points="17 6 23 6 23 12"></polyline>
                          </svg>                          
                    </div>
                    <h3>Düşük Yatırım, Yüksek Karlılık</h3>
                    <p>Uygun yatırım maliyetlerimiz ve kısa sürede geri dönüş sağlayan iş modelimizle karlı bir franchise fırsatı sunuyoruz. Yüksek müşteri sadakatiyle kazancınızı artırabilirsiniz.</p>
                </div>
                <div class="advantage-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                          </svg>                          
                    </div>
                    <h3>Geniş Hedef Kitle</h3>
                    <p>Meşhur Sanayi Tostçusu, hem öğrenciler hem de aileler gibi farklı demografik gruplara hitap eder. Bu geniş müşteri profili, işletmenizin başarısını destekler.</p>
                </div>
                <div class="advantage-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="8" r="7"></circle>
                            <path d="M8.21 13.89l-1.66 7.01a.5.5 0 0 0 .73.54L12 18l4.72 3.44a.5.5 0 0 0 .73-.54l-1.66-7.01"></path>
                          </svg>
                    </div>
                    <h3> Güçlü Sadakat Programı</h3>
                    <p>WEB tabanlı uygulamamızla müşterilere puan kazandıran ve sadakati artıran programlar sunuyoruz. Bu teknoloji destekli sistem, müşteri bağlılığını güçlendirir ve tekrar satışları artırır.</p>
                </div>
                <div class="advantage-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                            <line x1="9" y1="9" x2="9.01" y2="9"></line>
                            <line x1="15" y1="9" x2="15.01" y2="9"></line>
                          </svg>                          
                    </div>
                    <h3>Sosyal Sorumluluk ile Güçlü İmaj</h3>
                    <p>Toplumsal sorumluluk projelerimizle sadece bir lezzet markası değil, aynı zamanda toplumda değer yaratan bir marka kimliği sunuyoruz. Bu da müşterilerin markamıza duyduğu güveni arttırır.</p>
                </div>
                <div class="advantage-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <circle cx="12" cy="12" r="6"></circle>
                            <circle cx="12" cy="12" r="2"></circle>
                          </svg>                          
                    </div>
                    <h3> Yerel ve Küresel Büyüme Fırsatı</h3>
                    <p>Meşhur Sanayi Tostçusu, yerel başarıyı küresel bir vizyona taşımayı hedefler. Franchise sahibi olarak hem bulunduğunuz bölgede hem de ulusal ağımızda büyüme fırsatını yakalarsınız.</p>
                </div>
            </div>
        </section>

        <section class="application-form">
            <h2>Başvurunuzu hemen yapın ve şehrinizin en sevilen tost noktası siz olun!</h2>

    <div class="form-container">
        <h2 class="form-title">Başvuru Formu</h2>
        <form action="/submit-form" method="POST" class="form">
            <div class="form-row">
                <input type="text" name="first_name" placeholder="Adınız*" required>
                <input type="text" name="last_name" placeholder="Soyadınız*" required>
            </div>
            <div class="form-row">
                <input type="email" name="email" placeholder="E-Posta Adresiniz*" required>
                <input type="tel" name="phone" placeholder="Telefon Numaranız*" required>
            </div>
            <div class="form-row">
                <select name="city" required>
                    <option value="" disabled selected>İl Seçiniz</option>
                    <option value="istanbul">İstanbul</option>
                    <option value="ankara">Ankara</option>
                    <option value="izmir">İzmir</option>
                </select>
                <select name="district" required>
                    <option value="" disabled selected>İlçe Seçiniz</option>
                    <option value="kadikoy">Kadıköy</option>
                    <option value="besiktas">Beşiktaş</option>
                    <option value="konak">Konak</option>
                </select>
            </div>
            <textarea name="message" placeholder="Mesajınız*" rows="5" required></textarea>
            <div class="form-row checkbox-group">
                <label>
                    <input type="checkbox" name="privacy" required>
                    <span>Aydınlatma metnini okudum, kabul ediyorum.</span>
                </label>
                <label>
                    <input type="checkbox" name="campaigns">
                    <span>Kampanyalar, haberler ve ürünler hakkında bilgi almak istiyorum.</span>
                </label>
            </div>
        
            <div class="form-row">
                <button type="submit" class="submit-button">Başvuru Yap</button>
            </div>
        </form>
    </div>
</section>




</main>

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
            color: #691f06; /* Ana renk */
            background-color: #FFF4E6; /* Set the entire body background color */
        }
        

       /* Variables */
:root {
    --primary-color: #691f06;
    --secondary-color: #D99B60;
    --background-color: #FFF4E6;
    --white: #ffffff;
}

.custom-carousel-container {
    position: relative;
    width: 100%; /* Adjust container width */
    margin: auto;
    padding: 20px 0;
    background-color: #FFF4E6; /* Updated background color */
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden; /* Prevents overflow */
}

.custom-carousel-images {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px; /* Consistent spacing */
}

.custom-carousel-item {
    display: flex; /* Aligns text and image side by side */
    align-items: flex-start; /* Align text and image at the top */
    gap: 20px; /* Space between the text and image */
    max-width: 1200px; /* Restrict the width for cleaner layout */
    width: 100%; /* Make the layout responsive */
    box-sizing: border-box; /* Include padding and border in width calculation */
}


.custom-carousel-item img {
    width: 600px; /* Restrict image width */
    height: 500px; /* Fixed height for consistency */
    object-fit: cover; /* Maintain aspect ratio */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4); /* Add depth to the image */
}
.custom-carousel-text {
   
    max-width: 50%; /* Limit the width of the text */
    text-align: left; /* Ensure left alignment of the text */
    margin: 0; /* Remove any existing margin */
    padding: 0; /* Remove any padding to align exactly with the image */
    display: flex; /* Use flexbox to align the content */
    flex-direction: column; /* Stack title and description vertically */
    justify-content: flex-start; /* Align text to the top */
    transform: translateX(-150px); /* Move the text 40px to the left */
}

.custom-carousel-text h3 {
    font-size: 2.8rem; /* Larger font for the title */
    font-weight: bold;
    margin: 0 0 1rem 0; /* Remove default margin except for the bottom */
    color: #691f06; /* Theme color */
}

.custom-carousel-text p {
    font-size: 1.6rem; /* Font size for description */
    line-height: 1.6; /* Line height for better readability */
    margin: 0 0 1.5rem 0; /* Remove extra margins except bottom */
    color: #691f06 !important;
}


.custom-carousel-btn {
    position: absolute;
    top: 50%;
    border: none; /* Remove any default border */
    transform: translateY(-50%);
    width: 50px; /* Adjust arrow width */
    height: 50px; /* Adjust arrow height */
    background-color: #A43E23; /* Arrow color */
    cursor: pointer;
    z-index: 10;
    clip-path: polygon(100% 50%, 0 100%, 0 0); /* Create the triangle shape */
    transition: transform 0.3s ease;
}

.custom-carousel-btn:hover {
    transform: translateY(-50%) scale(1.1); /* Slight zoom on hover */
}
.custom-left-btn {
    left: 60px; /* Position the left arrow outside the container */
    clip-path: polygon(0 50%, 100% 100%, 100% 0); /* Reverse triangle direction */
}


.custom-right-btn {
    right: 60px;
}

.custom-carousel-indicators {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}

.custom-indicator {
    width: 12px; /* Adjust circle size */
    height: 12px;
    border: 2px solid #691f06; /* Border color for the circle */
    border-radius: 50%; /* Make the shape circular */
    background-color: transparent; /* Transparent background by default */
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease; /* Add smooth transitions */
}
.custom-indicator.active {
    background-color: #691f06; /* Fill the active circle */
    transform: scale(1.2); /* Slightly enlarge the active indicator */
}

/* Franchise Container */
.franchise-container {
    max-width: 1400px;
    margin: 5rem auto;
    padding: 0 1rem;
}

/* Advantages Section */
.franchise-advantages {
    padding: 5rem 2rem;
    text-align: center;
}

.franchise-advantages h2 {
    font-size: 2.5rem;
    margin-bottom: 3rem;
    color: var(--primary-color);
}

.advantages-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
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

.advantage-card h3 {
    margin-bottom: 1rem;
    color: var(--primary-color);
}
.franchise-highlight {
    background-color: var(--background-color);
    padding: 5rem 2rem;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: left;
    gap: 2rem;
}

.highlight-container {
    max-width: 1400px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    text-align: center;
    gap: 3rem;
}
.highlight-container h3 {
    font-size: 1.5rem;
    font-family: 'Fira Sans Bold', sans-serif;
    color: #691f06;
    margin-bottom: 4rem;
    margin: 1rem auto; /* Center the paragraph */
    max-width: 50vw; /* Limit the width of the paragraph */
}

.highlight-content {
    flex: 1;
}

.highlight-title {
    color: var(--primary-color);
    font-family: 'Fira Sans', sans-serif;
    font-size: 2rem;
    margin-bottom: 1.5rem;
}

.highlight-brand {
    font-size: 3rem;
    font-family: 'Fira Sans', sans-serif;
    color: var(--primary-color);
    margin-bottom: 1.5rem;
}

.highlight-description,
.highlight-footer {
    font-size: 1.2rem;
    line-height: 1.6;
    color: #907847;
    margin-bottom: 3rem;
    margin: 1rem auto; /* Center the paragraph */
    max-width: 50vw; /* Limit the width of the paragraph */
}

.highlight-image {
    flex: 1;
    display: flex;
    justify-content: center;
}

.highlight-image video {
    width: 640px;
    height: 600x;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    object-fit: cover;
}

.application-form {
    background-color: var(--background-color);
    padding: 4rem 2rem;
}
.application-form h2 {
    text-align: center;
    font-size: 2.5rem;
    color: var(--primary-color);
    margin-bottom: 4rem;
}
.form-container {
    max-width: 800px;
    margin: 0 auto;
    background-color: var(--white);
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.form-title {
    text-align: center;
    font-size: 2rem;
    color: var(--primary-color);
    margin-bottom: 2rem;
}

.form {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.form-row {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    justify-content: center;
}

.form-row input,
.form-row select,
textarea {
    flex: 1;
    padding: 1rem;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1rem;
}

textarea {
    resize: none;
}

.checkbox-group {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.checkbox-group label {
    font-size: 0.9rem;
    color: #666;
}

.form-row button.submit-button {
    background-color: var(--primary-color);
    color: var(--white);
    border: none;
    padding: 1rem 2rem;
    font-size: 1rem;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.form-row button.submit-button:hover {
    background-color: var(--secondary-color);
}

.custom-footer {
    background-color: #691F06; /* Footer color matching the example */
    color: #FFF4E6; /* Text color for the footer */
    text-align: center;
    padding: 20px;
    font-size: 1rem;
    font-family: 'Fira Sans', sans-serif;
}

.custom-footer p {
    margin: 0; /* Remove default margin */
}


/* Responsive Design */
@media (max-width: 768px) {
    .form-row {
        flex-direction: column;
    }

    .form-row input,
    .form-row select,
    textarea {
        flex: 1 0 100%;
    }

    .franchise-container {
        padding: 0; /* Daha dar kenar boşlukları */
        width: 90%;
    }

    .franchise-highlight {
        padding: 0; /* Daha az yatay boşluk */
        text-align: center; /* Mobilde ortalı görünüm */
    }
    .highlight-container h3 {
        font-size: 1.2rem;
        font-family: 'Fira Sans Bold', sans-serif;
        color: #691f06;
        margin-bottom: 2rem;
        margin: 1rem auto; /* Center the paragraph */
        max-width: 90vw; /* Limit the width of the paragraph */
    }

    .highlight-title {
        font-size: 1.8rem; /* Daha küçük başlık boyutu */
        margin-bottom: 1rem;
    }

    .highlight-brand {
        font-size: 2rem; /* Daha küçük marka adı boyutu */
        margin-bottom: 1rem;
    }

    .highlight-description {
        font-size: 1rem; /* Daha küçük metin boyutu */
        line-height: 1.5; /* Satır aralıklarını daralt */
        margin: 1rem auto; /* Metni ortala */
        max-width: 90vw; /* Metin genişliğini sınırla */
    }

    .highlight-image video {
        width: 100%; /* Video genişliğini mobilde tamamen genişlet */
        height: auto; /* Oranı koru */
        margin-top: 2rem; /* Üstten boşluk */
    }

    .advantages-grid {
        grid-template-columns: 1fr; /* Tek sütun düzeni */
        gap: 1.5rem; /* Daha az boşluk */
    }

    .advantage-card {
        padding: 1.5rem; /* Kartların iç boşluklarını azalt */
    }

    .card-icon {
        width: 50px; /* Daha küçük ikon boyutu */
        height: 50px;
    }

    .card-icon svg {
        width: 25px; /* İkon boyutlarını küçült */
        height: 25px;
    }

    .advantage-card h3 {
        font-size: 1.2rem; /* Daha küçük başlık */
        margin-bottom: 0.5rem;
    }

    .advantage-card p {
        font-size: 0.9rem; /* Daha küçük metin boyutu */
        line-height: 1.4;
    }

    .application-form {
        padding: 3rem 1rem; /* Form çevresindeki boşluğu azalt */
    }

    .form-container {
        padding: 1.5rem; /* İçerik boşluğunu küçült */
    }

    .form-title {
        font-size: 1.8rem; /* Daha küçük form başlığı */
        margin-bottom: 1.5rem;
    }

    .form-row {
        flex-direction: column; /* Tüm form öğelerini dikey hizala */
    }

    .form-row input,
    .form-row select,
    textarea {
        font-size: 1rem; /* Yazı boyutunu küçült */
        padding: 0.8rem; /* Daha az iç boşluk */
    }

    .form-row button.submit-button {
        font-size: 1rem; /* Daha küçük düğme yazısı */
        padding: 0.8rem 1.5rem;
    }
}
/* Responsive Adjustments */
@media (max-width: 1024px) {
    .franchise-highlight {
        flex-direction: column;
        text-align: center;
    }

    .highlight-container {
        flex-direction: column;
        gap: 1.5rem;
    }

    .highlight-image {
        margin-top: 2rem;
    }
}
/* Responsive Adjustments */
@media (max-width: 1024px) {
    .advantages-grid {
        grid-template-columns: 1fr;
    }
}
</style>
    



<script>
    document.addEventListener("DOMContentLoaded", () => {
   const images = document.querySelectorAll(".custom-carousel-item");
   const indicators = document.querySelectorAll(".custom-indicator");
   const leftBtn = document.querySelector(".custom-left-btn");
   const rightBtn = document.querySelector(".custom-right-btn");
   let currentIndex = 0;

   // Update active item and indicator
   function updateCarousel() {
       images.forEach((item, index) => {
           item.style.display = index === currentIndex ? "flex" : "none";
       });
       indicators.forEach((ind, index) => {
           ind.classList.toggle("active", index === currentIndex);
       });
   }

   // Move to the next image
   function nextImage() {
       currentIndex = (currentIndex + 1) % images.length;
       updateCarousel();
   }

   // Move to the previous image
   function prevImage() {
       currentIndex = (currentIndex - 1 + images.length) % images.length;
       updateCarousel();
   }

   // Attach event listeners to buttons
   rightBtn.addEventListener("click", nextImage);
   leftBtn.addEventListener("click", prevImage);

   // Attach event listeners to indicators
   indicators.forEach((indicator, index) => {
       indicator.addEventListener("click", () => {
           currentIndex = index;
           updateCarousel();
       });
   });

   // Initialize the carousel
   updateCarousel();
})
           // Clone carousel-slide and append it for continuous looping
           document.addEventListener("DOMContentLoaded", function () {
               var copy = document.querySelector(".carousel-slide").cloneNode(true);
               
               document.querySelector(".carousel-images").appendChild(copy);
           });
   </script>


