@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-md-6">
                <h4>Edit Map</h4>
              </div>
              <div class="col-md-6 text-right">
              <a href="{{ route('retrievemaps') }}" class="btn btn-primary"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
              </div>
            </div>
          </div>
          <div class="card-body">
              <form method="POST" action="{{ route('map.update',['map'=>$map->id]) }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$map->name) }}" placeholder="Enter Your Name" />
                @error('name')
                <small id="name" class="form-text text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="path">Path :</label>
                <input type="file" class="form-control" id="path" name="path" />

                <img src="{{asset('image/') .'/'. $map->path}}" style="width:400px;height:auto;border:1px solid #DDD" class="img-responsive mt-3" alt="">
                @error('path')
                <small id="path" class="form-text text-danger">{{ $message }}</small>
                @enderror
              </div>
              <button type="submit" class="btn btn-success btn-block">Update Map</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection