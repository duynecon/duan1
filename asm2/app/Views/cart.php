<?php require_once "app/Views/header.php"; ?>

<div class="hrefs">
    <span>
        <a href="#" class="first-a">Trang Chủ</a>
        <span>/</span>
        <a href="" class="last-a">Giỏ Hàng</a>
    </span>
</div>

<section class="main-cart">
    <table class="container-cart">
        <thead>
            <tr>
                <th>Sản Phẩm</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                <th>Xóa</th>
            </tr>

        </thead>
        <tbody>
            <?php
            $total = 0;
            if (isset($_SESSION['giohang'])) {
                foreach ($_SESSION['giohang'] as  $item) {
                    extract($item);
                    $subtotal = (int)$price * (int)$quantity;
                    $total += $subtotal;
                    
                    echo '
                        <tr>
                            <td class="body-cart-img">
                                <img src="'.BASE_PATH.'/public/img/' . $img . '" alt="">
                                <p>' . $name . '</p>
                            </td>
                            <td>' .number_format($price, 0, '', '.') . "đ" . '</td>
                            <td><input type="number" name="quantity" value="' . $quantity . '" min="0"> </td>
                            <td>' .number_format($subtotal, 0, '', '.') . "đ" .  '</td>
                            <td><a href ="'.BASE_PATH.'/delcart/'.$id.'"><i class="bx bx-trash"></i></a></td>
                        </tr>';
                        
                }
                
            }
            
            ?>

        </tbody>

    </table>
    <div class="form-cart">
        <form action="" class="code-sale">
            <input class="text-code" type="text" placeholder="Code">
            <button>Nhập</button>
        </form>
        <div class="form-total">
            <h3>Tổng Đơn Hàng</h3>

            <div class="shipping">
                <div class="sub">
                    <h4>Tổng Tiền</h4>
                    <p><?= number_format($total, 0, '', '.') . "đ"?></p>
                </div>
                <div class="sub">
                    <h4>Phí Giao Hàng</h4>
                    <p>0đ</p>
                </div>
            </div>
            <div class="subtotal">
                <div class="total">
                    <h4>Tổng Đơn Hàng</h4>
                    <p><?= number_format($total, 0, '', '.') . "đ"?></p>
                </div>
                <button><a href="index.php?page=bill">Đặt Hàng</a></button>
            </div>

        </div>
    </div>
</section>

<?php require_once "app/Views/footer.php"; ?>