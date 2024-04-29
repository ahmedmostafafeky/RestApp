@extends('adminpanel.layouts.layout')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Settings</h3>
        </div>

        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('settings.update' , $id = 1)}}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Site Title</label>
                    <input type="text" name="site_title" class="form-control" id="title" value="{{old('site_title') ?? $settings->site_title}}" placeholder="Title..">
                </div>
                <div class="form-group">
                    <label for="logo">Upload New Logo:</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="site_logo" class="custom-file-input" value="{{old('site_logo') ?? $settings->site_logo }}" id="logo">
                            <label class="custom-file-label" for="logo">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="favicon">Fav Icon:</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="fav_icon" value="{{old('fav_icon') ?? $settings['fav_icon'] }}" class="custom-file-input" id="favicon">
                            <label class="custom-file-label" for="favicon">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alt">Alt Text:</label>
                    <input type="text" name="alt" class="form-control" id="alt" value="{{old('alt') ?? $settings['alt'] }}" placeholder="Alt..">
                </div>
                <div class="form-group">
                    <label for="meta">Meta Description</label>
                    <input type="text" name="meta_desc" class="form-control" id="meta" value="{{old('meta_desc') ?? $settings['meta_desc'] }}" placeholder="Meta Description...">
                </div>
                <div class="form-group">
                    <label for="copy">Copy Rights: </label>
                    <input type="text" name="cope_rights" class="form-control" id="copy" value="{{old('cope_rights') ?? $settings['cope_rights'] }}" placeholder="Copy Rights..">
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
