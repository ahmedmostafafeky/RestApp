@extends('adminpanel.layouts.layout')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Contact Us</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('contacts.update',$contact = 0)}}">
            @csrf
            @method('patch')
            <div class="card-body">
                <div class="form-group">
                    <label for="facebook">FaceBook</label>
                    <input type="text" name="facebook" class="form-control" id="facebook" value="{{old('facebook') ?? $contacts[0]->value}}" placeholder="Title..">
                </div>


                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="text" name="twitter" class="form-control" id="twitter" value="{{ old('twitter') ?? $contacts[1]->value}}" placeholder="Title..">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{old('email') ??$contacts[2]->value}}" placeholder="Title..">
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" value="{{old('phone') ??$contacts[3]->value}}" placeholder="Title..">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" id="address" value="{{old('address') ?? $contacts[4]->value}}" placeholder="Title..">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
