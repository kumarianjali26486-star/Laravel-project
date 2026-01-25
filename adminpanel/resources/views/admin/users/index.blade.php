<a href="{{ route('users.create') }}">Add user</a>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Action</th>
          </tr>
        @foreach($users as $user)
        <tr>
            <td>
                <a href="{{ route('users.edit',$user->id) }}">Edit</a>
                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete</button>
            
        </form>
    </td>
</tr>
@endforeach
</table>