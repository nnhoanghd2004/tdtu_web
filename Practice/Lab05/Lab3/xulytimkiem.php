<?php
$tukhoa = $_GET['tukhoa'];
$tukhoa = strip_tags($tukhoa);
$tukhoa = trim($tukhoa);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div>Kết quả tìm kiếm: <?php echo $tukhoa;  ?></div>
        <?php require_once('chuoi.php'); ?>
    
    </div>
</body>
</html>