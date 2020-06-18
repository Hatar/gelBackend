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
    <div class="modal fade" id="createStatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Status</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST" action="{{ route('status.store') }}">
            <div class="modal-body">
              @csrf
              <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter Your Name" />
              </div>
              <div class="form-group">
                <label for="height_img">Description :</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" placeholder="Enter Your Description" />
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Save Status</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End Create Status -->
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col">
                <h4>Liste Status</h4>
              </div>
              <div class="col text-right">
                <button class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#createStatus">Add Status</button>
              </div>
            </div>
          </div>
          <div class="card-body">
            <table id="table_status" class="table table-striped table-bordered text-center">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($status as $statu)
                  <tr>
                    <td>{{ $statu->id }}</td>
                    <td>{{ $statu->name }}</td>
                    <td>{{ $statu->description }}</td>
                    <td style="display: flex">
                      <a href="{{ route('status.edit',$statu->id) }}" class="btn btn-success mb-1 btn-sm"><i class="fa fa-refresh" aria-hidden="true"></i> Edit</a>
                      <form style="display:inline" action="{{ route('status.destroy',$statu->id) }}" method="post">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
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
@endsection