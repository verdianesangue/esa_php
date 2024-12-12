@extends('layouts.app')

@section('content')

    {{$titre}}
    <div>
     <a href="/customers/create" role="button">create a new customer</a>
    </div>
    <table>
        <tr>
            <th>LastName</th>
            <th>FirstName</th>
            <th>City</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach ($customers as $customer)
            <tr>
                <td>{{$customer->FirstName}}</td>
                <td>{{$customer->LastName}}</td>
                <td>{{$customer->City}}</td>
                <td>{{$customer->Email}}</td>
                <td>
                    <a href="{{route('customers.edit',$customer->CustomerId)}}"role = "button">Edit</a>
                    <form action="{{route('customers.destroy')}}" method="POST">
                        {{ csrf()->form();}}
                        <input type="hidden" name="CustomerId" value="{{$customer->CustomerId}}"/>
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    
@endsection