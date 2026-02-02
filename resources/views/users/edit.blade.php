<form action="{{ route('users.update',$user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $user->name }}" class="form-control mb-2">
    <input type="email" name="email" value="{{ $user->email }}" class="form-control mb-2">

    <select name="role" class="form-control mb-3">
        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
    </select>

    <button class="btn btn-primary">Update</button>
</form>
