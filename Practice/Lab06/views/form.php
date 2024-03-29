<?php

$id = $_GET["id"] ?? '';
$action = "add";
$productName = '';
$productDesc = '';
$productPrice = '';
if ($id) {
    require_once('../configs/db.class.php');
    
    $db = new DB();
    $productByID = $db->query_select("select * from products where id = '".$id."'");
    foreach ($productByID as $row) {
        $action = "update";
        $productName = $row["productName"];
        $productDesc = $row["productDesc"];
        $productPrice = $row["productPrice"];
    }
} 

?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form HTML Bootstrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Thông tin sản phẩm</h1>
        <form action="../controllers/formController.php" method="post">
            <?php 
            if($id) {
                echo '<input class="d-none " type="text" name="id" value="'.$id.'"> ';
            }
            echo '<input class="d-none " type="text" name="action" value="'.$action.'">';
            ?>
            <div class="mb-3">
                <label for="productName" class="form-label">Tên sản phẩm:</label>
                <input type="text" class="form-control" id="productName" name="productName"
                    placeholder="Nhập tên sản phẩm" <?php if ($productName) echo 'value="'.$productName.'"';?>>

            </div>
            <div class="mb-3">
                <label for="productDesc" class="form-label">Mô tả sản phẩm:</label>
                <textarea class="form-control" id="productDesc" name="productDesc" rows="3"
                    placeholder="Nhập mô tả sản phẩm"><?php if ($productDesc) echo $productDesc;?></textarea>
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Giá sản phẩm:</label>
                <input type="number" class="form-control" id="productPrice" name="productPrice"
                    placeholder="Nhập giá sản phẩm" <?php if ($productPrice) echo 'value="'.$productPrice.'"';?>>
            </div>
            <button type="submit" class="btn btn-primary">
                <?php 
                if ($id) echo "Save";
                else echo "Add";
                ?>
            </button>
        </form>
    </div>
</body>

</html>