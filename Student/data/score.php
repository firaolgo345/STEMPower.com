<?php

// Get student_score by ID
function getScoreById($student_id, $conn){
   $sql = "SELECT * FROM student_score
           WHERE student_id=? ORDER BY year DESC";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$student_id]);

   if ($stmt->rowCount() > 0) {
     $student_scores = $stmt->fetchAll();
     return $student_scores;
   }else {
    return 0;
   }
}
