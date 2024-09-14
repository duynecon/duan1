<?php require_once "app/Views/header.php"; ?>


<?php 

    $sanpham_home = new \app\Models\ProductModel;
    // Hiển Thị Sản Phẩm Mới
    $dssp_new = $data["new_product"];
    $sp_new = $sanpham_home->sanpham_show($dssp_new);

    // Hiển Thị Sản Phẩm Bán Chạy
    $sp_selling = $data["selling_product"];
    $sp_seller = $sanpham_home->sanpham_show($sp_selling);
    

?>
<section class="main-home">
        <img src="<?= BASE_PATH ?>/public/img/banner1.png" alt="">
    </section>

    <section class="trending-product" id="trending">
        <div class="center-text">
            <h2>Sản phẩm <span>Mới</span></h2>
        </div>
        <div class="products">
            <?=$sp_new ?>
        </div>
    </section>

    <!-- client-review-section -->
    <section class="about-me">
        <div class="abouts">
            <h3>Về chúng tôi</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, tempora <br> esse? Rerum veniam praesentium omnis nulla qui unde architecto asperiores facere adipisci 
                rem quibusdam, provident <br> optio pariatur quam vitae quaerat.</p>

            <h2>MANDO Shop</h2>
            <p>Shop thời trang</p>
        </div>
    </section>

<!-- Sản phẩm bán chạy -->
    <section class="trending-product" id="trending">
        <div class="center-text">
            <h2>Sản phẩm <span>Bán chạy</span></h2>
        </div>
        <div class="products">
            <?=$sp_seller?>
        </div>
    </section>

<?php require_once "app/Views/footer.php"; ?>