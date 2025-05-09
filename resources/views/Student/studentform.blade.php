<div>
    <h1>Student Form</h1>
    <form action="{{ route('studentclass.save') }}" method="POST">
    @csrf
       <input type="hidden" name="cl_id" value="{{$cls_id}}"><br><br>
        Student Name:<input type="text" name="name" ><br><br>
        Email:<input type="email" name="email" ><br><br>
        Password:<input type="password" name="password"><br><br>
        <button type="submit">Add Student</button>
    </form>
</div>
