@extends('layouts.app')

@section('content')
  @if ($devices)
    <div  id="map"></div>
    @endif
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
@endsection

@push('scripts')
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="{{ asset('js/leaflet.js') }}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
    var devices = {!! json_encode($devices ) !!},
        path ={!! json_encode($path) !!}
    var map =L.map('map').setView([-10.53, 6.85], 5);
    //Create Custom Image
    L.tileLayer(`{{  asset('image/${path}') }}`,{
    maxZoom:10,
    }).addTo(map);

    //Custome Icone
    var FirstIcon = L.icon({
      iconUrl: '{{ asset('images/corona.png') }}',
      iconSize:     [80, 80], // size of the icon
      popupAnchor:  [-1, -30] // point from which the popup should open relative to the iconAnchor
    });

    devices.map(device =>{
     return  L.marker([device.x,device.y],{icon:FirstIcon}).addTo(map)
        .bindPopup(`
            <p style="color:red">${device.name}</p>
            Your Location is (latitude : ${device.x} , longitude: ${device.y})
          `);
    })

</script>
@endpush
