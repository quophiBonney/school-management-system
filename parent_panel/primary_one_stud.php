<?php 
require_once 'controllers/authController.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true"> 
<meta name="homepage" content="the main page that visitors sees first">
<link rel="shortcut icon" href="favicon.png">
<title>Primary One List</title>
<!--Custom CSS -->
<link rel="stylesheet" href="quophi.css?v=<?php echo time();?>">
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
  <div class="container justify-content-center mt-3">
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
          Register New Student
        </button>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" 
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h4 class="text-center p-3">PRIMARY 1 ADMISSION FORM  <button type="button" id="btn" data-dismiss="modal" class="btn btn-danger ml-3"><i class="fa fa-close"></i></button></h4>
            <hr>
        <form action="primary_one_stud.php" method="POST" enctype="multipart/form-data">
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
  </div>
 </div>
</div>
</div>
</div>
<div class="space-out"></div>
<div class="container-fluid justify-content-center">
    <div class="row">
      <div class="col-md-12">
        <div class="awards-message">
          <h4 class="text-center mt-1 p-1 shadow">PRIMARY ONE STUDENTS</h4>
        </div>
      </div>
      <table class="table table-stripped table-bordered">
        <thead>
            <tr class="text-center">
                <th>STUDENT NAME</th>
                <th>DOB</th>
                <th>PARENT NAME</th>
                <th>PARENT MOBILE</th>
                <th>STUDENT'S IMAGE</th>
                <th>DATE / TIME</th>
                <th>OPERATION</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "staff");
            $sql = "SELECT studentName, dob, parentName, parentMobile, image, date FROM primaryOne";
            $query = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($query) > 0) {
              while($row = mysqli_fetch_assoc($query)){
             ?>
            <tr class="text-center">
                <td><?php echo $row['studentName'];?></td>
                <td><?php echo $row['dob'];?></td>
                <td><?php echo $row['parentName'];?></td>
                <td><?php echo $row['parentMobile'];?></td>
                <td><img class="profile" src="folder/<?php echo $row['image'];?>"></td>
                <td><?php echo $row['date'];?></td>
                <td>
                    <form action="delete.php" method="GET">
                      <div class="d-flex">
                        <button type="submit" name="edit" class="btn btn-secondary ml-2"><i class="fa fa-edit"></i></button>
                        <button type="submit" name="delete" class="btn btn-danger ml-2"><i class="fa fa-trash"></i></button>
                      </form>
                </td>
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
