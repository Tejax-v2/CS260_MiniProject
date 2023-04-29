<?php require('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Profile</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Student Profile</h1>
		<table class="table">
				<?php
					$roll = $_GET['roll_number'];
					// Fetch data from student table
					$result = mysqli_query($conn, "SELECT * FROM Student where Roll_No='$roll'");

					// Loop through results and display data
					while ($row = mysqli_fetch_array($result)) {
						echo "<tr></th><th>Name</th>"."<td>". $row['Full_Name'] . "</td></tr>";
						echo "<tr><th>Roll Number</th>"."<td>". $row['Roll_No'] . "</td></tr>";
						echo "<tr><th>Age</th>"."<td>". $row['Age'] . "</td></tr>";
						echo "<tr><th>Batch Year</th>"."<td>". $row['Batch_Year'] . "</td></tr>";
					}
					$result = mysqli_query($conn, "SELECT * from Career where Roll_No in ( SELECT Roll_No from Student where Roll_No='$roll')");
					while ($row = mysqli_fetch_array($result)) {
						echo "<tr><th>Specialization</th>"."<td>". $row['Specialization'] . "</td></tr>";
						echo "<tr><th>Area of Interest</th>"."<td>". $row['Area_of_Interest'] . "</td></tr>";
						echo "<tr><th>Class 10 Marks</th>"."<td>". $row['class10'] . "</td></tr>";
						echo "<tr><th>Class 12 Marks</th>"."<td>". $row['class12'] . "</td></tr>";
						echo "<tr><th>Ongoing CPI</th>"."<td>". $row['cpi'] . "</td></tr>";
					}


					// Close database connection
					
				?>
			</tbody>
		</table>
		
		
    <?php
    // fetch the data from the database
    $query = "SELECT * FROM Company"; // replace with your query
    $result = mysqli_query($conn, $query); // replace $connection with your database connection variable

    // check if the query returned any rows
    if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_array($result)) {
			echo "<div class='card'>";
  echo "<div class='card-body'>";
		echo "<h5 class='card-title'>".$row['Name'] ."</h5>";
		echo "<h5 class='card-title'>".$row['Salary_Package'] ."</h5>";
		echo "<h5 class='card-title'>".$row['Recruiting_Since'] ."</h5>";
		echo "<h5 class='card-title'>".$row['Interview_Mode']."</h5>";
		echo "<h5 class='card-title'>".$row['Interview_Type'] ."</h5>";
		echo "<h5 class='card-title'>".$row['min_qualification'] ."</h5>";
		echo "<h5 class='card-title'>".$row['class10_cutoff'] ."</h5>";
		echo "<h5 class='card-title'>".$row['class12_cutoff'] ."</h5>";
		echo "<h5 class='card-title'>".$row['cpi_cutoff'] ."</h5>";
      echo "<a href='#' class='btn btn-primary'>Apply Now</a>";
      echo "</div></div>";
	}	
      ?>
      
    <?php
    } else {
      // handle no rows returned from the query
      echo "No job found.";
    }
    mysqli_close($conn);
    ?>
  </div>
</div>

		
		<div class="row justify-content-center">

		<div class="col-md-6 text-center">
    <button class="btn btn-danger" onclick="location.href='studentlogin'">Give me JOB</button>
				</div>
  <div class="col-md-6 text-center">
    <button class="btn btn-danger" onclick="location.href='studentlogin.php'">Logout</button>
  </div>
</div>

	</div>

	<!-- Include Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
