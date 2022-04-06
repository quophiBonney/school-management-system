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
/** Primary Two Search **/
if(isset($_POST['search'])){
    $studentName = $_POST['studentName'];
    $conn = mysqli_connect("localhost", "root", "", "staff");
    $sql = "SELECT studentName, maths, english, science, creative_art, total, position, remarks FROM classTwo WHERE studentName = '".$_POST['studentName']."'";
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
            $sql = "SELECT studentName, maths, english, science, creative_art, total, position, remarks FROM classTwo WHERE studentName = '$studentName'";
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