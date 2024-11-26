    <!-- resources/views/site/home.blade.php -->
    @extends('layouts.app')

    @section('content')
        @include('site.header')

       
    <div id="map" style="height: 500px; width: 100%;"></div>

    <div class="spacer"></div>
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
        /* Full-width header styling */
        header {
            width: 100%;
            background-color: #D99B60;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 1.5rem 2rem;
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
        #map {
    height: 800px;
    width: 100%;
    margin: 2rem 0;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

</style>
<script>
    // Initialize the map
    function initMap() {
        const istanbulCenter = { lat: 41.0082, lng: 28.9784 }; // Istanbul center coordinates

        // Create the map
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 12,
            center: istanbulCenter,
        });

        // Array of locations for "Meşhur Sanayi Tostçusu"
        const locations = [
            { lat: 41.0151, lng: 28.9795 }, // Example coordinates
            { lat: 41.0286, lng: 28.9680 },
            { lat: 41.0045, lng: 28.9550 },
            // Add more locations as needed
        ];

        // Custom marker image
        const markerImage = "{{ asset('images/sanayi_tost_logo.png') }}";

        // Add markers to the map
        locations.forEach((location) => {
            new google.maps.Marker({
                position: location,
                map: map,
                icon: {
                    url: markerImage, // Path to your custom image
                    scaledSize: new google.maps.Size(50, 50), // Size of the marker
                },
            });
        });
    }
</script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
    async
    defer
></script>

