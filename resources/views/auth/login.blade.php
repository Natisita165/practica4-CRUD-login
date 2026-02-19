<form method="POST" action="{{ route('login') }}">
    @csrf
    <input id="email" type="email" name="email" placeholder="Email" required autofocus>
    <input id="password" type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>