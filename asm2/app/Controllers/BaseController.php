<?php
    namespace app\Controllers;
    class BaseController {
        protected $data = [];
        protected $title = "";
        function renderView($view, $title, $data){
            $viewfile =  'app/Views/'.$view.'.php';
            if(is_file(($viewfile))) {
                include $viewfile;
            } else {
                echo 'Trang Này Không Tồn Tại !';
            }
        }
    }

?>