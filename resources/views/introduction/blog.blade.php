@extends('introduction.common.header')

	<h1 class="text-center text-success pt-5">Bismillah Hir Rahmanir Rahim</h1>

    <div class="content display-5 text-center">
        <div class="text-danger py-5">
            Laravel v-6
        </div>
        <div>
            <a class="text-warning px-3" href="{{route('welcome')}}">Home</a>
            <a class="text-warning px-3" href="#">About</a>
            <a class="text-success px-3 a-border" href="#">Blog</a>
            <a class="text-warning px-3" href="#">Contact</a>
        </div>
    </div>

@extends('introduction.common.footer')
