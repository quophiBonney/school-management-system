<link rel="stylesheet" href="quophi.css?v=<?php echo time();?>">
<link rel="stylesheet" href="fontawesome/css/all.min.css">
<link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src=”https://code.jquery.com/jquery-3.2.1.slim.min.js” integrity=”sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN” crossorigin=”anonymous”>

</script>
<?php
$conn = mysqli_connect("localhost", "root", "", "staff");

/***** Parent Signup Code ****/
if(isset($_POST['signup'])){
    $fullName = $_POST['fullName'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $wardName = $_POST['wardName'];
    $wardClass = $_POST['wardClass'];
    $token = bin2hex(random_bytes(6));
    $parentPassword = $_POST['parentPassword'];
    $repeatPassword = $_POST['repeatPassword'];
    if($parentPassword == $repeatPassword){
        $isParentnameTaken = "SELECT * FROM parents WHERE fullName = '$fullName' AND email = '$email'";
        $result = mysqli_query($conn, $isParentnameTaken);
        $num = mysqli_num_rows($result);
        if($num > 0){
            echo '<script>alert("Email is already")</script>';
        }else {
            $sql = "INSERT INTO parents(fullName, contact, email, wardName, wardClass, token, parentPassword)
            VALUES('$fullName', '$contact', '$email', '$wardName', '$wardClass', '$token', '$parentPassword')";
            $query = mysqli_query($conn, $sql);
    
            if($query) {
                echo '<script>alert("Signup Successful")</script>';
                header("Location: tfa.php");
                exit();
            }else {
                echo '<script>alert("Something went wrong")</script>';
            }
        }
    }else {
        echo '<script>alert("Password do not match")</script>';
    }
    }

    /***** Parent Login Code ****/
if(isset($_POST['login'])) {
    $conn = mysqli_connect("localhost", "root", "", "staff");
    $email = $_POST['email'];
    $parentPassword = $_POST['parentPassword'];
    if($email == $email && $parentPassword == $parentPassword){
    $isParentnameTaken = "SELECT * FROM parents WHERE email = '$email' AND parentPassword = '$parentPassword'";
    $result = mysqli_query($conn, $isParentnameTaken);
    $num = mysqli_num_rows($result);
        if($num > 0){
            echo '<script>alert("You are logged in")</script>';
            header("Location: dashboard.php");
            exit(0);
        }else {
            echo '<script>alert("Wrong credentials")</script>';
        }   
    }else {
        echo '<script>alert("Something went wrong")</script>';
    }
    }
/***** Parent Account Validation Code ****/
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

/***** Primary One Admission Code ****/
if(isset($_POST['register'])) {
    $studentName = $_POST['studentName'];
    $dob = $_POST['dob'];
    $parentName = $_POST['parentName'];
    $parentMobile = $_POST['parentMobile'];
    $image = $_FILES['image'];
    $filename = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $folder = "folder/". $filename;

    if($studentName == "$studentName" && $parentMobile == "$parentMobile") {
        $isStudentnameTaken = "SELECT * FROM primaryOne WHERE studentName = '$studentName' AND parentMobile = '$parentMobile'";
        $result = mysqli_query($conn, $isStudentnameTaken);
        $num = mysqli_num_rows($result);
        if($num > 0) {
            echo '<script>alert("Student info has already been taken")</script>';
        }else {
            $sql = "INSERT INTO primaryOne(studentName, dob, parentName, parentMobile, image)
            VALUES('$studentName', '$dob', '$parentName', '$parentMobile', '$filename')";
            $query = mysqli_query($conn, $sql);
        if($query && move_uploaded_file($tmp_name, $folder)) {
            echo '<script>alert("Successfully registered student")</script>';
        }else {
            echo '<script>alert("Failed!")</script>';
        }
    } 
}else {
  echo '<script>alert("Something went wrong")</script>';
}
}
/***** Primary Two Admission Code ****/
if(isset($_POST['register'])) {
    $studentName = $_POST['studentName'];
    $dob = $_POST['dob'];
    $parentName = $_POST['parentName'];
    $parentMobile = $_POST['parentMobile'];
    $image = $_FILES['image'];
    $filename = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $folder = "folder/". $filename;

    if($studentName == "$studentName" && $parentMobile == "$parentMobile") {
        $isStudentnameTaken = "SELECT * FROM primaryTwo WHERE studentName = '$studentName' AND parentMobile = '$parentMobile'";
        $result = mysqli_query($conn, $isStudentnameTaken);
        $num = mysqli_num_rows($result);
        if($num > 0) {
            echo '<script>alert("Student info has already been taken")</script>';
        }else {
            $sql = "INSERT INTO primaryTwo(studentName, dob, parentName, parentMobile, image)
            VALUES('$studentName', '$dob', '$parentName', '$parentMobile', '$filename')";
            $query = mysqli_query($conn, $sql);
        if($query && move_uploaded_file($tmp_name, $folder)) {
            echo '<script>alert("Successfully registered student")</script>';
        }else {
            echo '<script>alert("Failed!")</script>';
        }
    } 
}else {
  echo '<script>alert("Something went wrong")</script>';
}
}

/***** Primary Three Admission Code ****/
if(isset($_POST['register'])) {
    $studentName = $_POST['studentName'];
    $dob = $_POST['dob'];
    $parentName = $_POST['parentName'];
    $parentMobile = $_POST['parentMobile'];
    $image = $_FILES['image'];
    $filename = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $folder = "folder/". $filename;

    if($studentName == "$studentName" && $parentMobile == "$parentMobile") {
        $isStudentnameTaken = "SELECT * FROM primaryThree WHERE studentName = '$studentName' AND parentMobile = '$parentMobile'";
        $result = mysqli_query($conn, $isStudentnameTaken);
        $num = mysqli_num_rows($result);
        if($num > 0) {
            echo '<script>alert("Student info has already been taken")</script>';
        }else {
            $sql = "INSERT INTO primaryThree(studentName, dob, parentName, parentMobile, image)
            VALUES('$studentName', '$dob', '$parentName', '$parentMobile', '$filename')";
            $query = mysqli_query($conn, $sql);
        if($query && move_uploaded_file($tmp_name, $folder)) {
            echo '<script>alert("Successfully registered student")</script>';
        }else {
            echo '<script>alert("Failed!")</script>';
        }
    } 
}else {
  echo '<script>alert("Something went wrong")</script>';
}
}

/***** Primary Four Admission Code ****/
if(isset($_POST['register'])) {
    $studentName = $_POST['studentName'];
    $dob = $_POST['dob'];
    $parentName = $_POST['parentName'];
    $parentMobile = $_POST['parentMobile'];
    $image = $_FILES['image'];
    $filename = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $folder = "folder/". $filename;

    if($studentName == "$studentName" && $parentMobile == "$parentMobile") {
        $isStudentnameTaken = "SELECT * FROM primaryFour WHERE studentName = '$studentName' AND parentMobile = '$parentMobile'";
        $result = mysqli_query($conn, $isStudentnameTaken);
        $num = mysqli_num_rows($result);
        if($num > 0) {
            echo '<script>alert("Student info has already been taken")</script>';
        }else {
            $sql = "INSERT INTO primaryFour(studentName, dob, parentName, parentMobile, image)
            VALUES('$studentName', '$dob', '$parentName', '$parentMobile', '$filename')";
            $query = mysqli_query($conn, $sql);
        if($query && move_uploaded_file($tmp_name, $folder)) {
            echo '<script>alert("Successfully registered student")</script>';
        }else {
            echo '<script>alert("Failed!")</script>';
        }
    } 
}else {
  echo '<script>alert("Something went wrong")</script>';
}
}
/***** Primary Five Admission Code ****/
if(isset($_POST['register'])) {
    $studentName = $_POST['studentName'];
    $dob = $_POST['dob'];
    $parentName = $_POST['parentName'];
    $parentMobile = $_POST['parentMobile'];
    $image = $_FILES['image'];
    $filename = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $folder = "folder/". $filename;

    if($studentName == "$studentName" && $parentMobile == "$parentMobile") {
        $isStudentnameTaken = "SELECT * FROM primaryFive WHERE studentName = '$studentName' AND parentMobile = '$parentMobile'";
        $result = mysqli_query($conn, $isStudentnameTaken);
        $num = mysqli_num_rows($result);
        if($num > 0) {
            echo '<script>alert("Student info has already been taken")</script>';
        }else {
            $sql = "INSERT INTO primaryFive(studentName, dob, parentName, parentMobile, image)
            VALUES('$studentName', '$dob', '$parentName', '$parentMobile', '$filename')";
            $query = mysqli_query($conn, $sql);
        if($query && move_uploaded_file($tmp_name, $folder)) {
            echo '<script>alert("Successfully registered student")</script>';
        }else {
            echo '<script>alert("Failed!")</script>';
        }
    } 
}else {
  echo '<script>alert("Something went wrong")</script>';
}
}

/***** Primary Six Admission Code ****/
if(isset($_POST['register'])) {
    $studentName = $_POST['studentName'];
    $dob = $_POST['dob'];
    $parentName = $_POST['parentName'];
    $parentMobile = $_POST['parentMobile'];
    $image = $_FILES['image'];
    $filename = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $folder = "folder/". $filename;

    if($studentName == "$studentName" && $parentMobile == "$parentMobile") {
        $isStudentnameTaken = "SELECT * FROM primarySix WHERE studentName = '$studentName' AND parentMobile = '$parentMobile'";
        $result = mysqli_query($conn, $isStudentnameTaken);
        $num = mysqli_num_rows($result);
        if($num > 0) {
            echo '<script>alert("Student info has already been taken")</script>';
        }else {
            $sql = "INSERT INTO primarySix(studentName, dob, parentName, parentMobile, image)
            VALUES('$studentName', '$dob', '$parentName', '$parentMobile', '$filename')";
            $query = mysqli_query($conn, $sql);
        if($query && move_uploaded_file($tmp_name, $folder)) {
            echo '<script>alert("Successfully registered student")</script>';
        }else {
            echo '<script>alert("Failed!")</script>';
        }
    } 
}else {
  echo '<script>alert("Something went wrong")</script>';
}
}
/** Primary One Search**/
if(isset($_POST['search'])){
    $name = $_POST['name'];
    $conn = mysqli_connect("localhost", "root", "", "staff");
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
            $sql = "SELECT studentName, maths, english, science, creative_art, rme, ict, total, position, remarks FROM classFive WHERE studentName = '$name'";
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