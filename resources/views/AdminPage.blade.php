<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center mt-5 mb-5">I am AdminPage.blade.php</h1>


    <h1>Users</h1>



<div class="container">
    <div class="row">
        <div class="col-10">
            <nav>
                <a href="/add-user" class="btn btn-primary btn-sm" >Add User</a>

            </nav>
            <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Details</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                    <td>
                        {{ $user->id }}
                    </td>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>
                    <a  class="btn btn-primary btn-sm " href="{{ route('user-details', $user->id) }}">View</a>

                    </td>
                    <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('edit-user', $user->id) }}">Edit</a>
                    </td>
                    <td>
                    <a  class="btn btn-primary btn-sm " href="{{ route('delete-user', $user->id) }}">Delete</a>
                    </td>
                </tr>
                @endforeach

            </table>

            <a href="{{ route('delete-all-users') }}" class="btn btn-danger">Delete All Users</a>
            <div class="mt-5 flex justify-end items-center">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>


</body>
</html>
