<?php
$soluong = [491 => 2, 501 => 3 , 495 => 5] ;
$tensp = [491 => "HTC M10", 501 => "Galaxy S8" , 495 => "OPPO A92"] ;
$gia = [491 => 2000000, 501 => 3000000 , 495 => 2500000] ;
?>

<table border='1' width='500'>
    <?php while (key($soluong) != null) { ?>
    <tr>
        <td><?php echo current($soluong); ?></td>
        <td><?php echo current($tensp); ?></td>
        <td><?php echo current($gia); ?></td>
    </tr>
        
    <?php 
        next($soluong);
        next($tensp);
        next($gia);
    }
    ?>
</table>