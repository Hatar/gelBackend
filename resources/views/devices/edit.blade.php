@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-md-6">
                <h4>Edit Device</h4>
              </div>
              <div class="col-md-6 text-right">
              <a href="{{ route('device.index') }}" class="btn btn-primary"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
              </div>
            </div>
          </div>
          <div class="card-body">
              <form method="POST" action="{{ route('device.update',$device->id) }}">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$device->name) }}" placeholder="Enter Your Name" />
                @error('name')
                <small id="name" class="form-text text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="serial">Serial :</label>
                <input type="text" class="form-control" id="serial" name="serial" value="{{ old('serial',$device->serial) }}" placeholder="Enter Your Serial" />
                @error('serial')
                <small id="serial" class="form-text text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="ip">IP :</label>
                <input type="text" class="form-control" id="ip" name="ip" value="{{ old('ip',$device->serial) }}" placeholder="Enter Your IP" />
                @error('ip')
                <small id="ip" class="form-text text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="map">Map :</label>
                <select class="form-control" name="map">
                  @foreach ($maps as $map)
                    <option value="{{ $map->id }}" {{ old("map",$map->id == $device->map_id  ? 'selected': '') }}>{{ $map->name }}</option>
                  @endforeach
                </select>
              </div>
              <button type="submit" class="btn btn-success btn-block">Update Device</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection