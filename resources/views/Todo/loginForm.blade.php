
<h1>Todo Login Form</h1>
<form action="{{ route('todo.login.save') }}" method="POST">
    <!-- CSRF token (Laravel-specific) -->
    @csrf
    Email:<input type="email" id="email" name="email"><br><br>
    Password:<input type="password" id="password" name="password"><br><br>

    <button type="submit">Login</button>
     <button><a href="{{route('todo.register')}}">Signup?</a></button>
    
</form>
