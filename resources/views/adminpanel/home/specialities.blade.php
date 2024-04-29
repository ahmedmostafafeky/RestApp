@extends('adminpanel.layouts.layout')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Update Specialities: </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('specialities.update', $id = $specialities->id)}}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{$specialities->title?? '' }}" placeholder="Title..">
                </div>
                <div class="form-group">
                    <label for="paragraph">Description</label>
                    <input type="text" name="paragraph" class="form-control" id="paragraph" value="{{$specialities->paragraph ?? '' }}" placeholder="Title..">
                </div>
                <div class="form-group">
                    <label for="photo">Update Photo:</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="photo" class="custom-file-input" value="{{$specialities->photo ?? '' }}" id="logo">
                            <label class="custom-file-label" for="photo">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Update</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
