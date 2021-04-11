<!DOCTYPE html>
<html>
<head>
    <title>Customer</title>
</head>
    <body>
        <div class="container">
            <h1>Customer Details</h1>

            <form action="{{ route('users.update', $user) }}" method="POST">
                @method('PUT')
                @include('users.detail')
            </form>
        </div>
    </body>
</html>