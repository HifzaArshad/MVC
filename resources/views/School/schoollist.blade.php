<div>

    <h2 style="text-align:center;">School List</h2>
    
    <table style="width: 80%; margin: 20px auto; border: 1px solid #000; border-collapse: collapse;">
    <thead>
        <tr>
          <th style="border: 1px solid #000; padding: 8px;">Id</th>
            <th style="border: 1px solid #000; padding: 8px;">School Name</th>
            <th style="border: 1px solid #000; padding: 8px;">Address</th>
            <th style="border: 1px solid #000; padding: 8px;">Auction</th>
        </tr>
    </thead>
    <tbody>
        @foreach($groupedschool as $school)
            <tr>
                <td style="border: 1px solid #000; padding: 8px;">{{ $school->id }}</td>
                <td style="border: 1px solid #000; padding: 8px;">{{ $school->school }}</td>
                 <td style="border: 1px solid #000; padding: 8px;">{{ $school->address }}</td>
                 <td style="border: 1px solid #000; padding: 8px;">
                    <a href="{{ route('school.edit', $school->id) }}">Edit</a>
                    <a href="{{ route('school.delete', $school->id) }}" style="margin-left: 10px;">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('school.form') }}" style="display: block; width: fit-content; margin: 0 auto; background: blue; color: white; padding: 6px 12px; text-decoration: none;">Add School</a>
</div>