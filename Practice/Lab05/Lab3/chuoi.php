<?php
$soKyTu = $_GET['sokytu'] + 0;
if ($soKyTu == 0) {
    $soKyTu = 8;
}
$soNgauNhien = random_int(0, 99999);
$chuoiNgauNhien = md5($soNgauNhien);
$matKhauNgauNhien = substr($chuoiNgauNhien, 0, $soKyTu);
echo "<p>Mật khẩu ngẫu nhiên: $matKhauNgauNhien</p>";
echo "<p>Mật khẩu md5: " . md5($matKhauNgauNhien) . "</p>";
echo "<p>Mật khẩu sha1: " . sha1($matKhauNgauNhien) . "</p>";
echo "<p>Mật khẩu base64: " . base64_encode($matKhauNgauNhien) . "</p>";
echo "<p>Mật khẩu chữ hoa: " . strtoupper($matKhauNgauNhien) . "</p>";
?>


