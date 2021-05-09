@extends('clean-blog.welcome')

@section('content')
    <a href="{{ route('all-post') }}" class="btn btn-info mb-3">All Post</a>

    <div>
        <h3> {{ $singlePost->title }}; [{{ $singlePost->id }}] </h3>
        @if($singlePost->image)
            <img src="{{ URL::to($singlePost->image) }}" alt="" style="height: 340px;">
        @else
            <span class="text-danger"> No image Added</span>
        @endif
        <h4>{{ $singlePost->name }}</h4>
        <p> {{ $singlePost->details }}</p>
    </div>

@endsection
