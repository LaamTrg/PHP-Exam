<?php
require_once '../functions/contacts.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    updateContact($_POST['id'], $_POST['name'], $_POST['phoneNumber']);
    header("Location: index.php");
    exit();
} else {
    $contact = getContactById($_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
</head>
<body>
    <h1>Edit Contact</h1>
    <form method="post" action="edit_contact.php">
        <input type="hidden" name="id" value="<?php echo $contact['ID']; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $contact['Name']; ?>" required><br><br>
        <label for="phoneNumber">Phone Number:</label>
        <input type="text" id="phoneNumber" name="phoneNumber" value="<?php echo $contact['PhoneNumber']; ?>" required><br><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>