@extends('layouts.app')

@section('content')
  <div id="map"></div>
  <div class="container">
      <div class="card text-dark mt-5">
        <div class="card-header">Set Latitude & Longitude</div>
        <div class="card-body">
          <form action="{{ route('device.save_position',Request::segment(4)) }}" method="post" class="pt-3">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="Latitude">Latitude :</label>
                  <input type="text" name="Latitude" id="Latitude" class="form-control" placeholder="Latitude">
                  <input type="hidden" name="id" id="id" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="Longitude">Longitude :</label>
                  <input type="text" name="Longitude" id="Longitude" class="form-control" placeholder="Longitude">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <button type="submit" class="btn btn-success btn-block" style="margin-top: 30px"><i class="fa fa-plus" aria-hidden="true"></i> Save Position</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
  </div>
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
        path ={!! json_encode($path) !!};

    var map =L.map('map').setView([-10.53, 6.85], 5);

    //Create Custom Image
    L.tileLayer(`{{  asset('image/${path}') }}`,{maxZoom:10,}).addTo(map);

    //Custome Icone
    var FirstIcon = L.icon({
      iconUrl: '{{ asset('images/corona.png') }}',
      iconSize:     [80, 80], // size of the icon
      popupAnchor:  [-1, -30] // point from which the popup should open relative to the iconAnchor
    });

    devices.map(device =>{
      //console.log(device)
     //Create Custom Image
     var marker = L.marker([device.x,device.y],{draggable: true,icon:FirstIcon}).addTo(map).bindPopup(`
            <p style="color:red">${device.name}</p>
            Your Location is (latitude : ${device.x} , longitude: ${device.y})
          `);
      marker.on('dragend',function(e){
        updateLatLng(marker.getLatLng().lat, marker.getLatLng().lng);
      })
      map.on('click',function(e){
        console.log(marker.setLatLng(e.latlng))
        marker.setLatLng(e.latlng);
        updateLatLng(marker.getLatLng().lat, marker.getLatLng().lng);
        L.marker([marker.getLatLng().lat, marker.getLatLng().lng]).addTo(map).bindPopup(`
            <p style="color:red">${device.name }</p>
            Your Location is (latitude : ${marker.getLatLng().lat} , longitude: ${marker.getLatLng().lng})
          `);
      });
      function updateLatLng(lat,lng,reverse){
        if(reverse){
          marker.setLatLng([lat,lng]);
          map.panTo([lat,lng]);
        }else {
          document.getElementById('id').value = device.id;
          document.getElementById('Latitude').value = marker.getLatLng().lat;
          document.getElementById('Longitude').value = marker.getLatLng().lng;
          map.panTo([lat,lng]);
        }
      }
    })
</script>
@endpush
