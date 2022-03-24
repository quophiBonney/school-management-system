<?php
session_start();
?>
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

<div class="container justify-content-center my-4 p-3">
    <div class="row">
      <div class="col-md-12">
        <div class="awards-message">
          <h4 class="text-center mt-4 p-3">STAFF MEMBERS ARRIVAL DATE & TIME</h4>
        </div>
      </div>
      <table class="table bordered">
        <thead>
            <tr class="text-center">
                <th>FULL NAME</th>
                <th>CLASS</th>
                <th>DATE/TIME OF ARRIVAL</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "staff");
            $sql = "SELECT staffName, class, date FROM studentReportingForm";
            $query = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($query) > 0) {
              while($row = mysqli_fetch_assoc($query)){
                  ?>
            <tr class="text-center">
    
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
</body>
</html>