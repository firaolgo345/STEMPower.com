<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Application</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="">
</head>
<body class="body-application">
    
    <section id="application" class="d-flex justify-content-center align-items-center flex-column">
        <form method="post" action="req/application.php">
            <div class="text-center">
    			<img src="logo1.jpg" width="20%">
    		</div>
            <h3>Students Application Form</h3>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">School Name</label>
                    <input type="text" class="form-control" name="school_name" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">Grade</label>
                    <input type="text" class="form-control" name="grade" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Send</button>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </form>
        <br /><br />
        <div class="text-center text-light">
        	Copyright &copy; 2024 FOKA STEMpower. All rights reserved.
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Check if there is a success status in the URL
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('status') && urlParams.get('status') === 'success') {
            alert("Your request was successfully submitted.");
        }
    </script>
</body>
</html>
