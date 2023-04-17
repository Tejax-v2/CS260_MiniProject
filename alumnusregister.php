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
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2>Alumnus Registration Form</h2>
                <form method="POST" action="submit_form.php">
                    <div class="form-group">
                        <label for="roll_number">Roll Number:</label>
                        <input type="text" class="form-control" id="roll_number" name="roll_number" required>
                    </div>
                    <div class="form-group">
                        <label for="placed_in">Placed In:</label>
                        <input type="text" class="form-control" id="placed_in" name="placed_in" required>
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
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
