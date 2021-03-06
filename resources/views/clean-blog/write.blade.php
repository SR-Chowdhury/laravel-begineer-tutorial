@extends('clean-blog.welcome')

@section('content')

<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <a href="{{ route('blog-add-category') }}" class="btn btn-danger">Add Category</a>
        <a href="{{ route('blog-show-category') }}" class="btn btn-info">All Category</a>
        <a href="{{ route('all-post') }}" class="btn btn-info">All Post</a>

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action=" {{ route('store-post') }} " method="POST" enctype="multipart/form-data" >
        @csrf
            <div class="form-group controls mt-3">
                <label for="">Select Category</label>
                <select name="category_id" id="">
                    @foreach ($category as $data)
                        <option value="{{ $data->id }}"> {{ $data->name }} </option>
                    @endforeach
                </select>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Title</label>
                    <input class="form-control" name="title" id="title" type="text" placeholder="Title"  />
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group pt-3">
                <div class="form-group">
                    <label>Select Image</label><br>
                    <input class="" name="image" type="file" />
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Post Details</label>
                    <textarea class="form-control" name="details" rows="5" placeholder="Details" ></textarea>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <br />
            <div id="success"></div>
            <button class="btn btn-primary" type="submit">Send</button>
        </form>
    </div>
</div>

@endsection
