@extends('clean-blog.welcome')

@section('content')

    <a href="{{ route('blog-show-category') }}" class="btn btn-info mb-3">All Category</a>
    <div>
        <ol>
            <li>Category ID: {{ $singleData->id }}</li>
            <li>Category Name: {{ $singleData->name }}</li>
            <li>Category Slug Name: {{ $singleData->slug }}</li>
            <li>Category Created At: {{ $singleData->created_at }}</li>
        </ol>
    </div>

@endsection
