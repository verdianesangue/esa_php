@extends('layouts.app')

@section('content')
<h1>Create a new customer</h1>

<form action="create" method="post">
     
    @include('customer._form')
    <button type="submit">Create</button>

</form>

@endsection