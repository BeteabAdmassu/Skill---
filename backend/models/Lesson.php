<?php

    class Lesson {
        private $conn;
        private $table = 'lesson_content';

        // properties
        public $id;
        public $chapterId;
        public $textId;
        public $lessonTitle;
        public $lessonNumber;


        // constructor with $db as database connection
        public function __construct($db) {
            $this->conn = $db;
        }

     public function getLessons($cid) {
         $query = 'SELECT Lesson_title FROM lesson_content where ChapterID = :chapterId ORDER BY Lesson_number';

         // prepare statement
            $stmt = $this->conn->prepare($query);

            // clean data
            $this->chapterId = htmlspecialchars(strip_tags($this->chapterId));

            // bind data
            $stmt->bindParam(':chapterId', $cid);


            // execute query
            $stmt->execute();

            return $stmt;
     }
    
}  


?>