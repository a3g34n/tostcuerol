@extends('layouts.app')

@section('content')
    @include('site.header')

    <main class="franchise-container">
     
    <section class="franchise-highlight">
    <div class="highlight-container">
        <div class="highlight-content">
            <h1 class="highlight-title"> Gücünü Paylaşmaya Hazır Mısınız?</h1>
            <h2 class="highlight-brand">Meşhur Sanayi Tostçusu</h2>
            <p class="highlight-description">
                Devamındaki yazı: Meşhur Sanayi Tostçusu, yalnızca bir lezzet markası olmanın ötesinde, her lokmasıyla geçmişin sıcak anılarını bugüne taşıyan, samimiyetiyle insanları bir araya getiren ve büyüyen bir hikayedir. Biz, sadece tost yapmıyoruz; insanların hayatlarına anlam katıyor, nostaljiyi modern bir dokunuşla yeniden hayata geçiriyoruz. Her ekmek diliminde bol malzeme, her lokmada içten bir hikaye taşıyan tostlarımız, lezzetin ötesinde unutulmaz bir deneyim sunuyor.
            </p>
            <p class="highlight-description">
                Bugün Türkiye’nin dört bir yanında insanlar, Meşhur Sanayi Tostçusu’nu sadece doyurucu lezzetleri için değil, aynı zamanda sıcak atmosferi ve samimi hizmet anlayışı için tercih ediyor. Bu, yılların emeğiyle yoğrulmuş, müşterilerimizin sevgisiyle büyümüş bir başarı hikayesidir. Şimdi, bu hikayenin bir parçası olmanız için harika bir fırsat var.
            </p>
            <p class="highlight-description">
                Franchise modelimizle, bu eşsiz lezzeti ve nostaljik deneyimi kendi şehrinize taşıyabilir, Meşhur Sanayi Tostçusu’nun başarısını paylaşabilirsiniz. Kendi işinizin patronu olurken, Türkiye’nin en sevilen tost markalarından birinin desteğini arkanıza alabilirsiniz. İster yoğun iş merkezlerinde ister üniversite bölgelerinde, her yerde herkesin kalbinde ve damağında unutulmaz bir yer edinebilirsiniz.
            </p>
            <p class="highlight-description">
                Siz de bu güçlü markanın bir parçası olun, insanları lezzetle buluşturarak hem kendi başarı hikayenizi yazın hem de Türkiye’nin tost efsanesini birlikte büyütelim!
            </p>
        </div>
        <div class="highlight-image">
            <video autoplay muted loop playsinline >
        <source src="{{ asset('images/Franchise.mp4') }}" type="video/mp4">
        
    </video>
        </div>
    </div>
</section>

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
                    <p>Uygun yatırım maliyetlerimiz ve kısa sürede geri dönüş sağlayan iş modelimizle kârlı bir franchise fırsatı sunuyoruz. Yüksek müşteri sadakatiyle kazancınızı artırabilirsiniz.</p>
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
                    <p>Toplumsal sorumluluk projelerimizle sadece bir lezzet markası değil, aynı zamanda toplumda değer yaratan bir marka kimliği sunuyoruz. Bu da müşterilerinizin markanıza duyduğu güveni artırır.</p>
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
    gap: 3rem;
}

.highlight-content {
    flex: 1;
}

.highlight-title {
    color: var(--primary-color);
    font-size: 2rem;
    margin-bottom: 1.5rem;
}

.highlight-brand {
    font-size: 3rem;
    color: var(--primary-color);
    margin-bottom: 1.5rem;
}

.highlight-description,
.highlight-footer {
    color: #333;
    font-size: 1rem;
    line-height: 1.8;
    margin-bottom: 1rem;
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
    



