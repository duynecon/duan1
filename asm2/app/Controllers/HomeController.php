<?php
namespace app\Controllers;
use app\Models\ProductModel;

class HomeController extends BaseController{
    private $ProductModel;
    function __construct(){
        $this->ProductModel = new ProductModel;
    }
    function index() {
        $this->title = "Trang chủ";
        $dssp_new = $this->ProductModel->sanpham_get_all(0, 8);
        $dssp_selling = $this->ProductModel->sanpham_get_all(1, 4);
        $this->data["new_product"] = $dssp_new;
        $this->data["selling_product"] = $dssp_selling;
        $this->renderView('home', $this->title,$this->data);
    }


}