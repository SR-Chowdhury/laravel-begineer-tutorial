@extends('clean-blog.welcome')

@section('content')

<div class="row">
    <div class="col mx-auto">
        <a href="{{ route('write-post') }}" class="btn btn-info mb-3">Add Post</a>

        <table class="table table-responsive">
            <tr>
                <th>SL</th>
                <th>Category ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Details</th>
                <th>Action</th>
            </tr>

            @foreach ($post as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->title }}</td>
                <td><img src="{{ URL::to($data->image) }}" alt="Image" style="height: 40px; widht: 70px;"> </td>
                <td>{{ $data->details }}</td>
                <td>
                    <a class="btn-sm btn-info" href=" {{ URL::to('post/view/'.$data->id) }} ">View</a>
                    <a class="btn-sm btn-warning" href=" {{ URL::to('post/edit/'.$data->id) }} ">Edit</a>
                    <a class="btn-sm btn-danger" id="deleteSingleId" href=" {{ URL::to('post/delete/'.$data->id) }}  ">Delete</a>
                </td>
            </tr>
            @endforeach

        </table>

    </div>
</div>

@endsection
