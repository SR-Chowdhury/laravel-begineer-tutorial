@extends('clean-blog.welcome')

@section('content')

<div class="row">
    <div class="col-lg-9 col-md-10 mx-auto">
        <a href="{{ route('blog-add-category') }}" class="btn btn-info mb-3">Add Category</a>

        <table class="table table-responsive">
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>

            @foreach ($fetchCategory as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->slug }}</td>
                <td>{{ $data->created_at }}</td>
                <td>
                    <a class="btn-sm btn-info" href="#">View</a>
                    <a class="btn-sm btn-warning" href="#">Edit</a>
                    <a class="btn-sm btn-danger" href="#">Delete</a>
                </td>
            </tr>
            @endforeach

        </table>

    </div>
</div>


@endsection
