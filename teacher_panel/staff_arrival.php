<?php
require 'controllers/authController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true"> 
<meta name="homepage" content="the main page that visitors sees first">
<link rel="shortcut icon" href="favicon.png">
<title>Daily Student Registration</title>
<!--Custom CSS -->
<link rel="stylesheet" href="fontawesome/css/quophi.css?v=<?php echo time();?>">
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

  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" 
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h4 class="text-center p-3">DAILY STAFF REGISTER  <button type="button" id="btn" data-dismiss="modal" class="btn btn-danger ml-3"><i class="fa fa-close"></i></button></h4>
            <hr>
        <form action="staff_arrival.php" method="POST">
            <div class="form-group">
                <input type="text" name="staffName" placeholder="StaffName" required="" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" name="class" placeholder="Class" required="" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="submit" name="present" value="SUBMIT ARRIVAL" class="form-control" style="background-color: rgb(23, 91, 180); color: white";>
            </div>
        </form>
</div>
  </div>
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid d-flex justify-content-center mt-3">
          <h4 class="text-center">REPORTED STAFF MEMBERS</h4>
          <button type="button" class="btn btn-primary h-50 ml-auto border-0" data-toggle="modal" data-target="#exampleModalCenter">
          Staff Arrival Form
        </button>
      </div>
      <table class="table table-stripped table-bordered mt-2">
        <thead>
            <tr class="text-center">
                <th class="text-warning">NUBMER</th>
                <th class="text-primary">STAFF NAME</th>
                <th class="text-danger">NAME OF CLASS</th>
                <th class="text-success">DATE/TIME</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "staff");
            $sql = "SELECT id, staffName, class, date FROM studentReportingForm";
            $query = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($query) > 0) {
              while($row = mysqli_fetch_assoc($query)){
             ?>
            <tr class="text-center">
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['staffName'];?></td>
                <td><?php echo $row['class'];?></td>
                <td><?php echo $row['date'];?></td>
            </tr>
            <?php
              }
            }
            ?>
        </tbody>  
    </table>
      </div>
    </div>
  </div>

  <script>
  $(document).ready(function(){
  $("#btn").click(function(){
    $("#modal").modal('hide');
  });
  });

  </script>
</body>
</html>
