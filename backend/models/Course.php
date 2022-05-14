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

        $query = "SELECT * FROM ".$this->table." WHERE id = ? LIMIT 0,1";
       
        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Bind Id
        $stmt->bindParam(1, $this->id);
         
        //Execute query
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        //set properties
        $this->Name = $row['Name'];
        $this->Instructor = $row['Instructor'];
        $this->Institute = $row['Institute'];
        $this->Description = $row['Description'];
        $this->Image = $row['Image'];
        $this->Category = $row['Category'];
        $this->Preview_video_link = $row['Preview_video_link'];

        
    }
}  
?>