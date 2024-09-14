<?php
    namespace app\Models;
    
    class UserModel{
        private $db;
        function __construct(){
            $this->db = new DatabaseModel;          
        }

        function register($username, $password, $name, $address, $email, $phone){
            $sql = "INSERT INTO `taikhoan` (`username`, `password`, `name`, `address`, `email`,  `phone`, `role`) 
            VALUES ('" . $username . "', '" . $password . "', '" . $name . "', '" . $address . "', '" . $email . "', '" . $phone . "', '0')";
            return $this->db->getRegester($sql);
        }
        function login($username,$password){
            $sql = "SELECT * FROM `taikhoan` WHERE username = '" . $username . "' AND password = '" . $password . "'";
            return $this->db->get_one($sql);
        }
    }
?>