<form action="{{ route('login.store') }}" action="POST">
    @csrf
    <label for="email">Email: </label>
    <input type="text" name="email">
    <br>
    <label for="password">Password: </label>
    <input type="password" name="password">
    <br>
    <input type="submit" value="Login">
</form>
