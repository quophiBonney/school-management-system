<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true"> 
<meta name="homepage" content="the main page that visitors sees first">
<link rel="shortcut icon" href="favicon.png">
<title>Primary Four Exam Records</title>
<!--Custom CSS -->
<linnk rel="stylesheet" href="quophi.css?v=<?php echo time();?>">
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
      <table class="table bordered">
        <thead>
            <tr class="text-center">
                <th>STUDENT NAME</th>
                <th>MATHS</th>
                <th>ENGLISH</th>
                <th>SCIENCE</th>
                <th>CREATIVE ART</th>
                <th>RME</th>
                <th>ICT</th>
                <th>TOTAL</th>
                <th>POSITION</th>
                <th>REMARKS</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "staff");
            $sql = "SELECT studentName, maths, english, science, creative_art, rme, ict, total, position FROM classFour";
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
                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        <button type="submit" name="download" class="btn btn-danger">Download</button>
                    </form>
                </td>
    
                <script>
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
