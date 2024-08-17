<?php 

// All Students 
function getAllApplication($conn){
   $sql = "SELECT * FROM students_application";
   $stmt = $conn->prepare($sql);
   $stmt->execute();

   if ($stmt->rowCount() >= 1) {
     $students_application = $stmt->fetchAll();
     return $students_application;
   } else {
   	return 0;
   }
}
?>
