<?php
require_once '../functions/contacts.php';
$contacts = getAllContacts();
?>

$sql = "SELECT * FROM contacts_table";
$result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Phone Book Contacts</h1>
    <a href="add_contact.php">Add New Contact</a>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Actions</th>
        </tr>
        <?php
        if (!empty($contacts)) {
            foreach ($contacts as $contact) {
                echo "<tr>
                        <td>{$contact['Name']}</td>
                        <td>{$contact['PhoneNumber']}</td>
                        <td>
                            <a href='edit_contact.php?id={$contact['ID']}'>Edit</a> | 
                            <a href='../delete_contact.php?id={$contact['ID']}'>Delete</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No contacts found</td></tr>";
        }
        ?>
    </table>
</body>
</html>