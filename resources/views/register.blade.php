<form action="{{ route('register') }}" method="POST">
@csrf
<input type="text" name="name" id="name" placeholder="Name"><br>
<input type="email" name="email" id="email" placeholder="email"><br>
<input type="password" name="password" id="password" placeholder="password"><br>
<button type="submit">Register</button>
</form>