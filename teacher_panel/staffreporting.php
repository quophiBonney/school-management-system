<?php
if(isset($_POST['arrival'])) {
    $staffName = $_POST['staffName'];
    $class = $_POST['class'];

    $conn = mysqli_connect('localhost', 'root', '', 'staff');
    if($staffName == "$staffName" && $class == "$class") {
        $isStudentnameTaken = "SELECT * FROM studentReportingForm WHERE staffName = '$staffName' AND class = '$class'";
        $result = mysqli_query($conn, $isStudentnameTaken);
        $num = mysqli_num_rows($result);
      if($num > 0) {
        echo '<script>alert("Student have already reported")</script>';
    }else {
        $sql = "INSERT INTO studentReportingForm(staffName, department)
         VALUES('$staffName', '$class')";
         $query = mysqli_query($conn, $sql);
         if($query) {
             echo '<script>alert("Staff successfully reported")</script>';
         }else {
             echo '<script>alert("Something went wrong!")</script>';
         }
    }
}else {
    echo '<script>alert("Student have already reported")</script>';
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true"> 
<meta name="homepage" content="the main page that visitors sees first">
<link rel="shortcut icon" href="favicon.png">
<title>Staff Reporting Form</title>
<!--Custom CSS -->
<linnk rel="stylesheet" href="fontawesome/css/style.css">
<link rel="stylesheet" href="fontawesome/css/all.min.css">
<link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src=”https://code.jquery.com/jquery-3.2.1.slim.min.js” integrity=”sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN” crossorigin=”anonymous”>

</script>
</head> 
<body>  

<div class="container justify-content-center my-4 p-3">
    <div class="row justify-content-center">
        <div class="col-md-6 p-3 my-4 shadow" id="login-section">
            <h4 class="text-center p-3">STAFF REPORTING FORM</h4>
            <hr>
        <form action="student_form.php" method="POST">
            <div class="form-group">
                <input type="text" name="staffName" placeholder="Full Name" required="" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" name="class" placeholder="Class" required="" class="form-control">
           </div>
            <div class="form-group">
                <input type="submit" name="arrival" value="SEND ARRIVAL" class="form-control" style="background-color: rgb(23, 91, 180); color: white";>
            </div>
        </form>
</div>
</body>
</html>
