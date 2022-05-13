<?php
    class Database {
        // 'remotemysql.com','NaXmWscQNV', '4mGy83U85M', 'NaXmWscQNV'
        private $host = "remotemysql.com";
        private $db_name = "NaXmWscQNV";
        private $username = "NaXmWscQNV";
        private $password = "4mGy83U85M";
        public $conn;

        public function connect() {
            $this->conn = null;
            try {
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $exception) {
                echo "Connection error: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }
        
?>