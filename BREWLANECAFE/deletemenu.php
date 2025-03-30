<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brewlane";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the item ID from the URL
$id = $_GET['id'];

// Delete the menu item from the database
$sql = "DELETE FROM menu_items WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Item deleted successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

// Redirect back to the menu page after deletion
header("Location: menu.php");
exit();
?>
