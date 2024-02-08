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
            body{
	            background: linear-gradient(rgba(0,0,25,0.5),rgba(0,0,25,0.5)),url(images.jpg);
	            background-size:cover;
	            background-position:center;
    }
    </style>
</head>
<body>
    
    <div class="container text-center pt-5">
        <h3 class="text-white">Student Login Page</h3>
        <form action="" method="post" class="pb-5 pt-5">
           <h5 class="text-white">Name :</h5> <input type="text" class="form-control border border-primary" placeholder="Enter Your Name" name="name" required> <br> <br>
           <h5 class="text-white">ID :</h5><input type="text" class="form-control border border-primary" placeholder="Enter Your ID" name="id" required> <br> <br>
           <input type="submit" class="btn btn-primary" name="Login" required>
        </form> <br>

        <?php 
            if(isset($_POST['Login'])){
                session_start();
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"cms");
                $query ="select * from students where name = '$_POST[name]'";
                $query_run = mysqli_query($connection,$query);
                $_SESSION['sid'] = $_POST['id'];
                while($row = mysqli_fetch_assoc($query_run)){
                    if($row['name']== $_POST['name']){
                        if($row['id']==$_POST['id']){
                            header("Location: student_dashboard.php");
                        }
                        else{
                            echo "Wrong id";
                        }
                    }
                    else{
                        echo "Wrong name";
                    }
                }
            }
        ?>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>