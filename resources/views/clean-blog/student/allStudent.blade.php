@extends('clean-blog.welcome')

@section('content')

<div class="row">
    <div class="col mx-auto">
        <a href="{{ route('create-student') }}" class="btn btn-outline-success mb-3">Add Student</a>

        <table class="table">
            <tr>
                <th>Serial</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>

            @foreach ($student as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->std_name }}</td>
                <td>{{ $data->std_email }}</td>
                <td>{{ $data->std_phone }}</td>
                <td>
                    {{-- <a class="btn-sm btn-info" href=" {{ URL::to('post/view/'.$data->id) }} ">View</a> --}}
                    <a class="btn-sm btn-info" href=" # ">View</a>
                    <a class="btn-sm btn-warning" href=" {{ URL::to('student/edit/'.$data->id) }} ">Edit</a>
                    <a class="btn-sm btn-danger" id="deleteSingleId" href=" {{ URL::to('student/delete/'.$data->id) }} ">Delete</a>
                </td>
            </tr>
            @endforeach

        </table>

    </div>
</div>

@endsection
