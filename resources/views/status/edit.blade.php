@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-md-6">
                <h4>Edit Statu</h4>
              </div>
              <div class="col-md-6 text-right">
              <a href="{{ route('status.index') }}" class="btn btn-primary"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('status.update',$statu->id) }}">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$statu->name) }}" placeholder="Enter Your Name" />
                @error('name')
                  <small id="name" class="form-text text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="height_img">Description :</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description',$statu->description) }}" placeholder="Enter Your Description" />
                @error('description')
                  <small id="description" class="form-text text-danger">{{ $message }}</small>
                @enderror
              </div>
              <button type="submit" class="btn btn-success btn-block"><i class="fa fa-refresh" aria-hidden="true"></i> Update Status</button>
            </form>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection