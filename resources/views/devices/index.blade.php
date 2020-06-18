@extends('layouts.app')

@section('content')
  <div class="container">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
          <div class="alert alert-danger" role="alert">
            {{ $error }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endforeach
    @endif
    <!-- Start Create Status -->
    <div class="modal fade" id="createDevice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Device</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST" action="{{ route('device.store') }}">
            @csrf
            <div class="modal-body mb-3">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter Your Name" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="description">Description :</label>
                    <input type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="Enter Your Description" />

                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="serial">Serial :</label>
                    <input type="text" class="form-control" name="serial" value="{{ old('serial') }}" placeholder="Enter Your Serial" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="ip">IP :</label>
                    <input type="text" class="form-control" name="ip" value="{{ old('ip') }}" placeholder="Enter Your IP" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="map">Map :</label>
                <select class="form-control" name="map">
                  <option disabled selected>Choose Maps</option>
                  @foreach ($maps as $map)
                    <option value="{{$map->id }}" {{ old('map') == $map->id ?  "selected" : "" }} >{{ $map->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" id="form_device" class="btn btn-success">Save Status</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End Create Status -->


    <!-- Start Table Device -->
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col">
                <h4>Liste Devices</h4>
              </div>
              <div class="col text-right">
                <button class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#createDevice">Add Device</button>
              </div>
            </div>
          </div>
          <div class="card-body">
            <table id="table_devices" class="table table-striped table-bordered text-center">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Serial</th>
                  <th scope="col">IP</th>
                  <th scope="col">x</th>
                  <th scope="col">y</th>
                  <th scope="col">Map</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($devices as $device)
                <tr>
                    <td>{{ $device->id }}</td>
                    <td>{{ $device->name }}</td>
                    <td>{{ $device->description ? $device->description  : '--' }}</td>
                    <td>{{ $device->serial }}</td>
                    <td>{{ $device->ip }}</td>
                    <td>{{ $device->x }}</td>
                    <td>{{ $device->y }}</td>
                    <td>{{ $device->map->name }}</td>
                    <td style="display: flex">
                      <a href="{{ route('device.edit',$device->id) }}" class="btn btn-success btn-sm mr-3"> <i class="fa fa-refresh" aria-hidden="true"></i> Edit</a>
                      <form action="{{ route('device.destroy',$device->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Table Device -->

@endsection