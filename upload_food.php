<?php
$targetDir = "uploads/food/";

if (!file_exists($targetDir)) {
    mkdir($targetDir, 0777, true);
}

if (isset($_FILES['photo'])) {
    $file = $_FILES['photo'];
    $fileName = basename($file["name"]);
    $targetFile = $targetDir . $fileName;

    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        echo "Файл сәтті жүктелді.<br><a href='food.html'>Артқа қайту</a>";
    } else {
        echo "Қате: Файл жүктелмеді.";
    }
} else {
    echo "Файл таңдалмаған.";
}
?>
