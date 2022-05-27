<?php

    class Enroll {
        private $conn;
        private $table = 'course_enrol';

        // properties
        public $userid;
        public $courseid;
        public $time;
        public $progress;


        // constructor with $db as database connection
        public function __construct($db) {
            $this->conn = $db;
        }

        // read posts
        public function insert() { 
            // insert query
            $query = "INSERT INTO
                " . $this->table . "
            SET
                User_ID = :userid, Course_ID = :courseid, Time_enroll = :time, progress = :progress";

            // prepare query statement
            $stmt = $this->conn->prepare($query);

            // sanitize
            $this->userid=htmlspecialchars(strip_tags($this->userid));
            $this->courseid=htmlspecialchars(strip_tags($this->courseid));
            $this->time=htmlspecialchars(strip_tags($this->time));
            $this->progress=htmlspecialchars(strip_tags($this->progress));

            // bind new values
            $stmt->bindParam(':userid', $this->userid);
            $stmt->bindParam(':courseid', $this->courseid);
            $stmt->bindParam(':time', $this->time);
            $stmt->bindParam(':progress', $this->progress);

            // execute the query
            if($stmt->execute()) {
                return true;
            }

            return false;
    }

    public function getStudentId($userid) {
        $query = "SELECT ID from USER WHERE userid = ? LIMIT 0,1";
        
        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Bind Id
        $stmt->bindParam(1, $userid);

        //Execute query
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['ID'];
    }
    
}  


?>