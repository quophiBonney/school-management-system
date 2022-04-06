<link rel="stylesheet" href="quophi.css?v=<?php echo time();?>">
<link rel="stylesheet" href="fontawesome/css/all.min.css">
<link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">

</script>
<?php
$conn = mysqli_connect("localhost", "root", "", "staff");

/*** Staff Signup Code */
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $wardName = $_POST['wardName'];
    $wardClass = $_POST['wardClass'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeatPassword'];
    if($password == $repeatPassword){
        $isParentnameTaken = "SELECT * FROM parents WHERE name = '$name' AND email = '$email'";
        $result = mysqli_query($conn, $isParentnameTaken);
        $num = mysqli_num_rows($result);
        if($num > 0){
            echo '<script>alert("Email is already")</script>';
        }else {
            $sql = "INSERT INTO parents(name, contact, email, wardName, wardClass, password)
            VALUES('$name', '$contact', '$email', '$wardName', '$wardClass', '$password')";
            $query = mysqli_query($conn, $sql);
    
            if($query) {
                echo '<script>alert("Signup Successful")</script>';
                header("Location: login.php");
            }else {
                echo '<script>alert("Something went wrong")</script>';
            }
        }
    }else {
        echo '<script>alert("Password do not match")</script>';
    }
    
    
    }
/** Pin Code Verification */
if(isset($_POST['validate'])){
    $token = $_POST['token'];
     $isUservalidate = "SELECT * FROM parents WHERE token = '$token'";
     $result = mysqli_query($conn, $isUservalidate);
     $num = mysqli_num_rows($result);
     
     if($num > 0){
         echo '<script>alert("Successfully signup")</script>';
         header("Location: login.php");
     }else {
         echo '<script>alert("Invalid pin code")</script>';
     }
 
}

/** Staff Login Code */
if(isset($_POST['login'])) {
    $conn = mysqli_connect("localhost", "root", "", "staff");
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email == $email && $password == $password){
        $isParentnameTaken = "SELECT * FROM parents WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $isParentnameTaken);
        $num = mysqli_num_rows($result);
        if($num > 0){
            echo '<script>alert("Login Successful")</script>';
            header("Location: dashboard.php");
        }else {
            echo '<script>alert("You must signup first")</script>';
        }
    }
    }

/**Staff Arrival**/
if(isset($_POST['present'])) {
    $staffName = $_POST['staffName'];
    $class = $_POST['class'];
    
    if($staffName == "$staffName") {
        $isStudentnameTaken = "SELECT * FROM studentReportingForm WHERE staffName = '$staffName'";
        $result = mysqli_query($conn, $isStudentnameTaken);
        $num = mysqli_num_rows($result);
      if($num > 0) {
        echo '<script>alert("Staff have already reported")</script>';
    }else {
        $sql = "INSERT INTO studentReportingForm(staffName, class)
         VALUES('$staffName', '$class')";
         $query = mysqli_query($conn, $sql);
         if($query) {
             echo '<script>alert("Staff has successfully arrived")</script>';
         }else {
             echo '<script>alert("Something went wrong!")</script>';
         }
    }
}else {
    echo '<script>alert("Staff have already reported")</script>';
}
}
/** Primary One Exams Entries */
if(isset($_POST['record'])) {
    $studentName = $_POST['studentName'];
    $maths = $_POST['maths'];
    $english = $_POST['english'];
    $science = $_POST['science'];
    $creative_art = $_POST['creative_art'];
    $total = $maths + $english + $science + $creative_art;
    $position = $_POST['position'];
    $remarks = $_POST['remarks'];
    if($studentName == "$studentName" && $position == "$position") {
       $isStudentnameTaken = "SELECT * FROM classOne WHERE studentName = '".$_POST['studentName']. "'";
       $result = mysqli_query($conn, $isStudentnameTaken);
       $num = mysqli_num_rows($result);
        if($num > 0) {
        echo '<script>alert("Entry has already been done!")</script>';
    }else {
        $sql = "INSERT INTO classOne(studentName, maths, english, science, creative_art, total, position, remarks)
        VALUES('$studentName', '$maths', '$english', '$science', '$creative_art', '$total', '$position', '$remarks')";
        $query = mysqli_query($conn, $sql);
        if($query){
            echo '<script>alert("Entry is successfully done!")</script>';
            header("Location: primary_one_exams.php");
        }else {
            echo '<script>alert("Something went wrong")</script>';
        }
    }
}else {
        echo '<script>alert("Invalid entries")</script>';
    }

}

/**Search For Primary Student Exams Record */
if(isset($_POST['search'])){
    $name = $_POST['name'];
    $sql = "SELECT studentName, maths, english, science, creative_art, total, position, remarks FROM classOne WHERE studentName = '".$_POST['name']."'";
    $query = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($query)) {
?>
    <div class="container-fluid justify-content-center">
    <div class="row">
      <table class="table-bordered">
        <thead>
            <tr class="text-center">
                <th class="text-primary">STUDENT NAME</th>
                <th class="text-secondary">MATHS (100%)</th>
                <th class="text-danger">ENGLISH (100%)</th>
                <th class="text-success">SCIENCE (100%)</th>
                <th class="text-warning">CREATIVE ART (100%)</th>
                <th class="text-warning">TOTAL(ALL SUBJECTS)</th>
                <th class="text-danger">POSITION (IN CLASS)</th>
                <th class="text-success">REMARKS (BY TEACHER)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "staff");
            $sql = "SELECT studentName, maths, english, science, creative_art, total, position, remarks FROM classOne WHERE studentName = '$name'";
            $query = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($query) > 0) {
              while($row = mysqli_fetch_assoc($query)){
                  ?>
            <tr class="text-center">
    
                <td><?php echo $row['studentName'];?></td>
                <td><?php echo $row['maths'];?></td>
                <td><?php echo $row['english'];?></td>
                <td><?php echo $row['science'];?></td>
                <td><?php echo $row['creative_art'];?></td>
                <td><?php echo $row['total'];?></td>
                <td><?php echo $row['position'];?></td>
                <td><?php echo $row['remarks'];?></td>
            </tr>
            <?php
              }
            }
            ?>
        </tbody>  
    </table>
    </table>
    </div>
    </div>
<?php
}
}
?>
