<!-- resources/views/site/blog.blade.php -->
@extends('layouts.app')

@section('content')
    @include('site.header')

    <section class="blog-section">
        <h1 class="blog-title">Blog</h1>

        <div class="blog-container">
            <!-- Blog Post 1 -->
            <div class="blog-item">
                <img src="{{ asset('images/image1.jpeg') }}" alt="Blog 1" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-heading">Blog Başlığı 1</h2>
                    <p class="blog-summary">
                        Bu yazıda sürdürülebilirlik ve sosyal sorumluluk projeleri üzerine detaylı bilgiler bulabilirsiniz.
                    </p>
                    <a href="#" class="read-more">Devamını Oku</a>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div class="blog-item">
                <img src="{{ asset('images/image3.jpeg') }}" alt="Blog 2" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-heading">Blog Başlığı 2</h2>
                    <p class="blog-summary">
                        Eğitimde fırsat eşitliği sağlamak için neler yapabiliriz? Detaylı inceleme ve öneriler.
                    </p>
                    <a href="#" class="read-more">Devamını Oku</a>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class="blog-item">
                <img src="{{ asset('images/image5.jpg') }}" alt="Blog 3" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-heading">Blog Başlığı 3</h2>
                    <p class="blog-summary">
                        Toplumdaki ihtiyaç sahiplerine yönelik gıda yardımlarıyla ilgili başarı hikayeleri.
                    </p>
                    <a href="#" class="read-more">Devamını Oku</a>
                </div>
            </div>

            <!-- Blog Post 4 -->
            <div class="blog-item">
                <img src="{{ asset('images/image4.jpeg') }}" alt="Blog 4" class="blog-image">
                <div class="blog-content">
                    <h2 class="blog-heading">Blog Başlığı 4</h2>
                    <p class="blog-summary">
                        Çocukların hayatına dokunan projelerle ilgili son gelişmeler ve etkinlikler.
                    </p>
                    <a href="#" class="read-more">Devamını Oku</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="custom-footer">
        <p>© 2024 Meşhur Sanayi Tostçusu </p>
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
        

        
.spacer {
    height: 600px; /* Add space between the banner and footer */
    background-color: #FFF4E6; /* Match the background color of the page */
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

.blog-section {
    padding: 2rem 1rem;
    background-color: #FFF4E6;
    font-family: 'Fira Sans', sans-serif;
}

.blog-title {
    font-size: 2.5rem;
    color: #691f06;
    text-align: center;
    margin-top: 3rem; /* Add space above the title */
    margin-bottom: 2rem; /* Space below the title remains the same */
}

.blog-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

/* Blog Item */
.blog-item {
    display: flex;
    gap: 1.5rem;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    padding: 1rem;
    align-items: flex-start;
}

.blog-image {
    width: 300px;
    height:300px;
    border-radius: 10px;
    object-fit: cover;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.blog-content {
    flex: 1;
}

.blog-heading {
    font-size: 1.5rem;
    color: #691f06;
    margin-bottom: 0.5rem;
}

.blog-summary {
    font-size: 1rem;
    line-height: 1.5;
    color: #333;
    margin-bottom: 1rem;
}

.read-more {
    display: inline-block;
    font-size: 1rem;
    color: #FFF4E6;
    background-color: #691f06;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.read-more:hover {
    background-color: #D99B60;
}
        
</style>

