@extends('clean-blog.welcome')

@section('content')

<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
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

        <form action=" {{ URL::to('/post/update/'.$editSinglePost->id) }} " method="POST" enctype="multipart/form-data" >
        @csrf
            <div class="form-group controls mt-3">
                <label for="">Select Category</label>
                <select name="category_id" >
                    @foreach ($category as $data)
                        <option value="{{ $data->id }}" <?php if ($data->id == $editSinglePost->category_id) echo "selected"; ?> > {{ $data->name }} </option>
                    @endforeach
                </select>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Title</label>
                    <input class="form-control" name="title" id="title" type="text" value=" {{ $editSinglePost->title }} "  />
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group pt-3">
                <div class="form-group">
                    <label>New Image</label><br>
                    <input class="" name="image" type="file" />
                    <p class="help-block text-danger"></p>
                    <Label>Old Image</Label>
                    @if($editSinglePost->image)
                        <img src="{{URL::to($editSinglePost->image)}}" alt="" style="height: 60px; width: 90px;">
                    @else
                        No Imaged Added
                    @endif
                    <input type="hidden" name="old_photo" value="{{$editSinglePost->image}}">
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Post Details</label>
                    <textarea class="form-control" name="details" rows="5"  >
                        {{ $editSinglePost->details }}
                    </textarea>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <br />
            <div id="success"></div>
            <button class="btn btn-primary" type="submit">Update Data</button>
        </form>
    </div>
</div>

@endsection
