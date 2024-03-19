<?php
// Bắt đầu phiên
session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $hobbies = $_POST['hobbies'];
    $avatar = $_FILES['avatar'];
    $job = $_POST['job'];
    $description = $_POST['description'];


?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị thông tin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>Thông tin đăng ký</h1>
    <table class="table table-bordered">
        <tr>
            <th>Tên truy cập</th>
            <td><?php echo $username ?></td>
        </tr>
        <tr>
            <th>Mật khẩu</th>
            <td><?php echo $password ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $email ?></td>
        </tr>
        <tr>
            <th>Phái</th>
            <td><?php echo $gender ?></td>
        </tr>
        <tr>
            <th>Sở thích</th>
            <td>
                <?php
                if (is_array($hobbies)) {
                    foreach ($hobbies as $hobby) {
                        echo $hobby . ", ";
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <th>Hình ảnh</th>
            <td>
                <?php
                if ($avatar['error'] == 0) {
                    echo "<img src='uploads/" . $avatar['name'] . "' width='100' />";
                }
                ?>
            </td>
        </tr>
        <tr>
            <th>Nghề nghiệp</th>
            <td><?php echo $job ?></td>
        </tr>
        <tr>
            <th>Giới thiệu bản thân</th>
            <td><?php echo $description ?></td>
        </tr>
    </table>
</body>
</html>
