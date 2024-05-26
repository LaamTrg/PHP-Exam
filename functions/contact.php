<?php
require_once 'db.php';

function getAllContacts() {
    $mysqli = getDbConnection();
    $sql = "SELECT * FROM contacts_table";
    $result = $mysqli->query($sql);
    $contacts = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $contacts[] = $row;
        }
    }
    $mysqli->close();
    return $contacts;
}

function addContact($name, $phoneNumber) {
    $mysqli = getDbConnection();
    $stmt = $mysqli->prepare("INSERT INTO contacts_table (Name, PhoneNumber) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $phoneNumber);
    $stmt->execute();
    $stmt->close();
    $mysqli->close();
}

function getContactById($id) {
    $mysqli = getDbConnection();
    $stmt = $mysqli->prepare("SELECT * FROM contacts_table WHERE ID = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $contact = $result->fetch_assoc();
    $stmt->close();
    $mysqli->close();
    return $contact;
}

function updateContact($id, $name, $phoneNumber) {
    $mysqli = getDbConnection();
    $stmt = $mysqli->prepare("UPDATE contacts_table SET Name = ?, PhoneNumber = ? WHERE ID = ?");
    $stmt->bind_param("ssi", $name, $phoneNumber, $id);
    $stmt->execute();
    $stmt->close();
    $mysqli->close();
}

function deleteContact($id) {
    $mysqli = getDbConnection();
    $stmt = $mysqli->prepare("DELETE FROM contacts_table WHERE ID = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    $mysqli->close();
}
?>