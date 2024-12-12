{{ csrf()->form();}}
<label for="FirstName">FirstName</label>
<input type="text" name="FirstName" id="FirstName" value="{{$employer->FirstName}}">

<label for="LastName">LastName</label>
<input type="text" name="LastName" id="LastName" value="{{$employer->LastName}}">

<label for="Country">Country</label>
<input type="text" name="Country" id="Country" value="{{$employer->Country}}">

<label>BirthDate</label>
<input type="date" name="BirthDate" id="BirthDate" value="{{$employer->BirthDate}}">

<label for="Title">Title</label>
<input type="text" name="Title" id="Title" value="{{$employer->Title}}">


