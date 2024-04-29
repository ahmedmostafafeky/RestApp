
@extends('adminpanel.layouts.layout')

@section('content')


                <div class="card card-primary mt-3">
                <div class="card-header">
                    <h3 class="card-title">Update About: </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('about.update', $id = 1)}}" >
                    @csrf
                    @method('patch')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title" value="{{$about->title }}" placeholder="Title..">
                        </div>
                        <div class="form-group">
                            <label for="paragraph">Description</label>
                            <input type="text" name="paragraph" class="form-control" id="paragraph" value="{{$about->paragraph}}" placeholder="Title..">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

                <div class="card mt-3">
                <div class="card-header">
                    <h3 class="card-title">Stuff Table: </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Job</th>
                            <th>Category</th>
                            <td>Photo</td>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($stuffs as $stuff)
                            <tr>
                                <td>{{$stuff->id}}</td>
                                <td>{{$stuff->name}}</td>
                                <td>{{$stuff->job_title}}</td>
                                <td>{{$stuff->category}}</td>
                                <td><img width="40px" alt="s" src="{{asset('storage/'.$stuff->photo)}}"></td>
                                <td>
                                    <a href = '{{route("stuffs.edit" , $about = $stuff->id )}}' class="btn btn-dark" >Edit</a>
                                </td>
                                <td>
                                    <form method="post" action="{{route('stuffs.destroy', $about = $stuff->id)}}">
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

                <div class="card card-primary mt-3">
                <div class="card-header">
                    <h3 class="card-title">Add New</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('stuffs.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="" placeholder="Title..">
                        </div>
                        <div class="form-group">
                            <label for="job">Job Title</label>
                            <input type="text" name="job_title" class="form-control" id="job" value="" placeholder="Title..">
                        </div>

                        <div class="form-group">
                            <label for="desc">Description</label>
                            <input type="text" name="description" class="form-control" id="desc" value="" placeholder="Title..">
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input type="text" name="category" class="form-control" id="desc" value="" placeholder="Title..">
                        </div>

                        <div class="form-group">
                            <label for="photo">Upload New Logo:</label>
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
