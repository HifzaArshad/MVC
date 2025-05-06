<div>
	<!-- <h1>Form</h1>
	<form action="save-school-form" method="get">
	School:<input type="text" name="school"><br><br>
    Address:<input type="text" name="address"><br><br>
	<button type="submit">Submit</button>
	</form> -->


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
                    <a href="{{ url('edit-school/'. $school->id) }}">Edit</a> 
                    <a href="{{ url('delete-school/'. $school->id) }}" style="margin-left: 10px;">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</div>