<?php
//Khai báo sử dụng session
session_start();

//Lẩy request controller và action
$controller = $_GET["controller"] ?? null;
$action = $_GET["action"] ?? null;



//Kiểm tra dữ liệu từ form gửi lên nếu đăng nhập thành công thì show ra còn logout thì NULL

// if (!isset($_SESSION["auth"]) {
//     header("Location:?controller=auth&action=auth");
// }
// var_dump($_SESSION["auth"] ?? NULL);

//Kết nối mySQL
require_once("database.php");

$connect = Database::getInstance();


//Kiểm tra xem đường dẫn file Controller có tồn tại khô/ng
if (file_exists("controller/$controller" . "_controller.php")) {
    //Nhúng file Controller
    require_once("controller/$controller" . "_controller.php");
    //Nếu không tồn tại, dẫn mặc định trang web về home
} else {
    $controller = "home";
    $action = "home";
    require_once("controller/$controller" . "_controller.php");
}


//Khai báo tên class trong Controller (chỉ dùng khi khai báo Class)
$controllerName = ucwords($controller) . "Controller";

//Khởi tạo Controller
$controllerInstance = new $controllerName();
//Gọi Action
$controllerInstance->$action();

//Thử Connection sql;

// $sql = "SELECT * FROM customer";

// $smtp = Database::getInstance()->prepare($sql);
// $smtp->execute();

// var_dump($smtp->fetchAll());
