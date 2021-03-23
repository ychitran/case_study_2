<?php

class User
{
    public $userID;
    public $username;
    private $password;
    public $firstName;
    public $lastName;
    public $address;
    public $city;
    public $position;

    // ================================USER_LIST=======================================
    //Trả về mảng các đối tượng User
    static function all()
    {
        $sql = "SELECT * FROM user";

        $smtp = Database::getInstance()->prepare($sql);
        $smtp->execute();
        //Kiểu dữ liệu là mảng của các mảng liên kết
        $rawData =  $smtp->fetchAll();

        //Chuyển đổi mảng liên kết thành mảng của các User

        $list = [];

        foreach ($rawData as $row) {
            $entity = new User();

            $entity->userID = $row["userID"];
            $entity->username = $row["username"];
            $entity->password = $row["password"];
            $entity->firstName = $row["firstName"];
            $entity->lastName = $row["lastName"];
            $entity->address = $row["address"];
            $entity->city = $row["city"];
            $entity->position = $row["position"];

            $list[] = $entity;
        }

        //Trả về mảng các phần tử
        return $list;
    }

    //============================================ USER SAVE=====================================
    //Thêm dữ liệu vào database
    //Lưu thực thể user vào cơ sở dữ liệu
    public function save()
    {
        $sql = "INSERT INTO user(userID, username, firstName, lastName, address, city, position) 
        VALUES(?, ?, ?, ?, ?, ?, ?)
        ON DUPLICATE KEY UPDATE
        username=?,
        firstName=?,
        lastName=?,
        address=?,
        city=?,
        position=?
        ";
        $smtp = Database::getInstance()->prepare($sql);
        return $smtp->execute([
            $this->userID,
            $this->username,
            $this->firstName,
            $this->lastName,
            $this->address,
            $this->city,
            $this->position,

            $this->username,
            $this->firstName,
            $this->lastName,
            $this->address,
            $this->city,
            $this->position,
        ]);
    }


    //====================================== USER EDIT===================================

    static function edit($userID)
    {
        $sql = "SELECT * FROM user WHERE userID = $userID";

        $smtp = Database::getInstance()->prepare($sql);
        $smtp->execute();

        $rawData = $smtp->fetch();

        //Trả về đối tượng User

        $user = new User();
        $user->userID = $rawData["userID"];
        $user->username = $rawData["username"];
        $user->password = $rawData["password"];
        $user->firstName = $rawData["firstName"];
        $user->lastName = $rawData["lastName"];
        $user->address = $rawData["address"];
        $user->city = $rawData["city"];
        $user->position = $rawData["position"];

        return $user;
    }

    //====================================== USER DELETE===================================

    public function destroy()
    {
        $db = Database::getInstance();
        $req = $db->prepare("DELETE FROM user WHERE userID = $this->userID");
        $req->execute();
    }



    // ==============================LOGIN =============================================================


    //Tìm người dùng với username và password
    static public function findByUsernameAndPassword($username, $password)
    {
        $query = "SELECT * FROM user WHERE username = ? AND password = ?";

        $smtp = Database::getInstance()->prepare($query);
        $smtp->execute([$username, $password]);

        //Type: Assciative Array (Mảng liên kết)

        $rawData = $smtp->fetch();


        //Kiểm tra nếu rawData là false thì trả về null
        if (!$rawData) {
            return null;
        }
        // Trả về đối tượng 
        $user = new User();
        $user->userID = $rawData["userID"];
        $user->username = $rawData["username"];
        $user->firstName = $rawData["firstName"];
        $user->lastName = $rawData["lastName"];
        $user->address = $rawData["address"];
        $user->city = $rawData["city"];
        $user->position = $rawData["position"];

        return $user;
    }
}
