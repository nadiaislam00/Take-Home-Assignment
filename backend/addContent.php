<?php
include 'db.php';
$data = json_decode(file_get_contents("php://input"), true);
$title = $conn->real_escape_string($data['title']);
$body = $conn->real_escape_string($data['body']);
$tags = $conn->real_escape_string($data['tags']);
$conn->query("INSERT INTO contents (title, body, tags) VALUES ('$title', '$body', '$tags')");
echo json_encode(["status" => "success"]);
?>
