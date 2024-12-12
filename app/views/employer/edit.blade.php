@extends('layouts.app')

@section('content')
<h1>Edit a new employee</h1>

<form action="{{route('employers.update')}}" method="post">
    
    <input type="hidden" name="EmployeeId" value="{{$employer->EmployeeId}}">
    @include('employer._form')
    <button type="submit">Update</button>

</form>

@endsection