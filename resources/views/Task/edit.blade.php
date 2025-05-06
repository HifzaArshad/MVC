<div style="width: 60%; margin: 30px auto; border: 1px solid #000; padding: 20px;">
    <div style="margin-bottom: 20px;">
        <h4 style="margin: 0; padding-bottom: 10px;">
            Edit & Update Student
            <a href="{{ url('list') }}" style="float: right; background: red; color: white; padding: 6px 12px; text-decoration: none;">BACK</a>
        </h4>
    </div>

    <form action="{{ url('update-school/'. $find->id) }}" method="POST">
        
        @csrf 
        @method('PUT')

        <div style="margin-bottom: 15px;">
            <label>School</label><br>
            <input type="text" name="school" value="{{ $find->school }}" style="width: 100%; padding: 8px; border: 1px solid #ccc;">
        </div>

        <div style="margin-bottom: 15px;">
            <label>Address</label><br>
            <input type="text" name="address" value="{{ $find->address }}" style="width: 100%; padding: 8px; border: 1px solid #ccc;">
        </div>

        <div>
            <button type="submit" style="padding: 8px 16px; background: blue; color: white; border: none;">Update Student</button>
        </div>
    </form>
