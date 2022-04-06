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
<title>Primary One Exam Records</title>
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
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" 
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h4 class="text-center p-3">PRIMARY ONE EXAMS ENTRIES</h4>
            <hr>
        <form action="primary_one_entry.php" method="POST">
            <div class="form-group">
                <input type="text" name="studentName" placeholder="Student Name" required="" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" name="maths" placeholder="Mathematics" required="" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="english" placeholder="English" required="" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="science" placeholder="Science" required="" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="creative_art" placeholder="Creative Arts" required="" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="position" placeholder="Position" required="" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="remarks" placeholder="Remarks" required="" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="record" value="RECORD" class="form-control" style="background-color: rgb(23, 91, 180); color: white";>
            </div>
        </form>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid mt-3 shadow justify-content-center text-center align-items-center">
<form action="controllers/authController.php" method="POST" class="d-flex justify-content-center">
<div class="form-group">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
          ENTER A NEW EXAM RECORD
        </button>
</div>
<div class="form-group w-50 ml-5">
    <input type="text" name="name" placeholder="Search student name in full" class="form-control text-center text-dark border-0">
</div>
<div class="form-group">
<input type="submit" name="search" value="Search"
 class="bg-primary text-light form-control border-0">
</div>
</form>
</div> 
<div class="container-fluid justify-content-center">
      <table class="table bordered">
        <thead>
            <tr class="text-center">
                <th class="text-primary">STUDENT NAME</th>
                <th class="text-secondary">MATHS (100%)</th>
                <th class="text-danger">ENGLISH (100%)</th>
                <th class="text-success">SCIENCE (100%)</th>
                <th class="text-warning">CREATIVE ART (100%)</th>
                <th class="text-secondary">TOTAL(ALL SUBJECTS)</th>
                <th class="text-danger">POSITION (IN CLASS)</th>
                <th class="text-success">REMARKS (BY TEACHER)</th>
                <th class="text-danger">OPERATION</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "staff");
            $sql = "SELECT studentName, maths, english, science, creative_art, total, position, remarks FROM classOne";
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
                <td>
                  <div class="container d-flex">
                <form action="edit-data.php" method="post">
                        <button type="submit" name="edit-data" class="btn btn-dark"><i class="fa fa-edit"></i></button>
                        <button type="submit" name="delete" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                      </form>
              </div>
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
</body>
</html>
