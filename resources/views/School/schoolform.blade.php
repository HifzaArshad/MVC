
<h1>School Form</h1>

<form action="{{ route('school.save') }}" method="POST">
    @csrf

   School: <input type="text" id="school" name="school" ><br><br>
   Address: <input type="text" id="address" name="address"><br><br>
 
    <button type="submit">Save School</button>
</form>


