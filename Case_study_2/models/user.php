<?php

class User
{
    public $userID;
    public $username;
    public $password;
    public $firstName;
    public $lastName;
    public $address;
    public $city;
    public $position;

    //Tìn người dùng với username và password
    static public function findByUsernameAndPassword($username, $password)
    {
        $query = "SELECT * FROM users WHERE username = ? AND password = ?";

        $smtp = Database::getInstance()->prepare($query);
        $smtp->execute([$username, $password]);

        //Type: Assciative Array (Mảng liên kết)

        $rawData = $smtp->fetch();

        //Kiểm tra nếu rawData là false thì trả về null
        if (!$rawData) {
            return null;
        }

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
}
