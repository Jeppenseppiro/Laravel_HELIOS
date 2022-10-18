@extends('app')

@section('title', 'Map')

@section('head')
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
    integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-draw@1.0.4/dist/leaflet.draw.css" />
  <link rel="stylesheet" href="{{ asset('css/Control.FullScreen.css') }}" />
  <style>
    #map {
      height: 820px;
    }
  </style>
@endsection

@section('content')
  <div class="grid grid-cols-12">
    {{-- <div class="col-span-12 md:col-span-1">
      <div class="flex flex-col space-y-1 pr-0 md:pr-2">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ">+ New Object</button>
      </div>
    </div> --}}

    {{-- Leaflet.js Map Container --}}
    <div class="col-span-12 md:col-span-12">
      <div class="border-4 border-indigo-500/50 z-0" id="map"></div>

      <div class="flex items-center justify-between">
        <div class="pl-3 pt-2 flex space-x-3 font-bold text-xl"></div>
        <div class="pr-3 pt-2" id="map_coordinates"></div>
      </div>
    </div>
  </div>


@endsection

@section('script')
  <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
    integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"
    integrity="sha512-ozq8xQKq6urvuU6jNgkfqAmT7jKN2XumbrX1JiB3TnF7tI48DPI4Gy1GXKD/V3EExgAs1V+pRO7vwtS1LHg0Gw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript" src="{{ asset('js/Control.FullScreen.js') }}"></script>
  <script>
    // adding OpenStreetMap tilelayer
    let baseOpenStreetMap = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    });

    //adding Carto tilelayer
    let baseCarto = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
      maxZoom: 19,
      subdomains: 'abcd',
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
    });

    //adding Thunderforest tilelayer
    let baseOpenTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
      maxZoom: 17,
      attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
    });

    // map class initialization
    let map = L.map('map', {
      layers: [baseOpenStreetMap],
      center: new L.LatLng(11.0409, 124.6035),
      zoom: 13,
      fullscreenControl: true,
      fullscreenControlOptions: { // optional
        title: "Enter Full Screen",
        titleCancel: "Exit Full Screen"
      }
    });
    // .setView([11.0409, 124.6035], 13);


    let baseMaps = {
      "OpenStreetMap": baseOpenStreetMap,
      "Carto": baseCarto,
      "OpenTopoMap": baseOpenTopoMap,
    };

    // layer control
    let layerControl = L.control.layers(baseMaps).addTo(map);

    // add Leaflet Draw to FeatureGroup
    let drawnItems = new L.FeatureGroup();
    map.addLayer(drawnItems);
    let drawControl = new L.Control.Draw({
      position: 'topleft',
      draw: {
        polyline: true,
        polygon: true,
        circle: true,
        marker: true
      },
      edit: {
        featureGroup: drawnItems
      }
    });
    map.addControl(drawControl);

    map.on(L.Draw.Event.CREATED, function(e) {
      var type = e.layerType,
        layer = e.layer;

      if (type === 'marker') {
        layer.bindPopup('A popup!');
      }

      drawnItems.addLayer(layer);
    });

    //add map scale
    L.control.scale().addTo(map);

    // detect fullscreen toggling
    map.on('enterFullscreen', function() {
      if (window.console) window.console.log('enterFullscreen');
    });
    map.on('exitFullscreen', function() {
      if (window.console) window.console.log('exitFullscreen');
    });

    //mouseover coordinates
    map.on('mousemove', function(e) {
      console.log(e);
      let mapCoordinates = document.getElementById('map_coordinates');
      mapCoordinates.innerHTML = `Latitude: <b>${e.latlng.lat}</b> | Longitude: <b>${e.latlng.lng}</b>`;
    });
  </script>
@endsection
