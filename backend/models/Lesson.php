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
         $query = 'SELECT Lesson_title, ID FROM lesson_content where ChapterID = :chapterId ORDER BY Lesson_number';

         // prepare statement
            $stmt = $this->conn->prepare($query);

            // clean data
            $this->chapterId = htmlspecialchars(strip_tags($this->chapterId));

            // bind dat
            $stmt->bindParam(':chapterId', $cid);


            // execute query
            $stmt->execute();

            return $stmt;
     }

     public function getLessonText($textId) {
         $query = 'SELECT Text FROM lesson_text where ID = :textID';

         // prepare statement
         $stmt = $this->conn->prepare($query);

            // bind dat
        $stmt->bindParam(':textID', $textId);


            // execute query
        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // return the text only
        return $row[0]['Text'];
     }

     public function getLessonVideo($textId) {
         $query = 'SELECT Video_link FROM lesson_text where ID = :textID';

         // prepare statement
         $stmt = $this->conn->prepare($query);

            // bind dat
        $stmt->bindParam(':textID', $textId);


            // execute query
        $stmt->execute();

        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // return the text only
        return $row[0]['Video_link'];
     }
    
}  


?>