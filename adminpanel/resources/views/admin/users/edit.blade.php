<form method="POST" action="{{ route('users.update',$user->id) }}">
@csrf
@method('PUT')

<input type="text" name="name" value="{{ $user->name }}"><br>
<input type="email" name="email" value="{{ $user->email }}"><br>

<select name="role">
    <option value="admin" {{ $user->role=='admin'?'selected':'' }}>Admin</option>
    <option value="user" {{ $user->role=='user'?'selected':'' }}>User</option>
</select>

<button>Update</button>
</form>
