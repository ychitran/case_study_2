<?php
require_once("_base_controller.php");
require_once("models/user.php");

class AdminController extends BaseController
{
    protected function getFolder()
    {
        return "admin";
    }

    public function admin()
    {
        $this->render("admin", [], "admin_layout");
    }

    //===================================================USER START========================================================

    public function user_list()
    {
        $data = User::all();

        $viewData = array("user" => $data);

        $this->render("user_list", $viewData, "admin_layout");
    }
    //========================= ADD USER START===========================================
    public function user_add()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->storeUser();
        } else {
            $this->showAddPage();
        }
    }

    protected function storeUser()
    {
        //Lấy dữ liệu từ form
        $username = $_POST["username"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $position = $_POST["position"];



        //Khởi tạo đối tượng

        $user = new User();
        $user->username = $username;
        $user->firstName = $firstName;
        $user->lastName = $lastName;
        $user->address = $address;
        $user->city = $city;
        $user->position = $position;

        // //Lưu vào database

        $storeSuccessful = $user->save();

        if ($storeSuccessful) {
            $_SESSION["message"] = "Add User Success";
        }


        $this->showAddPage();
    }
    protected function showAddPage()
    {
        $this->render("user_add", [], "admin_layout");
    }
    //========================= ADD USER END===========================================

    //===============================  EDIT USER START==================================


    public function user_edit()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->editUser();
        } else {
            $this->showEditPage();
        }
    }

    protected function editUser()
    {
        //Lấy ID của sản phẩm

        $userID = $_GET["userID"];
        //Lấy phần tử từ trong dữ liệu
        $user = User::edit($userID);

        //Lấy dữ liệu từ form
        $user->username = $_POST["username"];
        $user->firstName = $_POST["firstName"];
        $user->lastName = $_POST["lastName"];
        $user->address = $_POST["address"];
        $user->city = $_POST["city"];
        $user->position = $_POST["position"];


        $storeSuccessful = $user->save();

        if ($storeSuccessful) {
            $_SESSION["message"] = "Update User Success";
        }

        //Điều hướng lại action
        $this->showEditPage();
    }

    protected function showEditPage()
    {
        //Lấy ID của sản phẩm

        $userID = $_GET["userID"];

        //Lấy thông tin người dùng 

        $user = User::edit($userID);

        $viewData = array("user" => $user);

        $this->render("user_edit", $viewData, "admin_layout");
    }



    //============================== DELETE USER====================================

    public function user_delete()
    {
        // Lấy được id phần tử từ URL
        $userID = $_GET["userID"];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Lấy được phần tử từ CSDL
            $user = User::edit($userID);

            // Xóa phần tử khỏi CSDL
            $user->destroy();

            // Điều hướng về trang danh sách sản phẩm
            header("Location:?controller=admin&action=user_list");
        }
    }


    //===================================================USER END========================================================



}
