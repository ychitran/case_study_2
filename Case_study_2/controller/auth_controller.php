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
            //Thực hiện...
        } else {
            //Thông báo lỗi
            $_SESSION["Invalid_credentials"] = "Username of password is not match";

            header("Location:?auth");
        }

        //Đăng nhập thất bại
    }
    protected function showLoginPage()
    {
        $this->render('auth', [], 'auth_layout');
    }
}
