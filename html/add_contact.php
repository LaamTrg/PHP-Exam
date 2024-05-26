<?php
require_once '../functions/contacts.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    addContact($_POST['name'], $_POST['phoneNumber']);
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact</title>
</head>
<body>
    <h1>Add New Contact</h1>
    <form method="post" action="add_contact.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="phoneNumber">Phone Number:</label>
        <input type="text" id="phoneNumber" name="phoneNumber" required><br><br>
        <button type="submit">Add</button>
    </form>
</body>
</html>