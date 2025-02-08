<?php 

    class Database {
        private $host = "localhost";
        private $db_name = "mvc_db";
        private $username = "root";
        private $password = "";
        private $port = "3307";
        private $conn;

        // Function ในการเชื่อมต่อกับ Database
        public function connect() {
            $this->conn = null;

            try {
                $this->conn = new PDO(
                    "mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name, 
                    $this->username, 
                    $this->password
                );
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                die("Connection Error: " . $e->getMessage()); // กรณีเชื่อมต่อล้มเหลว
            }

            return $this->conn;
        }
    }

?>