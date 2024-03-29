<?php
    require_once("db.class.php");
    $db = new DB();
    $db->connect();
    $result = $db->query_execute("select * from products");
    $resultArray = $db->query_select("select * from products");
    while ($row = $result->fetch_assoc()) {
            echo "Product Name: " . $row["productName"] . "<br>";
            echo "Description: " . $row["productDesc"] . "<br>";
            echo "Price: " . $row["productPrice"] . "<br>";
            echo "<hr>"; // Separator between products
    }
    
    foreach ($resultArray as $row) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Product Name: " . $row["productName"] . "<br>";
        echo "Description: " . $row["productDesc"] . "<br>";
        echo "Price: " . $row["productPrice"] . "<br>";
        echo "<hr>"; // Separator between products 
    }
?>