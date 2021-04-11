<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
</head>
<body>
<h1>Customers</h1>
<table>
    <thead>
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Priority</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->priority }}</td>
            <td>
                <a href="{{ URL::to('users/' . $user->id) }}">View</a>
                <a href="{{ route('user.delete', $user->id) }}">delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<a href="{{ URL::to('users/create') }}">Create Customer</a>
</div>
</body>
</html>