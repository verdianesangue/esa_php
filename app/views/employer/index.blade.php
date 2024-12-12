@extends('layouts.app')

@section('content')

    {{$titre}}
    <div>
     <a href="/employers/create" role="button">create a new employee</a>
     <h1>hi &#128105; &#8205;</h1>
    </div>
    <table>
        <tr>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Country</th>
            <th>BirthDate</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
        @foreach ($employers as $employer)
            <tr>
                <td>{{$employer->FirstName}}</td>
                <td>{{$employer->LastName}}</td>
                <td>{{$employer->Country}}</td>
                <td>{{$employer->BirthDate}}</td>
                <td>{{$employer->Title}}</td>
                <td>
                    <a href="{{route('employers.edit',$employer->EmployeeId)}}"role = "button">Edit</a>
                    <form action="{{route('employers.destroy')}}" method="POST">
                        {{ csrf()->form();}}
                        <input type="hidden" name="EmployeeId" value="{{$employer->EmployeeId}}"/>
                        <button type="submit">&#128465;</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    
@endsection