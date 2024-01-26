<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>One User</h1>


    <?php if($data): ?>
        <p>ID: <?php echo e($data->id); ?></p>
        <p>Name: <?php echo e($data->name); ?></p>
        <p>Email: <?php echo e($data->email); ?></p>
        <!-- Add other user details as needed -->
    <?php else: ?>
        <p>User not found.</p>
    <?php endif; ?>
</body>
</html>
<?php /**PATH /home/zobaidul/example-app/resources/views/SingleUser.blade.php ENDPATH**/ ?>