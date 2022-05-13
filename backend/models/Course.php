<?php
    class Course {
        private $conn;
        private $table = 'course';

        // properties
        public $id;
        public $Name;
        public $Instructor;
        public $Institute;
        public $Description;
        public $Image;
        public $Category;
        public $Preview_video_link;


        // constructor with $db as database connection
        public function __construct($db) {
            $this->conn = $db;
        }

        // read posts
        public function read() { 
            // select all query
            $query = "SELECT *
            FROM
                " . $this->table . "";

            // prepare query statement
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
    }

    function read_single() {
        $query = 'SELECT 
        c.name as category_name,
        p.id,
        p.category_id,
        p.title,
        p.body,
        p.author,
        p.created_at
        FROM'. $this->table . ' p
        LEFT JOIN categories c ON p.category_id = c.id
        WHERE p.id = ?
        LIMIT 0,1';
       
        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Bind Id
        $stmt->bindParam(1, $this->id);
         

    }
}  
?>