@extends('layouts.app')

@section('content')
  <div class="container">
    @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div class="alert alert-danger" role="alert">
           {{$error}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
     @endforeach
    @endif
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col">
                <h4>Liste Maps</h4>
              </div>
              <div class="col text-right">
                <button class="btn btn-success btn-sm mb-3" data-toggle="modal" data-target="#create_map"><i class="fa fa-plus" aria-hidden="true"></i> Create Map</button>
              </div>
            </div>
          </div>
          <div class="card-body">
            <table id="retrieve_maps" class="table table-striped table-bordered text-center">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Path</th>
                  <th>Width</th>
                  <th>Height</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($maps as $map)
                <tr>
                  <td>{{ $map->id }}</td>
                  <td>{{ $map->name }}</td>
                  <td><img src="{{ asset('image/'. $map->path)  }}" style="width: 90px; height: 90px;"  alt="{{ $map->path }}"></td>
                  <td>{{ $map->width }}</td>
                  <td>{{ $map->height }}</td>
                  <td style="display: flex;justify-content:space-around">
                    <a href="{{ route('map.edit',$map->id) }}" class="btn btn-success"><i class="fa fa-refresh" aria-hidden="true"></i> Edit</a>
                    <form action="{{ route('map.destroy',$map->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                        <button class="btn btn-danger data-id={{$map->id}}><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                    </form>
                    <a href="{{ route('map.show',$map->id) }}" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> show Map</a>
                    <a href="{{ route('map.config',$map->id) }}" class="btn btn-dark">Mode Config</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table><!-- End Table Map -->
          </div>
        </div>
      </div>
    </div>

    <!-- Start Create Status -->
    <div class="modal fade" id="create_map" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form method="POST" id="form_map" action="{{ route('map.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Create MAP</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <ul class="list-unstyled" id="error"></ul>
              <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter Your Name" />

              </div>
              <div class="form-group">
                <label for="path">Path :</label>
                <input type="file" class="form-control" id="path" name="path" />
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" id="form_device" class="btn btn-success">Save MAP</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End Create Status -->
  </div>
@endsection