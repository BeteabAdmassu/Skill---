<?php

    class Enroll {
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

        // read posts
        public function getLessons() { 
            
            /**
             * 
             * $query = ;
             *  SELECT DISTINCT lesson_content.Lesson_title
             *   FROM lesson_content,
             *   (
             *       SELECT chapter.ID as ID
             *       FROM  chapter, lesson_content, course_enrol, user
             *       WHERE
             *           user.userid= (php@userid(cookie)) and
             *           user.ID= course_enrol.User_ID and
             *           course_enrol.Course_ID= (php@courseID) and
             *           course_enrol.progress=lesson_content.id and
             *           lesson_content.ChapterID = chapter.ID
             *       ) AS cid
             *   WHERE cid.id=lesson_content.ChapterID
             *   ORDER BY lesson_content.Lesson_number
             * 
             */
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