<!DOCTYPE html>
<html>
<head>
<title>Users List</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <div class="container m-5" >
        <h2 style="text-align:center;">LARAVEL CRUD SYSTEM</h2>
        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Add User</a>
         @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
        @endif
        <table class="table table-bordered bg-white">
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Role</th><th>Action</th>
        </tr>
        @forelse($users as $users)
        <tr>
            <td>{{ $users->id }}</td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->role  }}</td>
            <td>
            <a href="{{ route('users.edit',$users->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('users.destroy',$users->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
         @empty
            <tr>
                <td colspan="5" class="text-center text-danger">
                    No users found
                </td>
            </tr>
        @endforelse
    </table>
    </div>