@extends('layouts.app')


@section('content')
    {{ $message }}
    <a href="/">Home</a>
@endsection

@section('sripts')
    <script src="{{assets('js/app.js')}}"></script>
@endsection