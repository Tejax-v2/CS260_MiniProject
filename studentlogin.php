<?php require('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title text-center">Student Login</h3>
            <form method="POST" action="">
              <div class="mb-3">
                <label for="roll-number" class="form-label">Roll Number</label>
                <input type="text" class="form-control" name="roll_number" id="roll-number" placeholder="Enter roll number">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="passwd" id="password" placeholder="Enter password">
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center mt-3">
  <span>Don't have an account? </span>
  <a href="studentregister.php">Register now</a>
  </div>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get input values
  $roll_number = $_POST["roll_number"];
  $passwd = $_POST["passwd"];
	echo $roll_number.$passwd;
  // Query the database to check if the user exists
  $sql = "SELECT * FROM Student WHERE Roll_No = '$roll_number' AND password = '$passwd'";
  $result = mysqli_query($conn, $sql);
echo mysqli_num_rows($result);
  if (mysqli_num_rows($result) == 1) {
    // User exists, redirect to dashboard or home page
    header("Location: studenthome.php");
    exit();
  } else {
    // User doesn't exist or invalid credentials, show error message
    $error_message = "Invalid roll number or password";
  }
}
?>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
