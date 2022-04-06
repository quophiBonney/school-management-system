<?php
$conn = mysqli_connect("localhost", "root", "", "staff"); 
if(isset($_POST['record'])) {
    $studentName = $_POST['studentName'];
    $maths = $_POST['maths'];
    $english = $_POST['english'];
    $science = $_POST['science'];
    $creative_art = $_POST['creative_art'];
    $rme = $_POST['rme'];
    $ict = $_POST['ict'];
    $total = $maths + $english + $science + $creative_art + $rme + $ict;
    $position = $_POST['position'];
    $remarks = $_POST['remarks'];
    if($studentName == "$studentName" && $position == "$position") {
       $isStudentnameTaken = "SELECT * FROM classFour WHERE studentName = '".$_POST['studentName']. "'";
       $result = mysqli_query($conn, $isStudentnameTaken);
       $num = mysqli_num_rows($result);
        if($num > 0) {
        echo '<script>alert("Entry has already been done!")</script>';
        }
    }else {
        $sql = "INSERT INTO classFour(studentName, maths, english, science, creative_art, rme, ict, total, position, remarks)
        VALUES('$studentName', '$maths', '$english', '$science', '$creative_art', '$rme', '$ict', '$total', '$position', '$remarks')";
        $query = mysqli_query($conn, $sql);
        if($query){
            echo '<script>alert("Entry is successfully done!")</script>';
        }else {
            echo '<script>alert("Something went wrong")</script>';
        }
    }
}
?>