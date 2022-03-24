<?php 
if(isset($_POST['register'])) {
    $studentName = $_POST['studentName'];
    $dob = $_POST['dob'];
    $parentName = $_POST['parentName'];
    $parentMobile = $_POST['parentMobile'];
    $image = $_FILES['image'];
    $filename = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $folder = "folder/". $filename;

    $conn = mysqli_connect('localhost', 'root', '', 'staff');
    if($studentName == "$studentName" && $parentMobile == "$parentMobile") {
        $isStudentnameTaken = "SELECT * FROM primaryThree WHERE studentName = '$studentName' AND contact = '$contact'";
        $result = mysqli_query($conn, $isStudentnameTaken);
        $num = mysqli_num_rows($result);
        if($num > 0) {
            echo '<script>alert("Student info has already been taken")</script>';
        }else {
            $sql = "INSERT INTO primaryThree(studentName, dob, parentName, parentMobile, image)
            VALUES('$studentName', '$dob', '$parentName', '$parentMobile', '$filename')";
            $query = mysqli_query($conn, $sql);
        if($query && move_uploaded_file($tmp_name, $folder)) {
            echo '<script>alert("Image uploaded successfully")</script>';
        }else {
            echo '<script>alert("Failed!")</script>';
        }
    } 
}else {
  echo '<script>alert("Something went wrong")</script>';
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
<title>Home</title>
<!--Custom CSS -->
<linnk rel="stylesheet" href="quophi.css?v=<?php echo time(); ?>">
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
<div class="space-out"></div>
<div class="space-out"></div>
<div class="container justify-content-center">
    <div class="row justify-content-center">
        <div class="col-md-6 p-3 my-4 shadow" id="login-section">
            <h4 class="text-center p-3">PRIMARY THREE ADMISSION FORM</h4>
            <hr>
        <form action="registerstudent.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="studentName" placeholder="Student Name" required="" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" name="dob" placeholder="Date Of Birth" required="" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" name="parentName" placeholder="Parent/Guardian Name" required="" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" name="parentMobile" placeholder="Parent/Guardian's Mobile" required="" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="file" name="image" class="form-control" required="">
            </div>
            <div class="form-group">
                <input type="submit" name="register" value="REGISTER STUDENT" class="form-control" style="background-color: rgb(23, 91, 180); color: white";>
            </div>
        </form>
</div>
</body>
</html>
