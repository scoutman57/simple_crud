<!DOCTYPE html>
<html>
    <head>
        <title>New Customer</title>
    </head>
    <body>
        <div class="container">
            <h1>Create a customer</h1>
            <form action="{{ route('users.store') }}" method="POST">
                    @include('users.detail')
            </form>
        </div>
    </body>
</html>