<?php
namespace app\Models;
class CatalogModel {
    private $db;

    function __construct () {
        $this->db=new DatabaseModel;
    }
    function catalog_get_all() {
        $sql = "select * from danhmuc order by id desc";
        return $this->db->get_all($sql);
    }
}  
?>