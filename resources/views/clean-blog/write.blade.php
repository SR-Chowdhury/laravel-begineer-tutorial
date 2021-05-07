@extends('clean-blog.welcome')

@section('content')

<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <a href="{{ route('blog-add-category') }}" class="btn btn-danger">Add Category</a>
        <a href="#" class="btn btn-info">All Category</a>

        <form id="contactForm" name="sentMessage" novalidate>
            <div class="form-group controls mt-3">
                <label for="">Select Category</label>
                <select name="category_id" id="">
                    <option value="">One</option>
                    <option value="">Two</option>
                </select>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Title</label>
                    <input class="form-control" id="title" type="text" placeholder="Title" required />
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group pt-3">
                <div class="form-group">
                    <label>Select Image</label><br>
                    <input class="" id="phone" name="image" type="file" placeholder="Select .jpg, .png" required />
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Post Details</label>
                    <textarea class="form-control" id="details" rows="5" placeholder="Details" required></textarea>
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
