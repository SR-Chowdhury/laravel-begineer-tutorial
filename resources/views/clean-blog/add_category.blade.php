@extends('clean-blog.welcome')


@section('content')

<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <a href="{{ route('blog-add-category') }}" class="btn btn-danger">Add Category</a>
        <a href="#" class="btn btn-info">All Category</a>

        <form action="{{ route('blog-insert-category') }}">
        @csrf

            <div class="control-group mt-3">
                <div class="form-group floating-label-form-group controls">
                    <label>Name</label>
                    <input class="form-control" name="name" id="name" type="text" placeholder="Category Name" required />
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Slug</label>
                    <input class="form-control" name="slug" id="slug " type="text" placeholder="Slug Name" required />
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <br />
            <div id="success"></div>
            <button class="btn btn-primary" id="sendMessageButton" type="submit">Send</button>

        </form>
    </div>
</div>


@endsection
