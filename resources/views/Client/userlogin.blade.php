

<h1>User Registration Form</h1>
<form action="{{ route('login.handle') }}" method="POST">
    <!-- CSRF token (Laravel-specific) -->
    @csrf
    Name:<input type="text" id="name" name="name" ><br><br>
    Email:<input type="email" id="email" name="email"><br><br>
    Password:<input type="password" id="password" name="password"><br><br>

    <button type="submit">Add User</button>
</form>
