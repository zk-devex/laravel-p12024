<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Welcome To Laravel</h1>
    <form action="<?php echo e(route('AddUser')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input placeholder="Name" type="text" name="name">
        <input placeholder="Email" type="email" name="email">
        <input placeholder="Password" required role="alert" type="password" name="password">
        <button type="submit" value="Add User">Add User</button>
    </form>
</body>
</html>
<?php /**PATH /home/zobaidul/example-app/resources/views/AddUser.blade.php ENDPATH**/ ?>