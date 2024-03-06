<form action="{{ route('login') }}" method="POST">
@csrf
<input type="text" name="email" id="email" placeholder="email"><br>
<input type="password" name="password" id="password" placeholder="Password"><br>
<button type="submit">Login</button>
</form>