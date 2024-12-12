{{ csrf()->form();}}
<label for="FirstName">FirstName</label>
<input type="text" name="FirstName" id="FirstName" value="{{$customer->FirstName}}">

<label for="LastName">LastName</label>
<input type="text" name="LastName" id="LastName" value="{{$customer->LastName}}">

<label for="City">City</label>
<input type="text" name="City" id="City" value="{{$customer->City}}">

<label>Email</label>
<input type="text" name="Email" id="Email" value="{{$customer->Email}}">

