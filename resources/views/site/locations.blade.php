@extends('layouts.app')

@section('content')
@include('site.header')

<div id="map"></div>

@include('site.footer')
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
    #map {
        width: 100%;
        height: calc(100vh - 120px);
        z-index: 0;
        pointer-events: auto; /* Enable interaction */
    }

    .site-footer {
        position: relative;
        z-index: 1000;
    }
</style>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const map = L.map('map', {
            center: [38.4157341,27.0862886],
            zoom: 12,
            scrollWheelZoom: false
        });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        const locations = [
            { name: "Franchise 1", coords: [41.0082, 28.9784] },
            { name: "Franchise 2", coords: [39.9208, 32.8541] },
            { name: "Franchise 3", coords: [38.4192, 27.1287] },
            { name: "Franchise 4", coords: [37.0662, 37.3833] }
        ];

        locations.forEach(location => {
            L.marker(location.coords)
                .addTo(map)
                .bindPopup(`<b>${location.name}</b>`);
        });
    });
</script>   