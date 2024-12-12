@extends('layouts.app')

@section('content')
<h1>Edit a new customer</h1>

<form action="{{route('customers.update')}}" method="post">
    
    <input type="hidden" name="CustomerId" value="{{$customer->CustomerId}}">
    @include('customer._form')
    <button type="submit">Update</button>

</form>

@endsection