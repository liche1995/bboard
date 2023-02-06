@extends("layouts.MasterPage")

@section("script")
    @vite(['resources/views/jsfile/index.js'])
@endsection

@section("content")
    <h1 id="title"></h1>
    <h2 id="now_time"></h2>
@endsection