<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Tìm kiếm</h1>
        <form action="xulytimkiem.php" method="get">
            <div class="input-group mb-3">
                <input type="text" name="tukhoa" class="form-control" placeholder="Nhập từ khóa" aria-label="Nhập từ khóa">
                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
            </div>
        </form>
    </div>
    <div class="container">
        <h1>Mã hóa ký tự</h1>
        <form action="chuoi.php" method="get">
            <div class="input-group mb-3">
                <input type="text" name="sokytu" class="form-control" placeholder="Số ký tự" aria-label="số ký tự">
                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
            </div>
        </form>
    </div>
    <div class="container">
        <h1>Ngày tháng năm</h1>
        <form action="ngay.php" method="get">
            <div class="input-group mb-3">
                <input type="text" name="ngay" class="form-control" placeholder="Ngày theo dạng DD/MM/YYYY" aria-label="Ngày theo dạng DD/MM/YYYY">
                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
            </div>
        </form>
    </div>
    <div class="container">
        <h1>Form đăng ký</h1>
        <form action="hamfile.php" method="get">
            <div class="mb-3">
                <label for="hoten" class="form-label">Họ tên:</label>
                <input type="text" class="form-control" id="hoten" name="hoten" required>
            </div>
            <div class="mb-3">
                <label for="namsinh" class="form-label">Năm sinh:</label>
                <input type="number" class="form-control" id="namsinh" name="namsinh" required>
            </div>
            <div class="mb-3">
                <label for="phai" class="form-label">Giới tính:</label>
                <select class="form-select" id="phai" name="phai" required>
                    <option value="">Chọn giới tính</option>
                    <option value="1">Nam</option>
                    <option value="0">Nữ</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Gửi</button>
        </form>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Đăng nhập</div>
                    <div class="card-body">
                        <form action="xulylogin.php" method="post">
                            <div class="form-group">
                                <label for="username">Tên đăng nhập</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="rememberme" name="rememberme">
                                <label for="rememberme" class="form-check-label">Ghi nhớ đăng nhập</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Đăng nhập</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

    <h1>Đăng ký thành viên</h1>
    <form action="dangky.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="username">Tên truy cập:</label>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="repassword">Nhập lại mật khẩu:</label>
                        <input type="password" id="repassword" name="repassword" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gender">Phái:</label>
                        <div class="form-check">
                            <input type="radio" id="male" name="gender" value="Nam" checked>
                            <label for="male" class="form-check-label">Nam</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="female" name="gender" value="Nữ">
                            <label for="female" class="form-check-label">Nữ</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hobbies">Sở thích:</label>
                        <div class="form-check">
                            <input type="checkbox" id="nhinmua" name="hobbies[]" value="Nhìn mưa rơi">
                            <label for="nhinmua" class="form-check-label">Nhìn mưa rơi</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="nghechimhot" name="hobbies[]" value="Nghe chim hót">
                            <label for="nghechimhot" class="form-check-label">Nghe chim hót</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="ngammaybay" name="hobbies[]" value="Ngắm mây bay">
                            <label for="ngammaybay" class="form-check-label">Ngắm mây bay</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="avatar">Hình ảnh:</label>
                        <input type="file" id="avatar" name="avatar" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label for="job">Nghề nghiệp:</label>
                        <select id="job" name="job" class="form-control">
                            <option value="">Chọn nghề nghiệp</option>
                            <option value="Sinh viên">Sinh viên</option>
                            <option value="Nhân viên văn phòng">Nhân viên văn phòng</option>
                            <option value="Giáo viên">Giáo viên</option>
                            <option value="Bác sĩ">Bác sĩ</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="description">Giới thiệu bản thân:</label>
                <textarea id="description" name="description" class="form-control" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Đăng ký</button>
        </div>
    </form>
</div>
</body>
</html>
