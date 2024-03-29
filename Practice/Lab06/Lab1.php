<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính điểm và xếp loại học lực</title>
</head>
<body>
    <h1>Tính điểm và xếp loại học lực</h1>
    <form action="index.php" method="post">
        <label for="toan">Điểm Toán:</label>
        <input type="number" id="toan" name="toan" min="0" max="10" required>
        <br>
        <label for="ly">Điểm Lý:</label>
        <input type="number" id="ly" name="ly" min="0" max="10" required>
        <br>
        <label for="hoa">Điểm Hóa:</label>
        <input type="number" id="hoa" name="hoa" min="0" max="10" required>
        <br>
        <br>
        <input type="submit" value="Tính điểm">
    </form>

    <?php
    if (isset($_POST['toan']) && isset($_POST['ly']) && isset($_POST['hoa'])) {
        $toan = $_POST['toan'];
        $ly = $_POST['ly'];
        $hoa = $_POST['hoa'];

        $tongDiem = $toan + $ly + $hoa;

        $xepLoai = "";
        if ($tongDiem >= 24) {
            $xepLoai = "Giỏi";
        } elseif ($tongDiem >= 21) {
            $xepLoai = "Khá";
        } elseif ($tongDiem >= 15) {
            $xepLoai = "Trung bình";
        } else $xepLoai = "Yếu";

        // Hiển thị kết quả
        echo "<h2>Kết quả</h2>";
        echo "<p>Tổng điểm: $tongDiem</p>";
        echo "<p>Xếp loại học lực: $xepLoai</p>";
    }
    ?>
</body>
</html>
