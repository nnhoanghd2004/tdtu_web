<?php
$ngay = $_GET['ngay'];
$arr = explode("/", $ngay);
if (checkdate($arr[1], $arr[0], $arr[2]) == true) {
    echo "<p>Ngày hợp lệ</p>";
} else {
    echo "<p>Ngày không hợp lệ</p>";
}

$n = $arr[2]."-".$arr[1]."-".$arr[0]; 
$t = strtotime($n); 
$thu = date("w", $t); 

switch ($thu) {
    case 0: $tenthu="Chủ nhật"; break;
    case 1: $tenthu="Thứ hai"; break;
    case 2: $tenthu="Thứ ba"; break;
    case 3: $tenthu="Thứ tư"; break;
    case 4: $tenthu="Thứ năm"; break;
    case 5: $tenthu="Thứ sáu"; break;
    case 6: $tenthu="Thứ bảy"; break;
}

echo "<p>Thứ trong tuần của ngày $ngay là $tenthu, </p>";
echo "<p>Ngày trong năm của ngày $ngay là ", date("z", $t), "</p>";

?>
