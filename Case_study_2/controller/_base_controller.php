<?php

abstract class BaseController
{
    protected $folder;

    public function __construct()
    {
        $this->folder = $this->getFolder();
    }

    //Trả về tên thư mục
    abstract protected function getFolder();
    protected function render($file_name, $viewData = [], $file_layout_name = "application_layout")
    {
        //Kiểm tra file gọi đến có tồn tại không
        $view_file = "view/$this->folder/$file_name.php";
        if (is_file($view_file)) {
            //Nếu tồn tại file đó thì tạo ra các biến chứa giá trị truyền vào lúc gọi hàm
            extract($viewData);


            //Sau đó lưu giá trị trả về khi chạy file view template với các dữ liệu đó vào 1 biến
            ob_start();
            include_once($view_file);
            $content = ob_get_clean();
            //Sau khi có kết quả đã được lưu vào biến $content, gọi ra template chung của hệ thống
            include_once("view/shared/$file_layout_name.php");
        }
    }
}
