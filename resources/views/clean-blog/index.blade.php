@extends('clean-blog.welcome')

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        @foreach ($posts as $data)
        <div class="post-preview">
            <a href="{{ URL::to('post/view/'.$data->id) }}">
                <h2 class="post-title"> {{ $data->title }} </h2>
                <img class="py-2" src="{{ URL::to($data->image) }}" alt="Image" style="height: 340px;">
            </a>
            <p class="post-meta">
                Posted by
                <a href="#!">Shihan</a>
                on  {{ $data->created_at }}
            </p>
        </div>
        <hr />
        @endforeach
        {{ $posts->links() }}
    </div>

</div>

@endsection
