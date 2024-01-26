<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>One User</h1>


    @if ($data)
        <p>ID: {{ $data->id }}</p>
        <p>Name: {{ $data->name }}</p>
        <p>Email: {{ $data->email }}</p>
        <!-- Add other user details as needed -->
    @else
        <p>User not found.</p>
    @endif
</body>
</html>
