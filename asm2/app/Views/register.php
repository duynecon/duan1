<?php 

require_once "app/Views/header.php"; ?>



<div class="hrefs">
    <span>
        <a href="#" class="first-a">Trang Chủ</a>
        <span>/</span>
        <a href="" class="last-a">Đăng Ký</a>
    </span>
</div>

<section class="form-login-register">

        <form action="#" method="POST" class="login-form">
            <h2>Đăng Ký</h2>
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Nhập tên tài khoản của bạn.." required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu của bạn.." required>
            </div>
            <div class="input-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="name" placeholder="Nhập tên của bạn.." required>
            </div>
            <div class="input-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" placeholder="Nhập số điện thoại của bạn.." required>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Nhập email của bạn" required>
            </div>
            <div class="input-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" placeholder="Nhập địa chỉ của bạn.." required>
            </div>
            <button type="submit" class="btn-form" name="dangky">Đăng Ký</button>

          
            <p class="register-link">Bạn đã có tài khoản? <a href="#">Đăng nhập ở đây</a></p>
        </form>

       
    </section>
    

<?php require_once "app/Views/footer.php"; ?>