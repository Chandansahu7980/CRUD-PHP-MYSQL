<?php
// Database connection
include 'config.php'; // Assuming config.php contains the database connection code

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete user
    $deleteQuery = "DELETE FROM users WHERE id=$id";
    if ($conn->query($deleteQuery) === TRUE) {
        echo "<script>alert('User deleted successfully!');</script>";
        // Redirect to index.php after successful deletion
        echo "<script>window.location.href = 'index.php';</script>";
    } else {
        echo "<p>Error deleting user: " . $conn->error . "</p>";
    }
}
$conn->close();
?>