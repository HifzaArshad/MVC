
<h1>Create Todo Task</h1>

<form action="{{ route('task.save') }}" method="POST">
  @csrf
   Task: <input type="text" id="task" name="task" ><br><br>
   <button type="submit">Save Task</button>
</form>