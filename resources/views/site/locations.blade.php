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
            center: [38.370479,27.1888193],
            zoom: 13,
            scrollWheelZoom: false
        });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        const locations = [
            { name: "Franchise 1", coords: [38.370479,27.1888193] },
        ];

        locations.forEach(location => {
            L.marker(location.coords)
                .addTo(map)
                .bindPopup(`<b>${location.name}</b>`);
        });
    });
</script>   