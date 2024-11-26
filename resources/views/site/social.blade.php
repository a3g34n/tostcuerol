    <!-- resources/views/site/social.blade.php -->
@extends('layouts.app')

@section('content')
    @include('site.header')

    <section class="social-responsibility">
        <div class="social-container">
            <h1 class="social-title">Sosyal Sorumluluk</h1>
            <p class="social-text">
                “Her tost bir çocuğun yüzünde gülümsemeye dönüşüyor. Bu mutluluğun bir parçası olduğun için teşekkür ederiz!”
            </p>
        </div>
    </section>

    <div class="spacer"></div>

    <footer class="custom-footer">
        <p>© 2024 Meşhur Sanayi Tostçusu - Sosyal Sorumluluk</p>
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
       
        .social-responsibility {
    background-color: #FFF4E6; /* Arka plan rengi */
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
    color: #691f06; /* Ana başlık rengi */
    margin-bottom: 1rem;
}

.social-text {
    font-size: 1.2rem;
    font-family: 'Fira Sans', sans-serif;
    line-height: 1.8;
    color: #333;
}


        
.spacer {
    height: 600px; /* Add space between the banner and footer */
    background-color: #FFF4E6; /* Match the background color of the page */
}


        .navbar {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
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
        
</style>

