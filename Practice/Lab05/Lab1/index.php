<?php
$ho = "Nguyễn";
$ten = "Hoàng";
$ngaysinh = "0395286277";
$diem = 3;

if ($diem >= 9) {
    $xeploai = "Xuất sắc";
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

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<?php if (date("w") % 2 == 1) { ?>
		<link rel="stylesheet" href="c1.css">
	<?php } else { ?>
		<link rel="stylesheet" href="c2.css">
	<?php } ?>
  </head>
  <body>
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
		<div>
			<?php
   $h = gmdate("H") + 7;
   if ($h <= 12) {
       echo "<span class='sang'>Bây giờ là $h giờ sáng! Chúc một ngày an lành</span>";
   } elseif ($h <= 18) {
       echo "<span class='chieu'>Lúc này là $h giờ chiều! Chúc bạn vui </span>";
   } else {
       echo "<span class='chieu'>Lúc này là $h giờ tối! Chúc bạn vui </span>";
   }
   ?>
		</div>
		<div>
					<select name="ngay">
			<option value="0">Chọn ngày</option>
			<?php for ($i = 1; $i <= 31; $i++) {
       echo "<option value=\"$i\">$i</option>";
   } ?>
			</select>
			<select name="thang">
			<option value="0">Chọn tháng</option>
			<?php for ($i = 1; $i <= 12; $i++) {
       echo "<option value=\"$i\">$i</option>";
   } ?>
			</select>
			<select name="nam">
			<option value="0">Chọn năm</option>
			<?php for ($i = 1930; $i <= 2020; $i++) {
       echo "<option value=\"$i\">$i</option>";
   } ?>
			</select>
		</div>
		<div>
					<select name="ngay">
			<option value="0">Chọn ngày</option>
			<?php for ($i = 1; $i <= 31; $i++) {
				if ($i == 1) echo "<option value=\"$i\" selected>$i</option>";
       			else echo "<option value=\"$i\">$i</option>";
   } ?>
			</select>
			<select name="thang">
			<option value="0">Chọn tháng</option>
			<?php for ($i = 1; $i <= 12; $i++) {
       if ($i == 11) echo "<option value=\"$i\" selected>$i</option>";
	   else echo "<option value=\"$i\">$i</option>";
   } ?>
			</select>
			<select name="nam">
			<option value="0">Chọn năm</option>
			<?php for ($i = 1930; $i <= 2020; $i++) {
       if ($i == 2004) echo "<option value=\"$i\" selected>$i</option>";
	   else echo "<option value=\"$i\">$i</option>";
   } ?>
			</select>
		</div>

		<div class="container">
    		<header class="row"> </header>
    		<nav class="row"> </nav>
    		<div class="row">
        		<main class="col-9"> </main>
        		<aside class="col-3"> </aside>
    		</div>
    		<footer class="row"> </footer>
		</div>
		<div>
			<?php require_once('header.php'); ?>
			<?php require_once('menu.php'); ?>
			<?php require_once('footer.php'); ?>
		</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>