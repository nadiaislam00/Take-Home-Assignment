<?php
include 'db.php';
$id = $conn->real_escape_string($_GET['id']);
$conn->query("DELETE FROM contents WHERE id = '$id'");
echo json_encode(["status" => "success"]);
?>
