@extends('clean-blog.welcome')

@section('content')

<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <a href="{{ route('create-student') }}" class="btn btn-outline-success">Add Student</a>
        <a href="{{ route('student') }}" class="btn btn-outline-info">All Student</a><hr>

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action=" {{ URL::to('student/update/'.$editData->id) }} " method="POST" >
        @csrf

            <div class="control-group  mt-3">
                <div class="form-group floating-label-form-group controls">
                    <label>Student Name</label>
                    <input class="form-control" name="std_name"  type="text" value=" {{ $editData->std_name }} "  />
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group  mt-3">
                <div class="form-group floating-label-form-group controls">
                    <label>Student Email</label>
                    <input class="form-control" name="std_email"  type="email" value=" {{ $editData->std_email }} "  />
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group  mt-3">
                <div class="form-group floating-label-form-group controls">
                    <label>Student Number</label>
                    <input class="form-control" name="std_phone"  type="text" value=" {{ $editData->std_phone }} "  />
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <br />
            <div id="success"></div>
            <button class="btn btn-outline-success" type="submit">Save Data</button>
        </form>
    </div>
</div>

@endsection
