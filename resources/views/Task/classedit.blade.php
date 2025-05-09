<div style="width: 60%; margin: 30px auto; border: 1px solid #000; padding: 20px;">
    <div style="margin-bottom: 20px;">
        <h4 style="margin: 0; padding-bottom: 10px;">
            Edit & Update Class
            <a href="{{ route('class.list') }}" style="float: right; background: red; color: white; padding: 6px 12px; text-decoration: none;">BACK</a>
        </h4>
    </div>

    <form action="{{ route('class.update', $find->id) }}" method="POST">
        
        @csrf 
        @method('PUT')

        <div style="margin-bottom: 15px;">
            <label>Class</label><br>
            <input type="text" name="class_name" value="{{ $find->class_name }}" style="width: 100%; padding: 8px; border: 1px solid #ccc;">
        </div>


        <div>
            <button type="submit" style="padding: 8px 16px; background: blue; color: white; border: none;">Update Student</button>
        </div>
    </form>
