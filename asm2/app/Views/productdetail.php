<?php require_once "app/Views/header.php"; ?>

<?php

extract($data["detail"]);
$sanpham_home = new \app\Models\ProductModel;
$dssp_lq = $data["lienquan"];
$sp_lienquan = $sanpham_home->sanpham_show($dssp_lq);

?>

<div class="hrefs">
    <span>
        <a href="#" class="first-a">Trang Chủ</a>
        <span>/</span>
        <a href="" class="last-a">Chi Tiết Sản Phẩm</a>
    </span>
</div>

<section class="product-detail">
    <form action="<?=BASE_PATH ?>/cart" method="post">
        <div class="product-main">
            <img src="<?=BASE_PATH?>/public/img/<?= $img ?>" alt="">
        </div>

        <div class="detail">
            <h1><?= $name ?></h1>
            <h4><?= number_format($price, 0, '', '.') . "đ" ?></h4>
            <div class="quantity">
                <p>Số lượng:</p>
                <input type="number" name="quantity" value="1" min="0">
                
            </div>
            <div class="btn-cart-shop">
                <button type="submit" name="addcart" class="addcart">Thêm Vào Giỏ</button>
                <button class="shopnow">Mua Ngay</button>
                <input type="hidden" name="img" value="<?= $img ?>">
                <input type="hidden" name="name" value="<?= $name ?>">
                <input type="hidden" name="price" value="<?= $price ?>">
                <input type="hidden" name="id" value="<?= $id?>">
            </div>

            <h3>Mô tả</h3>
            <div class="text-mota"><?= $mota ?></div>
        </div>
    </form>

</section>

<section class="comment-products">
    <h2>Đánh Giá *</h2>
    <div class="container">
        <div class="text-review">
            <div class="user-cm">
                <img src="public/img/team1.jpg" alt="">
                <div class="text-com">
                    <h4 class="name-user">Hòa</h4>
                    <p class="textcomment">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum enim nam repellat quidem laudantium, maiores quam aperiam sit molestias ex eligendi
                        eaque saepe maxime vero eius dolor perferendis qui? Sit.</p>
                </div>
            </div>


        </div>
        <form action="" class="form-review">
            <p>Họ Tên</p>
            <input type="text">
            <p>Email</p>
            <input type="text">
            <p>Đánh giá của bạn</p>
            <textarea cols="30" rows="5"></textarea>
            <button>Gửi</button>
        </form>

    </div>


</section>

<section class="trending-product" id="trending">
    <div class="center-text">
        <h2>Sản phẩm <span>Liên Quan</span></h2>
    </div>
    <div class="products">
        <?=$sp_lienquan?>
    </div>
</section>

<?php require_once "app/Views/footer.php"; ?>