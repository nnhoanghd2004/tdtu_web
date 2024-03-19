<?php 
$thu=[
   "1"=>"Chủ nhật",
   "2"=>"Thứ hai",
   "3"=>"Thứ ba",
   "4"=>"Thứ tư",
   "5"=>"Thứ năm",
   "6"=>"Thứ sáu",
   "7"=>"Thứ bảy"
]; 
?>
<?php 
    reset($thu);
    while (key($thu) != null) {
        echo "<p>".current($thu)."</p>";
        next($thu);
    }
?>