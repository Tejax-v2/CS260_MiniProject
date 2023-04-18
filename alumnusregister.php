<?php require('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Alumnus Registration Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        /* CSS for custom styling */
        body {
            background-color: #f7f7f7;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            font-size: 16px;
        }
        .form-control {
            border-radius: 0px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 0px;
        }
        .btn-primary:hover {
            background-color: #0069d9;
            color: #fff;
        }
    </style>
</head>
<?php
$fetchquery = "SELECT Id, Name From Company";
$result = mysqli_query($conn,$fetchquery);
// Check for query errors
if (!$result) {
    die("Error fetching options from MySQL database: " . mysqli_error($conn));
}
// Build options HTML
$options = '';
while ($row = mysqli_fetch_assoc($result)) {
    $options .= "<option value='{$row['Id']}'>{$row['Name']}</option>";
}
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2>Alumnus Registration Form</h2>
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="roll_number">Roll Number:</label>
                        <input type="text" class="form-control" id="roll_number" name="roll_number" required>
                    </div>
                    <!-- Dropdown input field in HTML form -->
					<div class="form-group">
					<label for="Placed_In">Department:</label>
						<select class="form-control" id="Placed_In" name="placed_in">
							<?php echo $options; ?>
						</select>
					</div>
                    <div class="form-group">
                        <label for="ctc">CTC:</label>
                        <input type="number" class="form-control" id="ctc" name="ctc" required>
                    </div>
                    <div class="form-group">
                        <label for="working_tenure">Working Tenure:</label>
                        <input type="text" class="form-control" id="working_tenure" name="working_tenure" required>
                    </div>
                    <div class="form-group">
                        <label for="area">Area:</label>
                        <input type="text" class="form-control" id="area" name="area" required>
                    </div>
                    <div class="form-group">
                        <label for="position">Position:</label>
                        <input type="text" class="form-control" id="position" name="position" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Location:</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    // Fetch form data
$roll_number = mysqli_real_escape_string($conn, $_POST['roll_number']);
$placed_in = mysqli_real_escape_string($conn, $_POST['placed_in']);
$ctc = mysqli_real_escape_string($conn, $_POST['ctc']);
$working_tenure = mysqli_real_escape_string($conn, $_POST['working_tenure']);
$area = mysqli_real_escape_string($conn, $_POST['area']);
$position = mysqli_real_escape_string($conn, $_POST['position']);
$location = mysqli_real_escape_string($conn, $_POST['location']);

// Validate form data
if (empty($roll_number) || empty($placed_in) || empty($ctc) || empty($working_tenure) || empty($area) || empty($position) || empty($location)) {
    die("Please fill all required fields.");
}

// Insert form data into MySQL database
$sql = "INSERT INTO Alumnus (Roll_No, Placed_In, CTC, Working_Tenure, Area, Position, Location) VALUES ('$roll_number', '$placed_in', '$ctc', '$working_tenure', '$area', '$position', '$location')";

if (mysqli_query($conn, $sql)) {
    echo "Form data stored successfully!";
} else {
    echo "Error storing form data: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
