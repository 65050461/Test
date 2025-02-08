<?php

    require_once __DIR__ . "/../model/User.php";

    // เรียก getUsers() จาก Model
    class HomeController {
        public function index() {
            $userModel = new User();
            $users = $userModel->getUsers();
            require_once __DIR__ . "/../view/Home.php";
        }
    }

?>