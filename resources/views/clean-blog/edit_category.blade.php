@extends('clean-blog.welcome')

@section('content')

<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <a href="{{ route('blog-show-category') }}" class="btn btn-info">All Category</a>

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action=" {{ URL::to('/update/Category/'.$category->id) }} " method="POST">
        @csrf

            <div class="control-group mt-3">
                <div class="form-group floating-label-form-group controls">
                    <label>Name</label>
                    <input class="form-control" name="name" id="name" type="text" value=" {{ $category->name}} " />
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Slug</label>
                    <input class="form-control" name="slug" id="slug " type="text" value=" {{ $category->slug}} " />
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <br />
            <div id="success"></div>
            <button class="btn btn-warning" id="sendMessageButton" type="submit">Update Value</button>

        </form>
    </div>
</div>

@endsection
