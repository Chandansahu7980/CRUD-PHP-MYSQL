<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="./Style.css">
</head>

<body>
    <?php
    // Database connection
    include 'config.php'; // Assuming config.php contains the database connection code
    ?>
    
    <h2>Create User</h2>
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" required>
        <button type="submit" name="submit">Create User</button>
    </form>
    <a href="index.php">Back to Users List</a>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Insert user data
        $insertQuery = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        if ($conn->query($insertQuery) === TRUE) {
            echo "<script>alert('User created successfully!');</script>";
            // Redirect to index.php after successful creation
            echo "<script>window.location.href = 'index.php';</script>";
        } else {
            echo "<p>Error creating user: " . $conn->error . "</p>";
        }
    }
    ?>
</body>

</html>