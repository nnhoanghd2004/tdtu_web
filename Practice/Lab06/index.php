<?php
require_once("./configs/db.class.php");
$db = new DB();
$db->connect();
$products = $db->query_select("select * from products");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <!-- <form action=""></form> -->
        <a href="./views/form.php">Add Product</a>
        <div class="row">
            <?php
            foreach ($products as $product) {
                echo '<div class="col-12 col-sm-6 col-lg-3">';
                    echo '<div class="card" style="width: 100%;">';
                        echo '<div style="width: 100%; height: 200px; background-color: gray; border-top-left-radius: 4px; border-top-right-radius: 4px;"></div>';
                        echo '<div class="card-body">';
                            echo '<h5 class="card-title">'.$product["productName"].'</h5>';
                            echo '<p class="card-text text-truncate ">'.$product["productDesc"].'</p>';
                            echo '<p class="card-text">'.$product["productPrice"].'</p>';
                            echo '<a href="./views/form.php?id='.$product["id"].'" class="btn btn-warning">Edit</a>';
                            echo '<a href="./controllers/formController.php?id='.$product["id"].'"class="btn btn-danger mx-2" >Delete</a>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
    const handler
    </script>
</body>

</html>