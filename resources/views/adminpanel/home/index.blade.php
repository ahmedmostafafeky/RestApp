@extends('adminpanel.layouts.layout')

@section('content')

{{--   Sliders Table --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sliders Table: </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Paragraph</th>
                    <td>Call To Action</td>
                    <td>Photo</td>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sliders as $slider)
                    <tr>
                        <td>{{$slider->title}}</td>
                        <td>{{$slider->paragraph}}</td>
                        <td>{{$slider->cta}}</td>
                        <td><img width="40px" alt="s" src="{{asset('storage/'.$slider->photo)}}"></td>
                        <td>
                            <a href = '{{route("slider.edit",$id = $slider->id)}}' class="btn btn-dark" >Edit</a>
                        </td>
                        <td>
                            <form method="post" onclick="return confirm('Are you sure?')" action="{{route('slider.destroy', $id = $slider->id)}}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
{{--    Slider Form--}}
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add New</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('slider.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="" placeholder="Title..">
                </div>
                <div class="form-group">
                    <label for="paragraph">Description</label>
                    <input type="text" name="paragraph" class="form-control" id="paragraph" value="" placeholder="Title..">
                </div>
                <div class="form-group">
                    <label for="cta">Call To Action</label>
                    <input type="text" name="cta" class="form-control" id="cta" value="" placeholder="Title..">
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
{{--Sliders--}}


{{--   specialities Table --}}
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sliders Table: </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Title</th>
                <th>Paragraph</th>
                <td>Photo</td>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($specialities as $specialitie)
                <tr>
                    <td>{{$specialitie->title}}</td>
                    <td>{{$specialitie->paragraph}}</td>

                    <td><img width="40px" alt="s" src="{{asset('storage/'.$specialitie->photo)}}"></td>
                    <td>
                        <a href = '{{route('specialities.edit' , $id = $specialitie->id)}}' class="btn btn-dark" >Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('specialities.destroy', $id = $specialitie->id)}}">
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
{{--    specialities Form--}}
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add New</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="{{route('specialities.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="" placeholder="Title..">
            </div>
            <div class="form-group">
                <label for="paragraph">Description</label>
                <input type="text" name="paragraph" class="form-control" id="paragraph" value="" placeholder="Title..">
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
{{--specialities--}}


{{--   testinomials Table --}}
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Testinomials Table: </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Paragraph</th>
                <td>Rate</td>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($testinomials as $testinomial)
                <tr>
                    <td>{{$testinomial->name}}</td>
                    <td>{{$testinomial->paragraph}}</td>
                    <td>{{$testinomial->rate}}</td>
                    <td>
                        <a href = '{{route('testinomials.edit', $id = $testinomial->id )}}' class="btn btn-dark" >Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('testinomials.destroy', $id = $testinomial->id)}}">
                            @csrf
                            @method('delete')
                            <button type="submit"  onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
{{--    testinomials Form--}}
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add New</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="{{route('testinomials.store')}}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="" placeholder="Name..">
            </div>
            <div class="form-group">
                <label for="paragraph">Paragraph</label>
                <input type="text" name="paragraph" class="form-control" id="paragraph" value="" placeholder="Title..">
            </div>
            <div class="form-group">
                <label for="rate">Rate</label>
                <input type="number" name="rate" class="form-control" id="rate" value="" placeholder="Rate..">
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</div>
{{--testinomials--}}

{{--    facts Form--}}
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Update Facts</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="{{route('facts.update', $data = $facts)}}">
        @csrf
        @method('patch')
        <div class="card-body">
            <div class="form-group">
                <label for="happy">Happy Customers</label>
                <input type="number" name="happy" class="form-control" id="happy" value="{{$facts->happy ?? ""}}" placeholder="Name..">
            </div>
            <div class="form-group">
                <label for="dishes">Dishes Served</label>
                <input type="number" name="dishes" class="form-control" id="dishes" value="{{$facts->dishes ?? ""}}" placeholder="Title..">
            </div>
            <div class="form-group">
                <label for="beverages">Total Beverages</label>
                <input type="number" name="beverages" class="form-control" id="beverages" value="{{$facts->beverages ?? ""}}" placeholder="Rate..">
            </div>
            <div class="form-group">
                <label for="coffees">Cup Of Coffees</label>
                <input type="number" name="coffees" class="form-control" id="coffees" value="{{$facts->coffees ?? ""}}" placeholder="Rate..">
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
{{--facts--}}

{{--   Menu Table --}}
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Menu Table: </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($menus as $menu)
                <tr>
                    <td>{{$menu->name}}</td>
                    <td>{{$menu->price}}</td>
                     <td>
                         <a href = '{{route('menus.edit', $id = $menu->id )}}' class="btn btn-dark" >Edit</a>
                     </td>
                    <td>
                        <form method="post" action="{{route('menus.destroy', $id = $menu->id)}}">
                            @csrf
                            @method('delete')
                            <button type="submit"  onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
{{--    Menu Form--}}
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add New</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="{{route('menus.store')}}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="" placeholder="Name..">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" id="price" value="" placeholder="Title..">
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</div>
{{--Menu--}}

{{--   Food Table --}}
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Food Table: </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>paragraph</th>
                <th>Photo</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($foods as $food)
                <tr>
                    <td>{{$food->name}}</td>
                    <td>{{$food->paragraph}}</td>
                    <td><img width="40px" alt="s" src="{{asset('storage/'.$food->photo)}}"></td>
                    <td>
                        <a href = '{{route('foods.edit', $id = $food->id )}}' class="btn btn-dark" >Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('foods.destroy', $id = $food->id)}}">
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
{{--    Food Form--}}
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add New</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="{{route('foods.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="" placeholder="Name..">
            </div>
            <div class="form-group">
                <label for="paragraph">Paragraph</label>
                <input type="text" name="paragraph" class="form-control" id="paragraph" value="" placeholder="Title..">
            </div>
            <div class="form-group">
                <label for="photo">Upload Photo:</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input" value="" id="photo">
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
{{--Food--}}

@endsection
