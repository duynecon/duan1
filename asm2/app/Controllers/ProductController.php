<?php

namespace app\Controllers;

use app\Models\ProductModel;
use app\Models\CatalogModel;

session_start();
ob_start();



class ProductController extends BaseController
{
    private $pro;
    private $cat;
    function __construct()
    {
        $this->pro = new ProductModel;
        $this->cat = new CatalogModel;
    }

    function product()
    {
        $this->title = "Sản Phẩm Kumo";
        $url = isset($_GET['url']) ? "/" . rtrim($_GET['url'], '/') : '/index';
        $url_array = explode("/", $url);
        if (count($url_array) > 0) {
            $idcatalog = $url_array[count($url_array) - 1];
            if (is_numeric($idcatalog) && $idcatalog > 0) {
                $idcatalog = $idcatalog;
            } else {
                $idcatalog = 0;
            }
        } else {
            $idcatalog = '';
        }

        array_search('id_catalog', $url_array);
        $key_seacrh = array_search('search', $url_array);
        if ($key_seacrh !== false && isset($url_array[$key_seacrh + 1])) {
            $kyw = $url_array[$key_seacrh + 1];
        } else {
            $kyw = '';
        }

        $limit = 13;
        $soTrang = 1;
        $dssp_new = $this->pro->sanpham_get_all_catalog($kyw, $idcatalog, $limit, $soTrang);
        $catalog_list = $this->cat->catalog_get_all();
        $this->data["new_product"] = $dssp_new;
        $this->data["catalog_list"] = $catalog_list;
        $this->renderView('product', $this->title, $this->data);
    }


    function detail()
    {
        $url = isset($_GET['url']) ? "/" . rtrim($_GET['url'], '/') : '/index';
        $url_array = explode("/", $url);
        if (count($url_array) > 0) {
            $id = $url_array[count($url_array) - 1];
        } else {
            $id = "";
        }

        $danhmucid = $this->pro->get_danhmuc_id($id);
        $dssp_lienquan =$this->pro->sanpham_lienquan($danhmucid,$id,4);

        $get_sp = $this->pro->sanpham_get_one($id);
        if (is_array($get_sp) && is_array($dssp_lienquan)) {
            extract($get_sp);
            extract($dssp_lienquan);
            $this->title = $name;
            $this->data["lienquan"] = $dssp_lienquan;
            $this->data["detail"] = $get_sp;
            $this->renderView('productdetail', $this->title, $this->data);
        } else {
            header('location: index.php');
        }
    }

    function addcart()
    {
        $this->title = "Giỏ hàng";

        if (isset($_POST['addcart'])) {
            $img = $_POST['img'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $id = $_POST['id'];
            $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : 1;

            // Kiểm tra nếu giỏ hàng chưa được khởi tạo, thì khởi tạo
            if (!isset($_SESSION['giohang'])) {
                $_SESSION['giohang'] = array();
            }

            // Kiểm tra sản phẩm đã tồn tại trong giỏ hàng hay chưa
            if (isset($_SESSION['giohang'][$id])) {
                // Nếu sản phẩm đã tồn tại, cập nhật số lượng
                $_SESSION['giohang'][$id]['quantity'] += $quantity;
            } else {
                // Nếu sản phẩm chưa tồn tại, thêm sản phẩm mới vào giỏ hàng
                $_SESSION['giohang'][$id] = array(
                    "id" => $id,
                    "img" => $img,
                    "name" => $name,
                    "quantity" => $quantity,
                    "price" => $price
                );
            }
        }

        $this->renderView("cart", $this->title, $this->data);
    }

    function delcart()
    {
        $url = isset($_GET['url']) ? "/" . rtrim($_GET['url'], '/') : '/index';
        $url_array = explode("/", $url);
        if (count($url_array) > 0) {
            $id = $url_array[count($url_array) - 1];
        } else {
            $id = "";
        }
        if (isset($_SESSION['giohang'][$id])) {
            unset($_SESSION['giohang'][$id]);
        }
        $this->renderView("cart", $this->title, $this->data);
    }
}
