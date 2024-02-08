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
                <h3 class="text-white mt-5 ">Admin Login Page</h3><br>
                <form action="" method="post" class="pb-5 pt-5">
                <h5 class="text-white">Email :</h5> <input type="text" class="form-control border border-primary" placeholder="Enter Your Email" name="email" required> <br> <br>
                <h5 class="text-white">Password :</h5><input type="password" class="form-control border-primary " placeholder="Enter Your Password" name="password" required> <br> <br>
                <input type="submit" class="btn btn-primary" name="Login" required>
                </form> <br>   

        <?php 
            if(isset($_POST['Login'])){
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"cms");
                $query ="select * from login where email = '$_POST[email]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    if($row['email']== $_POST['email']){
                        if($row['password']==$_POST['password']){
                            header("Location: admin_dashboard.php");
                        }
                        else{
                            echo "Wrong Password";
                        }
                    }
                    else{
                        echo "Wrong Email";
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