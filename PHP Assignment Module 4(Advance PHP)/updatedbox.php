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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style>
        .edit-mode {
            background-color: #FFFFCC;
        }
    </style>
    <script>
        function editRow(rowId) {
            // Remove edit mode from all rows
            var rows = document.querySelectorAll('.edit-mode');
            rows.forEach(function (row) {
                row.classList.remove('edit-mode');
            });

            // Add edit mode to the selected row
            var selectedRow = document.getElementById('row-' + rowId);
            selectedRow.classList.add('edit-mode');

            // Fill the text box with existing data
            var nameInput = selectedRow.querySelector('.name-input');
            nameInput.value = selectedRow.getAttribute('data-name');

            // Show the confirm button
            var confirmButton = selectedRow.querySelector('.confirm-button');
            confirmButton.style.display = 'inline';
        }

        function confirmEdit(rowId) {
            // Perform your update logic here
            // ...

            // Remove edit mode from the row
            var selectedRow = document.getElementById('row-' + rowId);
            selectedRow.classList.remove('edit-mode');

            // Hide the confirm button
            var confirmButton = selectedRow.querySelector('.confirm-button');
            confirmButton.style.display = 'none';
        }
    </script>
</head>
<body>

<table border="2">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>

    <?php foreach ($users as $user): ?>
        <tr id="row-<?php echo $user->id; ?>" data-name="<?php echo $user->name; ?>">
            <td><?php echo $user->id; ?></td>
            <td><?php echo $user->name; ?></td>
            <td><?php echo $user->email; ?></td>
            <td>
                <!-- Edit link -->
                <a href="javascript:void(0);" onclick="editRow(<?php echo $user->id; ?>)">Edit</a>

                <!-- Confirm button (initially hidden) -->
                <button class="confirm-button" style="display: none;" onclick="confirmEdit(<?php echo $user->id; ?>)">Confirm</button>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
