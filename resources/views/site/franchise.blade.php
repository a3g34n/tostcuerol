@extends('layouts.app')

@section('content')
    @include('site.header')

    <main class="franchise-container">
     
    <section class="franchise-highlight">
    <div class="highlight-container">
        <div class="highlight-content">
            <h1 class="highlight-title"> Güvenli Kazancın Adresi:</h1>
            <h2 class="highlight-brand">Meşhur Sanayi Tostçusu</h2>
            <p class="highlight-description">
               Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, quo aperiam deserunt repellat asperiores tempora quaerat, quis in omnis aut itaque, illo blanditiis totam nam reprehenderit corrupti dignissimos officia optio!
            </p>
            <p class="highlight-footer">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic doloribus autem distinctio quo, quos sunt! Fugiat, totam hic. Tenetur ad nihil sed nesciunt dolore quidem vitae pariatur quaerat cum possimus eaque ab modi dicta cumque, facere eligendi vero. Laborum velit reiciendis accusantium quam, odit minima harum eius. In, accusamus voluptates.
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
            <h2>Why Choose Our Franchise?</h2>
            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <path d="M9 12l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3>Proven Business Model</h3>
                    <p>Leverage our time-tested strategies and comprehensive operational support.</p>
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
                    <h3>Comprehensive Training</h3>
                    <p>Receive in-depth training and ongoing support to ensure your success.</p>
                </div>
                <div class="advantage-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <h3>Brand Recognition</h3>
                    <p>Benefit from our strong market presence and established customer loyalty.</p>
                </div>
            </div>
        </section>

        <section class="application-form">
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
<footer class="custom-footer">
    <p>&copy; 2024 Sanayi Tostçusu. Tüm Hakları Saklıdır.</p>
</footer>
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

/* Header */
header {
    width: 100%;
    background-color: var(--secondary-color);
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

/* Franchise Container */
.franchise-container {
    max-width: 1400px;
    margin: 0 auto;
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
    



