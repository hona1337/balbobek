<?php
$target_dir = "uploads/";
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$target_file = $target_dir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    echo "Файл жүктелді: " . htmlspecialchars(basename($_FILES["file"]["name"]));
} else {
    echo "Қате пайда болды.";
}
?>
