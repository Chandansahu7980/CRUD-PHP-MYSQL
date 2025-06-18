<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-Docker-PHP-MySQL</title>
    <link rel="stylesheet" href="./Style.css">
</head>

<body>
    <h1>Welcome to CRUD-Docker-PHP-MySQL</h1>
    <p>This is a simple CRUD application using Docker, PHP, and MySQL.</p>
    <?php
    // Database connection
    include 'config.php'; // Assuming config.php contains the database connection code 

    $result = $conn->query("SELECT * FROM users");
    ?>
    <a href="createUser.php">Create New User</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row['created_at'] . "</td><td>" . $row['password'] . "</td><td><button onclick=\"location.href='updateRow.php?id=" . $row["id"] . "'\">Edit</button> <button onclick=\"location.href='deleteUser.php?id=" . $row["id"] . "'\">Delete</button></td></tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No users found</td></tr>";
        }
        ?>
    </table>
    <?php
    // phpinfo();
    $conn->close();
    ?>
</body>

</html>