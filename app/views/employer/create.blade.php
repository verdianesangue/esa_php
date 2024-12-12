@extends('layouts.app')

@section('content')
<h1>Create a new Employee &#128105; &#8205;</h1>

<form action="create" method="post">
     
    @include('employer._form')
    <button type="submit">Create &#9989</button>

</form>

@endsection