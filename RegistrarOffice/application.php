<?php 
session_start();
if (isset($_SESSION['r_user_id']) && isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'Registrar Office') {
       include "../DB_connection.php";
       include "data/application.php";
     
       $students_application = getAllApplication($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin - Applicant</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="icon" href="../logo1.jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <?php 
        
        if ($students_application != 0) {
     ?>
     <div class="container mt-5">
     <h4>Applicant Students</h4>
     <a href="index.php" class="btn btn-primary">Back</a>
           <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger mt-3 n-table" role="alert">
              <?=$_GET['error']?>
            </div>
            <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
            <div class="alert alert-info mt-3 n-table" role="alert">
              <?=$_GET['success']?>
            </div>
            <?php } ?>

           <div class="table-responsive">
              <table class="table table-bordered mt-3 n-table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First_Name</th>
                    <th scope="col">Last_Name</th>
                    <th scope="col">School_name</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 0; foreach ($students_application as $student) { 
                    $i++;  ?>
                  <tr>
                    <td><?=$student['id']?></td>
                    <td><?=$student['first_name']?></td>
                    <td><?=$student['last_name']?></td>
                    <td><?=$student['school_name']?></td>
                    <td><?=$student['grade']?></td>
                    <td><?=$student['address']?></td>
                    <td><?=$student['phone']?></td>
                    <td><?=$student['email']?></td>
                    <td><?=$student['date']?></td>
                    <td>
                        <div class="d-flex">
                            <a href="" class="btn btn-warning me-2">Accept</a>
                            <a href="" class="btn btn-danger">Decline</a>
                        </div>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
              
           </div>
         <?php } else { ?>
             <div class="alert alert-info .w-450 m-5" role="alert">
                Empty!
              </div>
         <?php } ?>
     </div>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>	
    <script>
        $(document).ready(function(){
             $("#navLinks li:nth-child(3) a").addClass('active');
        });
    </script>

</body>
</html>
<?php 
  } else {
    header("Location: ../login.php");
    exit;
  } 
} else {
	header("Location: ../login.php");
	exit;
} 
?>
