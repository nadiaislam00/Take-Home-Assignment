<?php
include 'db.php';
$result = $conn->query("SELECT * FROM contents ORDER BY created_at DESC");
$contents = [];
while($row = $result->fetch_assoc()) {
  $contents[] = $row;
}
echo json_encode($contents);
?>
