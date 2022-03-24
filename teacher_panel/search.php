<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true"> 
<meta name="homepage" content="the main page that visitors sees first">
<link rel="shortcut icon" href="favicon.png">
<title>Primary Two Exam Records</title>
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
<?php 
if(isset($_POST['search'])){
    $name = $_POST['name'];
    $conn = mysqli_connect("localhost", "root", "", "staff");
    $sql = "SELECT studentName, maths, english, science, creative_art, total, position FROM classTwo WHERE studentName = '".$_POST['name']."'";
    $query = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($query)) {
?>
           <div class="container-fluid justify-content-center my-1 p-1">
    <div class="row">
      <div class="col-md-12">
      </div>
      <table class="table bordered">
        <thead>
           <tr class="text-center">
                <th>STUDENT NAME</th>
                <th>MATHS</th>
                <th>ENGLISH</th>
                <th>SCIENCE</th>
                <th>CREATIVE ART</th>
                <th>TOTAL</th>
                <th>POSITION</th>
                <th>EDIT</th>
                <th>OPERATION</th>
            </tr>
            <tr class="text-center">
    
                <td><?php echo $row['studentName'];?></td>
                <td><?php echo $row['maths'];?></td>
                <td><?php echo $row['english'];?></td>
                <td><?php echo $row['science'];?></td>
                <td><?php echo $row['creative_art'];?></td>
                <td><?php echo $row['total'];?></td>
                <td><?php echo $row['position'];?></td>
                <td>
                <form action="edit-data.php" method="POST">
                        <input type="hidden" name="id" value="">
                        <button type="submit" name="edit" class="btn btn-warning">EDIT</button>
                    </form>
    </td>
    <td>
                    <form action="delete-data.php" method="POST">
                        <input type="hidden" name="id" value=""/>
                        <button type="submit" name="print" class="btn btn-success">PRINT</button>
                    </form>
                </td>
    </thead>
    </table>
    </div>
    </div>
<?php
}
}
?>
</bod>
</html>