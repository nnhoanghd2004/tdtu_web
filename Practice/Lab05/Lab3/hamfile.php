<?php

// Tiếp nhận tham số từ địa chỉ trang
$hoten = $_GET['hoten'];
$namsinh = $_GET['namsinh'];
$phai = $_GET['phai'];

// Xử lý các biên mới tiếp nhận
$hoten = trim(strip_tags($hoten)); // Loại bỏ khoảng trắng và tag html, chuyển đổi thành chữ hoa đầu mỗi từ
settype($namsinh, "int"); // Chuyển đổi năm sinh sang kiểu số
settype($phai, "int"); // Chuyển đổi phái sang kiểu số

// Xử lý giá trị phái
if ($phai == 0) {
  $phai = "Nữ";
} else {
  $phai = "Nam";
}

echo "Họ tên: " . $hoten . "<br>";
echo "Năm sinh: " . $namsinh . "<br>";
echo "Phái: " . $phai . "<br>";

$filename = "thongtin.txt";

if (file_exists($filename)) {
  unlink($filename);
  echo "Đã xóa file\n";
}

$hoten = trim($hoten); 
$hoten = ucwords($hoten);

if ($hoten != "" && $namsinh > 0) {
  $str = "Họ tên: $hoten\r\n";
  $str .= "Phái: " . ($_GET['phai'] == 0 ? "Nữ" : "Nam") . "\r\n";
  file_put_contents($filename, $str);

  echo "Đã tạo file xong";
} else {
  echo "Dữ liệu đầu vào không hợp lệ";
}

?>
