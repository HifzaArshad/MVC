<div style="width: 60%; margin: 30px auto; border: 1px solid #000; padding: 20px;">
    <div style="margin-bottom: 20px;">
        <h4 style="margin: 0; padding-bottom: 10px;">
            Edit & Update Task
            <a href="{{ url('school.list') }}" style="float: right; background: red; color: white; padding: 6px 12px; text-decoration: none;">BACK</a>
        </h4>
    </div>

    <form action="{{ route('task.update', $find->id) }}" method="POST"> 
        @csrf 
        @method('PUT')


        <div style="margin-bottom: 15px;">
            <label>Task</label><br>
            <input type="text" name="task" value="{{ $find->task }}" style="width: 100%; padding: 8px; border: 1px solid #ccc;">
        </div>

        <div>
            <button type="submit" style="padding: 8px 16px; background: blue; color: white; border: none;">Update Task</button>
        </div>
    </form>
