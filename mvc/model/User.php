<?php

    require_once "Database.php";

    class User {
        private $conn;
        private $table = "users";

        // เชื่อมต่อกับ Database
        public function __construct() {
            $database = new Database();
            $this->conn = $database->connect();
        }

        // ดึงข้อมูลทั้งหมดจาก Database
        public function getUsers() {
            $query = "SELECT * FROM " . $this->table;
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>