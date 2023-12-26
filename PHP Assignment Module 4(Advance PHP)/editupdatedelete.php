<?php


class User {
    public $id;
    public $name;
    public $email;

    public function __construct($id, $name, $email) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
}

// Sample data
$users = [
    new User(1, 'John Doe', 'john@example.com'),
    new User(2, 'Jane Doe', 'jane@example.com'),
    // Add more users as needed
];

// Handle delete logic
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $userIdToDelete = $_GET['id'];
    // Implement your delete logic here
    // ...
    // Redirect back to the same page after deletion
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user->id; ?></td>
            <td><?php echo $user->name; ?></td>
            <td><?php echo $user->email; ?></td>
            <td>
                <!-- Edit link -->
                <a href="edit.php?id=<?php echo $user->id; ?>">Edit</a>

                <!-- Delete link -->
                <a href="<?php echo $_SERVER['PHP_SELF'] . '?action=delete&id=' . $user->id; ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
