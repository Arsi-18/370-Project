<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .lol{
            width: 50%;
            height:50%;
        }
    </style>
</head>
<body>
    
    <div class="container text-center pt-5">
        <div>
            <img class="lol" src="images1.jpg" alt="">
        </div>
        <h3 class="text-primary pt-5">Course Management System</h3>
        <form action="" method="post" class="pb-5 pt-5">
            <input type="submit" class="btn btn-outline-primary" name="admin_login" value="Admin Login">
            <input type="submit" class="btn btn-outline-primary" name="student_login" value="Student Login">
        </form>
        <?php
            if(isset($_POST['admin_login'])){
                header("Location:admin_login.php");
            }
            if(isset($_POST['student_login'])){
                header("Location:student_login.php");
            }
        ?>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>