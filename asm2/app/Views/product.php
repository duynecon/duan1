<?php require_once "app/Views/header.php"; ?>

<?php
$sanpham_home = new \app\Models\ProductModel;
$dssp_new = $data["new_product"];
$sp_new = $sanpham_home->sanpham_show($dssp_new);


$catalog_list = $data['catalog_list'];
$html_catalog_list = '';
foreach ($catalog_list as $item) {
    extract($item);
    $link = BASE_PATH . '/product/list/' . $id;
    $html_catalog_list .= '
        <li><a href="' . $link . '">' . $name . '</a></li>
    ';
}


?>

<div class="hrefs">
    <span>
        <a href="#" class="first-a">Trang Chủ</a>
        <span>/</span>
        <a href="" class="last-a">Sản Phẩm</a>
    </span>
</div>

<section class="header-shoppage">
    <h3>Tất Cả Sản Phẩm</h3>
    <div class="sortby">
        <p>Sắp Xếp: </p>
        <select>
            <option value="1">Từ A-Z</option>
            <option value="1">Từ Z-A</option>
            <option value="1">Tăng dần</option>
            <option value="1">Giảm dần</option>
        </select>
    </div>
</section>

<section class="main-shop">
    <div class="category">
        <h3>Danh Mục</h3>
        <ul class="category-item">
            <?= $html_catalog_list ?>
        </ul>
    </div>

    <div class="product">
        <?= $sp_new ?>
    </div>
</section>



<div class="phanTrang">
    <ul class="pagination">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>
</div>

<?php require_once "app/Views/footer.php"; ?>