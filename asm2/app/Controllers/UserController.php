<?php
    namespace app\Controllers;
    use app\Models\UserModel;
    class UserController extends BaseController{
        private $user;
        function __construct(){
            $this->user = new UserModel;
        }
        function regester(){
            $this->title="Đăng Ký";
            if(isset($_POST['dangky'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $name = $_POST['name'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                
                if($this->user->register($username, $password, $name, $address, $email, $phone)){
                    echo ' <p class="text-align: center; color:red"> Bạn đã đăng ký thành công ! </p>';
                }else{
                    echo ' <p style="text-align: center; color:red"> Đăng ký thất bại ! </p>';
                }
            }
            $this->renderView("register",$this->title, $this->data);
        }
        function login(){
            $this->title="Đăng Nhập";
            if(isset($_POST['dangnhap'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                
                $user = $this->user->login($username,$password);
                if ($user['role'] == 1) {
                    $_SESSION['user'] = $user;
                        header('location: admin/index.php');
                   }else{
                        $_SESSION['user'] = $user;
                        header('location: index.php');
                }
            }
            $this->renderView("login",$this->title, $this->data);
        }
    }
?>