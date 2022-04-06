<?php
/** Primary Six Search **/
if(isset($_POST['search'])){
    $studentName = $_POST['studentName'];
    $conn = mysqli_connect("localhost", "root", "", "staff");
    $sql = "SELECT studentName, maths, english, science, creative_art, rme, ict, total, position, remarks FROM classSix WHERE studentName = '".$_POST['studentName']."'";
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
                <th class="text-secondary">RME (100%)</th>
                <th class="text-primary">ICT (100%)</th>
                <th class="text-warning">TOTAL(ALL SUBJECTS)</th>
                <th class="text-danger">POSITION (IN CLASS)</th>
                <th class="text-success">REMARKS (BY TEACHER)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "staff");
            $sql = "SELECT studentName, maths, english, science, creative_art, rme, ict, total, position, remarks FROM classThree WHERE studentName = '$name'";
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
                <td><?php echo $row['rme'];?></td>
                <td><?php echo $row['ict'];?></td>
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