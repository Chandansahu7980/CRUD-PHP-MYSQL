<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="./Style.css">
</head>
<body>
    <?php
    // Database connection
    include 'config.php'; // Assuming config.php contains the database connection code
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch user data
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM users WHERE id = $id");
    $row = $result->fetch_assoc();
    ?>
    <h1>Update User</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" value="<?php echo $row['password']; ?>" required>
        <label for="created_at">Created At:</label>
        <input type="text" id="created_at" name="created_at" value="<?php echo $row['created_at']; ?>" required readonly>
        <button type="submit" name="submit">Update</button>
    </form>
    <a href="index.php">Back to Users List</a>
    <?php
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $created_at = $_POST['created_at'];

        // Update user data
        $updateQuery = "UPDATE users SET name='$name', email='$email', password='$password', created_at='$created_at' WHERE id=$id";
        if ($conn->query($updateQuery) === TRUE) {
            echo "<script>alert('User updated successfully!');</script>";
            // Redirect to index.php after successful update
            echo "<script>window.location.href = 'index.php';</script>";
        } else {
            echo "<p>Error updating user: " . $conn->error . "</p>";
        }
    }
    ?>
</body>
</html>