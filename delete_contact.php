<?php
require_once 'functions/contacts.php';

if (isset($_GET['id'])) {
    deleteContact($_GET['id']);
    header("Location: html/index.php");
    exit();
}
?>