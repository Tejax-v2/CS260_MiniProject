<?php require('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Student Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h1 class="text-center">Student Registration Form</h1>
      <form method="POST" action="">
        <div class="form-group">
          <label for="full_name">Full Name:</label>
          <input type="text" class="form-control" id="full_name" name="full_name" required>
        </div>
        <div class="form-group">
          <label for="roll_number">Roll Number:</label>
          <input type="text" class="form-control" id="roll_number" name="roll_number" required>
        </div>
        <div class="form-group">
          <label for="age">Age:</label>
          <input type="number" class="form-control" id="age" name="age" required>
        </div>
        <div class="form-group">
          <label for="batch_year">Batch Year:</label>
          <input type="number" class="form-control" id="batch_year" name="batch_year" required>
        </div>
        <div class="form-group">
          <label for="area_of_interest">Area of Interest:</label>
          <input type="text" class="form-control" id="area_of_interest" name="area_of_interest" required>
        </div>
        <div class="form-group">
          <label for="specialization">Specialization:</label>
          <input type="text" class="form-control" id="specialization" name="specialization" required>
        </div>
        <div class="form-group">
          <label for="class10">Class 10 Marks(in %):</label>
          <input type="number" class="form-control" id="class10" name="class10" required>
        </div>
        <div class="form-group">
          <label for="class12">Class 12 Marks(in %):</label>
          <input type="number" class="form-control" id="class12" name="class12" required>
        </div>
        <div class="form-group">
          <label for="last_cpi">Ongoing CPI:</label>
          <input type="number" class="form-control" step="0.01" id="last_cpi" name="last_cpi" required>
        </div>
        <div class="form-group">
          <label>Is Placed?</label>
          <div class="radio">
            <label><input type="radio" name="is_placed" value="yes" required>Yes</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="is_placed" value="no" required>No</label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </form>
    </div>
    <?php
    // Fetch form data
	$name = $_POST['full_name'];
	$roll_number = $_POST['roll_number'];
	$age = $_POST['age'];
	$batch_year = $_POST['batch_year'];
	$area_of_interest = $_POST['area_of_interest'];
	$specialization = $_POST['specialization'];
	$class10 = $_POST['class10'];
	$class12 = $_POST['class12'];
	$cpi = $_POST['last_cpi'];
	$is_placed = $_POST['is_placed'];
	// Validate form data
	if (empty($name) || empty($roll_number) || empty($age) || empty($batch_year) || empty($area_of_interest) || empty($specialization) || empty($is_placed) || empty($class10) || empty($class12) || empty($cpi)) {
		die('Please fill all the fields');
	}
	if (!is_numeric($age) || !is_numeric($batch_year) || !is_numeric($class10) || !is_numeric($class12)) {
		die('Invalid data format');
	}
	if ($is_placed != 'yes' && $is_placed != 'no') {
		die('Invalid value for is_placed field');
	}
	echo $name . $roll_number . $age . $batch_year;
	// Insert form data into database
	$sql = "INSERT INTO Student(Roll_No, Full_Name, Age, Batch_Year) VALUES ('$roll_number', '$name', '$age', '$batch_year')";
	if (mysqli_query($conn, $sql)) {
		echo 'Data inserted successfully';
	} else {
		echo 'Error: ' . mysqli_error($conn);
	}
	$sql = "INSERT INTO Career(Roll_No, Specialization, Is_Placed, Area_of_Interest, class10, class12, cpi) VALUES ('$roll_number', '$specialization','$is_placed','$area_of_interest','$class10','$class12','$cpi')";
	if (mysqli_query($conn, $sql)) {
		echo 'Data inserted successfully';
	} else {
		echo 'Error: ' . mysqli_error($conn);
	}
	// Close database connection
	mysqli_close($conn);
	?>
  </body>
</html>
