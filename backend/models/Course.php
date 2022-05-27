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
        public $content;
        public $requirement;
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

    function read_single($id) {
        $query = "SELECT * FROM ".$this->table." WHERE id = ? LIMIT 0,1";
       
        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Bind Id
        $stmt->bindParam(1, $id);
         
        //Execute query
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        //set properties
        $this -> id = $row['ID'];
        $this->Name = $row['Name'];
        $this->Instructor = $row['Instructor'];
        $this->Institute = $row['Institute'];
        $this->Description = $row['Description'];
        $this->content = $row['content'];
        $this->requirement = $row['requirement'];
        $this->Image = $row['Image'];
        $this->Category = $row['Category'];
        $this->Preview_video_link = $row['Preview_video_link'];
    }

    

    function search($searchParam) {
        // select all query
        $query = "SELECT *
        FROM
            " . $this->table . "
        WHERE
            Name LIKE ? OR Instructor LIKE ? OR Institute LIKE ? OR Description LIKE ? OR Category LIKE ?";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // sanitize
        $searchParam = htmlspecialchars(strip_tags($searchParam));
        $searchParam = "%{$searchParam}%";

        // bind
        $stmt->bindParam(1, $searchParam);
        $stmt->bindParam(2, $searchParam);
        $stmt->bindParam(3, $searchParam);
        $stmt->bindParam(4, $searchParam);
        $stmt->bindParam(5, $searchParam);

        // execute query
        $stmt->execute();

        return $stmt;
    }
    function category($category) {
        // select all query
        $query = "SELECT *
        FROM
            " . $this->table . "
        WHERE
            Category = ?";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // sanitize
        $category = htmlspecialchars(strip_tags($category));

        // bind
        $stmt->bindParam(1, $category);

        // execute query
        $stmt->execute();

        return $stmt;
    }
    

}  


?>