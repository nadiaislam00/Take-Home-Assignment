<?php
include 'db.php';
$data = json_decode(file_get_contents("php://input"), true);
$id = $conn->real_escape_string($data['id']);
$title = $conn->real_escape_string($data['title']);
$body = $conn->real_escape_string($data['body']);
$tags = $conn->real_escape_string($data['tags']);
$conn->query("UPDATE contents SET title = '$title', body = '$body', tags = '$tags' WHERE id = '$id'");
echo json_encode(["status" => "success"]);
?>
