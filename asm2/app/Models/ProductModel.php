<?php

namespace app\Models;

class ProductModel
{
    private $db;

    function __construct()
    {
        $this->db = new DatabaseModel;
    }

    function sanpham_get_all($seller, $limit)
    {
        $sql = "select * from sanpham where 1";
        if ($seller > 0) {
            $sql .= " order by bestseller desc limit " . $limit;
        } else {
            $sql .= " order by id asc limit " . $limit;
        }
        return $this->db->get_all($sql);
    }


    function sanpham_show($dssp)
    {
        $html_dssp_home = '';
        foreach ($dssp as $item) {
            extract($item);
            $link = BASE_PATH . "/product/detail/" . $id;
            $html_dssp_home .= '
            <div class="row">
                <form action="'.BASE_PATH.'/cart" method="post">
                    <div class= "container-img">
                        <a href="' . $link . '">
                        <img src="' . BASE_PATH . '/public/img/' . $img . '" alt="">
                    </a>
                    
                    </div>
                    
                    <div class="price">
                        <a href="' . $link . '">
                            <h4>' . $name . '</h4>
                        </a>
                        <div class="pribut">
                            <p>' . number_format($price, 0, '', '.') . "đ" . '</p>
                            <button type="submit" name="addcart" > Thêm giỏ hàng </button>
                        </div>
                        
                    </div>
                    
            
                    <input type="hidden" name="img" value="'.$img.'">
                    <input type="hidden" name="name" value="'.$name.'">
                    <input type="hidden" name="price" value="'.$price.'">
                    <input type="hidden" name="id" value="'.$id.'">
                </form>
            </div>';
            
        }
        return $html_dssp_home;
    }


    function sanpham_get_all_catalog($kyw,$idcatalog, $limit, $soTrang)
    {
        
        $sql = "select * from sanpham where 1";
        if ($idcatalog > 0) {
            $sql .= " AND danhmuc_id =" . $idcatalog;
        }

        if($kyw!=""){
            $sql.=" AND name LIKE '%".$kyw."%'";
        }

        $batdau = ($soTrang - 1) * $limit;

        $sql .= " order by id desc limit " . $batdau . ", " . $limit . "";
        return $this->db->get_all($sql);
    }


    

    function sanpham_get_one($id)
    {
        $sql = "select * from sanpham where id= ?";
        return $this->db->get_one($sql, $id);
    }

    function sanpham_lienquan($iddm,$id,$limi){
        $sql = "SELECT * FROM sanpham WHERE danhmuc_id=? AND id<>? ORDER BY id DESC limit ".$limi;
        return $this->db->get_all($sql,$iddm,$id);
    }

    function get_danhmuc_id($id){
        $sql = "SELECT danhmuc_id FROM sanpham WHERE id=?";
        return $this->db->get_all_value($sql,$id);
    }
}
