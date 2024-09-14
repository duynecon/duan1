<?php require_once "app/Views/header.php"; ?>


<div class="hrefs">
    <span>
        <a href="#" class="first-a">Trang Chủ</a>
        <span>/</span>
        <a href="" class="last-a">Đăng Nhập</a>
    </span>
</div>

<section class="form-login-register">
        
        <form action="#" method="POST" class="login-form">
            <h2>Đăng Nhập</h2>
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Nhập tên tài khoản..." required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu.." required>
            </div>
            <button type="submit" class="btn-form" name="dangnhap">Đăng Nhập</button>
            <p class="register-link">Bạn chưa có tài khoản? <a href="#">Đăng ký ở đây</a></p>
        </form>
    </section>

<?php require_once "app/Views/footer.php"; ?>