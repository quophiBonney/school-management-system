<?php 
require 'controllers/authController5.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true"> 
<meta name="homepage" content="the main page that visitors sees first">
<link rel="shortcut icon" href="favicon.png">
<title>Primary Five Exams Entries</title>
<!--Custom CSS -->
<linnk rel="stylesheet" href="fontawesome/css/quophi.css?v=<?php echo time();?>">
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
<div class="container justify-content-center">
    <div class="row justify-content-center">
        <div class="col-md-6 p-3 my-4 shadow" id="login-section">
            <h4 class="text-center p-3">PRIMARY FIVE EXAMS ENTRIES</h4>
            <hr>
        <form action="primary_five_entry.php" method="POST" enctype="multipart/form-data">
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
                <input type="text" name="rme" placeholder="RME" required="" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="ict" placeholder="ICT" required="" class="form-control">
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
</body>
</html>
