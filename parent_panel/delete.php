<?php
$conn = mysqli_connect("localhost", "root", "", "staff");
if(isset($_GET['delete'])){
         
        $delete = "DELETE FROM primaryone WHERE id = 1";
}
?>