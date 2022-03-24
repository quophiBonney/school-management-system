<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true"> 
<meta name="homepage" content="the main page that visitors sees first">
<link rel="shortcut icon" href="favicon.png">
<title>Primary Five Exam Records</title>
<!--Custom CSS -->
<linnk rel="stylesheet" href="quophi.css?v=<?php echo time();?>">
<link rel="stylesheet" href="fontawesome/css/all.min.css">
<link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js” integrity=”sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">

</script>
</head> 
<body>  
<div class="space-out"></div>
<div class="container-fluid d-flex justify-content-center text-center shadow" id="class-heading">
        <div class="row">
            <div class="col-md-12">
                    <form method="POST" action="basic_five.php" class="d-flex mt-4">
                        <div class="form-group w-100">
                            <input type="text" name="name" placeholder="Search name" class="form-control"
                                autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="search" value="Search"
                                class="bg-primary text-light form-control">
                        </div>
                    </form>
</div>
            </div>
</div>
<div class="space-out"></div>
<div class="container-fluid justify-content-center my-1 p-1">
    <div class="row">
      <table class="table bordered">
        <thead>
            <tr class="text-center">
                <th>STUDENT NAME</th>
                <th>MATHS (100%)</th>
                <th>ENGLISH (100%)</th>
                <th>SCIENCE (100%)</th>
                <th>CREATIVE ART (100%)</th>
                <th>RME (100%)</th>
                <th>ICT (100%)</th>
                <th>TOTAL</th>
                <th>POSITION</th>
                <th>REMARKS</th>
                <th>EDIT</th>
                <th>OPERATION</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "staff");
            $sql = "SELECT studentName, maths, english, science, creative_art, rme, ict, total, position, remarks FROM classFive";
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
                <td>
                <form action="edit-data.php" method="post">
                        <input type="hidden" name="id" value="">
                        <button type="submit" name="edit" class="btn btn-warning">EDIT</button>
                    </form>
              </td>
              <td>
                    <form action="edit-data.php" method="post">
                        <input type="hidden" name="id" value="">
                        <button type="submit" name="print" class="btn btn-primary">PRINT</button>
                    </form>
                </td>
    
                <script>
                  function editData(id) {
                    if(confirm("Are you sure you want to edit this date?")) {
                      window.location.href = 'edit-data.php?edit_id=' + id + '';
                    }
                  }
                function deleteData(id) {
                    if (confirm("Are you sure you want to delete this data?")) {
                        window.location.href = 'delete.data.php?del_id=' + id + '';
                    }
                }
                </script>
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
