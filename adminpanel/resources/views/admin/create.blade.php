<form method="POST" action="{{ route('users.store') }}">
@csrf
<input type="text" name="name" placeholder="Name"><br>
<input type="email" name="email" placeholder="Email"><br>
<input type="password" name="password" placeholder="Password"><br>

<select name="role">
    <option value="admin">Admin</option>
    <option value="user">User</option>
</select>

<button>Save</button>
</form>