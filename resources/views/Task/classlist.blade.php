<div>
	

    <h2 style="text-align:center;">Class List</h2>
    <table style="width: 80%; margin: 20px auto; border: 1px solid #000; border-collapse: collapse;">
        
    <thead>
        <tr>
          <th style="border: 1px solid #000; padding: 8px;">Id</th>
            <th style="border: 1px solid #000; padding: 8px;">Class Name</th>
            <th style="border: 1px solid #000; padding: 8px;">Auction</th>
        </tr>
    </thead>
    <tbody>
        @foreach($grouped as $classes)
            <tr>
                <td style="border: 1px solid #000; padding: 8px;">{{ $classes->id }}</td>
                <td style="border: 1px solid #000; padding: 8px;">{{ $classes->class_name }}</td>
                 <td style="border: 1px solid #000; padding: 8px;">
                    <a href="{{ route('class.edit', $classes->id) }}">Edit</a> 
                    <a href="{{ route('class.delete', $classes->id) }}" style="margin-left: 10px;">Delete</a>
                    <a href="{{ route('studentclass.show' ,  $classes->id) }}" style="margin-left: 10px;">Add Student</a>
                   
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('class.show') }}" style="display: block; width: fit-content; margin: 0 auto; background: green; color: white; padding: 6px 12px; text-decoration: none;">Add Class</a>

</div>
