@extends('adminpanel.layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Services Table: </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <td>Photo</td>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                    <tr>
                        <td>{{$service->title}}</td>
                        <td>{{$service->desc}}</td>
                        <td><img width="40px" alt="s" src="{{asset('storage/'.$service->photo)}}"></td>
                        <td>
                            <a href = '{{route("services.edit" , $services = $service->id)}}' class="btn btn-dark" >Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{route('services.destroy', $services = $service->id)}}">
                                @csrf
                                @method('delete')
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add New</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('services.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="" placeholder="Title..">
                </div>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <input type="text" name="desc" class="form-control" id="desc" value="" placeholder="Title..">
                </div>

                <div class="form-group">
                    <label for="photo">Upload Photo:</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="photo" class="custom-file-input" value="" id="logo">
                            <label class="custom-file-label" for="photo">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
@endsection
