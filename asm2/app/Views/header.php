<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?= BASE_PATH ?>/public/css/style.css">
    <title>
        <?php
        if ($title != '') echo $title;
        else echo 'HEYBAG Shop'
        ?>
    </title>
</head>

<body>
    <header>
        <a href="#" class="logo"><img src="<?= BASE_PATH ?>/public/img/logoheybag.png" alt=""></a>

        <ul class="nav-menu">
            <li><a href="<?= BASE_PATH ?>/">Trang chủ</a></li>
            <li><a href="<?= BASE_PATH ?>/product/list">Sản phẩm</a></li>
            <li><a href="<?= BASE_PATH ?>/product/list">Về chúng tôi</a></li>

            <li><a href="#">Liên hệ</a></li>
        </ul>

        <div class="nav-icon">

            <i class='bx bx-search'></i>

            <form class="form-search" action="search.php" method="post">
                <div class="close-btn">
                    <h3>TÌM KIẾM</h3>
                    <h1 class="closeSearch">X</h1>
                </div>
                
                <input type="text" placeholder="Tìm kiếm sản phẩm" name="kyw">
                <button type="submit" name="btnSearch"><i class='bx bx-search'></i></button>
            </form>


            <a href="<?= BASE_PATH ?>/cart"><i class='bx bx-cart'></i></a>

            <ul class="menu" id="menu_user">
                <li><a href="#"><i class='bx bx-user'></i></a>
                    <ul class="submenu">
                        <li><a href="<?= BASE_PATH ?>/login">Đăng nhập</a></li>
                        <li><a href="<?= BASE_PATH ?>/register">Đăng ký</a></li>
                    </ul>
                </li>
            </ul>


        </div>
    </header>