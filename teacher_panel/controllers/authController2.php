<?php 
$conn = mysqli_connect("localhost", "root", "", "staff");
if(isset($_POST['record'])) {
    $studentName = $_POST['studentName'];
    $maths = $_POST['maths'];
    $english = $_POST['english'];
    $science = $_POST['science'];
    $creative_art = $_POST['creative_art'];
    $total = $_POST['maths'] + $_POST['english'] + $_POST['science'] + $_POST['creative_art'];
    $position = $_POST['position'];
    $remarks = $_POST['remarks'];
    if($studentName == "$studentName" && $position == "$position") {
        $isStudentnameTaken = "SELECT * FROM classTwo WHERE studentName = '$studentName' AND position = '$position'";
        $result = mysqli_query($conn, $isStudentnameTaken);
        $num = mysqli_num_rows($result);
      if($num > 0) {
        echo '<script>alert("Entry has already been done")</script>';
    }else {
        $sql = "INSERT INTO classTwo(studentName, maths, english, science, creative_art, total, position, remarks)
         VALUES('$studentName', '$maths', '$english', '$science', '$creative_art', '$total', '$position', '$remarks')";
         $query = mysqli_query($conn, $sql);
         if($query) {
             echo '<script>alert("Examination records has been entered successfully")</script>';
         }else {
             echo '<script>alert("Something went wrong!")</script>';
         }
    }
}else {
    echo '<script>alert("Student have already reported")</script>';
}
}
?>