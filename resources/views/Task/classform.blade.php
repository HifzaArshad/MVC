<div>
	<h1>Add Class</h1>
	<form action="{{ route('class.save') }}" method="POST">
	@csrf
	Class:<input type="text" name="class_name"><br><br>
    <button type="submit">Submit</button>

	</form>
</div>