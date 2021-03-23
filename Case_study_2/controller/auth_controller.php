<?php
require_once("controller/_base_controller.php");
require_once("models/user.php");

class AuthController extends BaseController
{
    protected function getFolder()
    {
        return "auth";
    }

    function auth()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->submitLogin();
        } else {
            $this->showLoginPage();
        }
    }

    function logOut()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //Xoá thông tin đăng nhập khỏi session
            unset($_SESSION["auth"]);
            header("Location:?controller=auth&action=auth");
        }
    }

    protected function submitLogin()
    {
        //Lấy thông tin đăng nhâp từ Client
        $username = $_POST["username"];
        $password = $_POST["password"];

        //Kiểm tra username và password có hợp lệ hay không
        $user = User::findByUsernameAndPassword($username, $password);
        //Đăng nhập thành công
        if ($user) {
            //Thực hiện lưu thông tin người dùng đã đăng nhập vào session
            $_SESSION["auth"] = $user;
            header("Location:?controller=admin&action=admin");
        } else {
            //Thông báo lỗi
            $_SESSION["Invalid_credentials"] = "Username of password is not match.";

            header("Location:?controller=auth&action=auth");
        }

        //Đăng nhập thất bại
    }
    protected function showLoginPage()
    {

        if (isset($_SESSION["auth"])) {
            header("Location:?controller=admin&action=admin");
        }
        $this->render('auth', [], 'auth_layout');
    }
}
