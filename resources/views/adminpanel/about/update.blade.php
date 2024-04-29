@extends('adminpanel.layouts.layout')

@section('content')
    <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Update Stuff {{$stuff->name}}: </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('stuffs.update', $about = $stuff->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{$stuff->name?? '' }}" placeholder="Title..">
                        </div>
                        <div class="form-group">
                            <label for="job">Job Title</label>
                            <input type="text" name="job_title" class="form-control" id="job" value="{{$stuff->job_title ?? '' }}" placeholder="Title..">
                        </div>

                        <div class="form-group">
                            <label for="desc">Description</label>
                            <input type="text" name="description" class="form-control" id="desc" value="{{$stuff->description ?? '' }}" placeholder="Title..">
                        </div>
                        <div class="form-group">
                            <label for="photo">Update Photo:</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="photo" class="custom-file-input" value="{{$stuff->photo ?? '' }}" id="logo">
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
