<?php
$ho = $_GET['ho'];
$ten = $_GET['ten'];
$ngaysinh = $_GET['ngaysinh'];
$diem = $_GET['diem'];

if ($diem >= 9) {
} elseif ($diem >= 8) {
    $xeploai = "Giỏi";
} elseif ($diem >= 6.5) {
    $xeploai = "Khá";
} elseif ($diem >= 5) {
    $xeploai = "Trung bình";
} elseif ($diem >= 3.5) {
    $xeploai = "Yếu";
} else {
    $xeploai = "Kém";
}
?>
<div id="gioithieu">
    <p>
    	<span>Họ tên</span>
    	:
    	<?php echo $ho . " " . $ten; ?>
    </p>
    <p>
    	<span>Ngày sinh</span>
    	: <?php echo $ngaysinh; ?>
    </p>
    <p>
    	<span>Điểm</span>
    	: <?php echo $diem; ?>
    </p>
    <p>
    	<span>Xếp loại</span>
    	: <?php echo $xeploai; ?>
    </p>
</div>