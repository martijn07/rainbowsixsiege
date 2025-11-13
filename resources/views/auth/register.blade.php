<form action="{{ route('register.store') }}" method="POST">
    @csrf
    <label for="name">Name: </label>
    <input type="text" name="name">
    <br>
    <label for="email">Email: </label>
    <input type="text" name="email">
    <br>
    <label for="password">Password: </label>
    <input type="password" name="password">
    <br>
    <label for="password_confirmation">Confirm password: </label>
    <input type="password" name="password_confirmation">
    <br>
    <input type="submit" value="Register">
</form>
