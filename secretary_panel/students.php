<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true"> 
<meta name="homepage" content="the main page that visitors sees first">
<link rel="shortcut icon" href="favicon.png">
<title>Home</title>
<!--Custom CSS -->
<linnk rel="stylesheet" href="fontawesome/css/style.css">
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
<div class="container-fluid justify-content-center">
    <div class="row">
      <div class="col-md-12">
        <div class="awards-message">
          <h4 class="text-center my-1 p-1">STUDENTS LIST</h4>
        </div>
      </div>
      <table class="table bordered">
        <thead>
            <tr class="text-center">
                <th>NAME</th>
                <th>COURSE</th>
                <th>EMAIL</th>
                <th>CONTACT</th>
                <th>FORM</th>
                <th>DOB</th>
                <th>P/G NAME</th>
                <th>P/G  MOBILE</th>
                <th>STUDENT'S IMAGE</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "staff");
            $sql = "SELECT id, studentName, course, email, contact, form, dob, parentName, parentMobile, image FROM student_registration";
            $query = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($query) > 0) {
              while($row = mysqli_fetch_assoc($query)){
                  ?>
            <tr class="text-center">
    
                <td class="my-4 p-3"><?php echo $row['studentName'];?></td>
                <td class="my-4 p-3"><?php echo $row['course'];?></td>
                <td class="my-4 p-3"><?php echo $row['email'];?></td>
                <td class="my-4 p-3"><?php echo $row['contact'];?></td>
                <td class="my-4 p-3"><?php echo $row['form'];?></td>
                <td class="my-4 p-3"><?php echo $row['dob'];?></td>
                <td class="my-4 p-3"><?php echo $row['parentName'];?></td>
                <td class="my-4 p-3"><?php echo $row['parentMobile'];?></td>
                <td><img width="100%"  height="50px"  src="folder/<?php echo $row['image'];?>"></td>
                <td>
                    <form action="edit-data.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        <button type="submit" name="edit" class="btn btn-danger">Delete</button>
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
