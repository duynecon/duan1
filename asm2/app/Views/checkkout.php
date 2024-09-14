<?php require_once "app/Views/header.php"; ?>
<div class="hrefs">
        <span>
            <a href="#" class="first-a">Trang Chủ</a>
            <span>/</span>
            <a href="" class="last-a">Thanh Toán</a>
        </span>
    </div>

    <section class="main-bill">
        <div class="contact-bill">
            <form action="">
                <div class="thongtin">
                    <div class="col-1">
                        <p>Họ:</p>
                        <input type="text" placeholder="Nhập họ của bạn">
                        <p>Email: </p>
                        <input type="email" placeholder="Nhập email của bạn">
                        
                    </div>
                    <div class="col-1">
                        <p>Tên:</p>
                        <input type="text" placeholder="Nhập tên của bạn">
                        <p>Số Điện Thoại:</p>
                        <input type="text" placeholder="Nhập số điện thoại của bạn">
                        
                    </div>
                </div>
                <div class="diachi">
                    <p>Địa chỉ:</p>
                    <textarea  cols="30" rows="10" placeholder="Nhập địa chỉ nhận hàng"></textarea>
                </div>
            </form>
        </div>
        <div class="form-bill">
            <div class="form-total">
                <h3>Tóm tắt đơn hàng</h3>
                <div class="product-bill">
                    <div class="sanpham">
                        <div class="sp">
                            <h4>Sản phẩm 1</h4>
                            <p>x1</p>
                        </div>
                        <p>$999</p>
                    </div>
                </div>
                <div class="shipping">
                    <div class="sub">
                        <h4>Tổng Tiền</h4>
                        <p>$199</p>
                    </div>
                    <div class="sub">
                        <h4>Phí Giao Hàng</h4>
                        <p>$15</p>
                    </div>
                </div>
                <div class="subtotal">
                    <div class="total">
                        <h4>Tổng Đơn Hàng</h4>
                        <p>$188</p>
                    </div>
                    
                </div>
                
            </div>
            <div class="form-total payments">
                <h3>Phương Thức Thanh Toán</h3>
                
                <div class="thanhtoan">
                    <p>Chọn Phương Thức Thanh Toán: </p>
                    <select name="" id="">
                        <option value="0">Atm</option>
                        <option value="0">Momo</option>
                    </select>
                </div>
                <div class="btn-pay">
                    <button>Thanh Toán</button>
                </div>
            </div>

        </div>
    </section>
<?php require_once "app/Views/footer.php"; ?>