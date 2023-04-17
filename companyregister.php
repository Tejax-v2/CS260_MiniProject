<?php require('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Company Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <h2 class="text-center mb-4">Company Registration Form</h2>
          <form>
            <div class="form-group">
              <label for="companyName">Company Name:</label>
              <input type="text" class="form-control" id="companyName" name="companyName" required>
            </div>
            <div class="form-group">
              <label for="salaryPackage">Salary Package:</label>
              <input type="number" class="form-control" id="salaryPackage" name="salaryPackage" required>
            </div>
            <div class="form-group">
              <label for="recruitingSince">Recruiting Since:</label>
              <input type="date" class="form-control" id="recruitingSince" name="recruitingSince" required>
            </div>
            <div class="form-group">
              <label for="interviewMode">Interview Mode:</label>
              <select class="form-control" id="interviewMode" name="interviewMode" required>
                <option value="">--Select--</option>
                <option value="written">Written</option>
                <option value="interview">Interview</option>
              </select>
            </div>
            <div class="form-group">
              <label for="interviewType">Interview Type:</label>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="online" name="interviewType" value="online" required>
                <label class="form-check-label" for="online">Online</label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="offline" name="interviewType" value="offline" required>
                <label class="form-check-label" for="offline">Offline</label>
              </div>
            </div>
            <div class="form-group">
              <label for="minimumQualification">Minimum Qualification:</label>
              <input type="text" class="form-control" id="minimumQualification" name="minimumQualification" required>
            </div>
            <div class="form-group">
              <label for="class10Cutoff">Class 10 Cutoff:</label>
              <input type="number" class="form-control" id="class10Cutoff" name="class10Cutoff" required>
            </div>
            <div class="form-group">
              <label for="class12Cutoff">Class 12 Cutoff:</label>
              <input type="number" class="form-control" id="class12Cutoff" name="class12Cutoff" required>
            </div>
            <div class="form-group">
              <label for="CPICutoff">CPI Cutoff:</label>
              <input type="number" class="form-control" id="CPICutoff" name="CPICutoff" required>
            </div>
             <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
            
