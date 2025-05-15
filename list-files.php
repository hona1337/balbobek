<?php
$dir = "files/";
$files = scandir($dir);

echo "<ul>";
foreach ($files as $file) {
    if ($file !== "." && $file !== "..") {
        echo "<li><a href='$dir$file' target='_blank'>$file</a></li>";
    }
}
echo "</ul>";
?>
