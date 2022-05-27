<?php

class Lessons {

        private $conn;

        // properties
        public $uid;
        public $cid;

        // constructor with $db as database connection
        public function __construct($db) {
            $this->conn = $db;
        }

        public function read() {
            $query = "SELECT chapter.id, chapter.title FROM chapter WHERE course_id = ? ORDER BY chapter.Unit_number ASC";
            $query2 = "SELECT Lesson_title FROM lesson_content WHERE ChapterID=? ORDER BY Lesson_number ASC";

            // prepare query statement
            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(1, $this->cid);

            // execute query
            $stmt->execute();

            // read values;
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

            for($i = 0; $i < count($row); $i++) {
                $stmt2 = $this->conn->prepare($query2);
                $stmt2->bindParam(1, $row[$i]['id']);
                $stmt2->execute();
                $row2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
                $row[$i]['lessons'] = $row2;
            }

            return $row;

        }

        
    


}  


?>