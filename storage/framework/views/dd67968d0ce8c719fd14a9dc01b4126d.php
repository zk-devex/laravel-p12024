<!-- EditUser.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Edit User</h1>

    <form action="<?php echo e(route('update-user', $user->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input placeholder="Name" type="text" name="name" value="<?php echo e($user->name); ?>">
        <input placeholder="Email" type="email" name="email" value="<?php echo e($user->email); ?>">
        <input placeholder="Password" required role="alert" type="password" name="password" value="<?php echo e($user->password); ?>">
        <button type="submit">Update User</button>
    </form>
</body>
</html>
<?php /**PATH /home/zobaidul/example-app/resources/views/EditUser.blade.php ENDPATH**/ ?>