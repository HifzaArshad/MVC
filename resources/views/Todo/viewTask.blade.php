<div>

    <h2 style="text-align:center;">Todo List</h2>
    
    <table style="width: 80%; margin: 20px auto; border: 1px solid #000; border-collapse: collapse;">
 <thead>
        <tr>
            <th style="border: 1px solid #000; padding: 8px;">User Id</th>
            <th style="border: 1px solid #000; padding: 8px;">Task</th>
            <th style="border: 1px solid #000; padding: 8px;">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($grouptodo as $todo)
            <tr>
                <td style="border: 1px solid #000; padding: 8px;">{{ $todo->user_id }}</td>
                <td style="border: 1px solid #000; padding: 8px;">{{ $todo->task }}</td>
                <td style="border: 1px solid #000; padding: 8px;">
                    <a href="{{ route('task.edit', $todo->id) }}">Edit</a>
                    <a href="{{ route('task.delete', $todo->id) }}" style="margin-left: 10px;">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('task.create') }}" style="display: block; width: fit-content; margin: 0 auto; background: blue; color: white; padding: 6px 12px; text-decoration: none;">Create list </a>
</div>