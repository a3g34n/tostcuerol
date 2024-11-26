    <!-- resources/views/site/home.blade.php -->
    @extends('layouts.app')

    @section('content')
        @include('site.header')

       
        <!-- Values Section -->
   
        <section id="contact">
        <div class="contact-container">
            <h2>Contact Us</h2>
            <form >
                @csrf
                <div class="form-group">
                    <label for="name">Name Surname</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Send</button>
            </form>
        </div>
    </section>


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
        /* Full-width header styling */
        header {
            width: 100%;
            background-color: #D99B60;
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

  
        #contact {
        background-color: #FFF4E6;
        padding: 3rem 0; /* Increased padding */
        color: #691f06;
    }

    .contact-container {
        max-width: 800px; /* Increased the width */
        margin: 0 auto;
        text-align: center;
    }

    .contact-container h2 {
        margin-top: 2rem; /* Add more space above */
        margin-bottom: 2rem; /* Space below */
        font-size: 2rem; /* Larger font size */
        color: #691f06;
    }

    .form-group {
        margin-bottom: 2rem; /* Increased spacing between fields */
        text-align: left;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.8rem; /* Slightly more spacing for labels */
        font-size: 1.2rem; /* Larger font size for labels */
        color: #691f06;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 1.2rem; /* Increased padding for larger inputs */
        border: 1px solid #ccc;
        border-radius: 6px; /* Rounded corners */
        font-size: 1.1rem; /* Larger font size */
    }

    .form-group textarea {
        resize: vertical;
        height: 150px; /* Larger text area */
    }

    button {
        background-color: #691F06;
        color: #FFF;
        border: none;
        padding: 1rem 2rem; /* Increased padding for larger button */
        border-radius: 6px;
        font-size: 1.2rem; /* Larger font size */
        cursor: pointer;
    }

    button:hover {
        background-color: #8B2A12;
    }
</style>

    
    </script>

