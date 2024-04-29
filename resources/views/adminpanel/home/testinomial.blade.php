@extends('adminpanel.layouts.layout')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Update Testinomial: </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('testinomials.update', $id = $testinomial->id)}}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{$testinomial->name?? '' }}" placeholder="Title..">
                </div>
                <div class="form-group">
                    <label for="paragraph">Description</label>
                    <input type="text" name="paragraph" class="form-control" id="paragraph" value="{{$testinomial->paragraph ?? '' }}" placeholder="Title..">
                </div><div class="form-group">
                    <label for="rate">Rate</label>
                    <input type="number" name="rate" class="form-control" id="rate" value="{{$testinomial->rate ?? '' }}" placeholder="Title..">
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
