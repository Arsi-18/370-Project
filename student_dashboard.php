<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        #header{
            height:50px;
        }
        #logout{
            float:right;
        }
    </style>
    <?php 
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"cms");
    ?>
</head>
<body>
<div class="container-fluid"> 
<nav id="header" class="bg-primary text-center">
        <a href="logout.php" id="logout" class="btn btn-primary text-white mt-2">Logout</a>
        <section><h2 class="text-white pt-1">Student Panel</h2></section>
    </nav>
<div class="row">      

    <div class="col-4">
        <form action="" method="post" class="mt-5 border p-3">
            <table>
                <tr>
                    <td>
                        <input type="submit" name="search_course" class="btn btn-primary mt-1 w-100" value="Search Course">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="enroll_course"class="btn btn-primary mt-3 w-100" value="Enroll Course">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="pay"class="btn btn-primary mt-3 w-100" value="Payment">
                    </td>
                </tr>
            </table>
        </form>
    </div>

<div class="col-7 mt-5 border bg-light">
    <?php 
        if(isset($_POST['search_course'])){
            ?>
            <div>
                <form action="" method="post" class="mt-2">
                    <h6>Enter Course Code:</h6>
                    <input type="text" name="course_code"  class="border border-dark">
                    <input type="submit" name="search_by_course_code_for_search" class="btn btn-light border mb-1" value="Search">
                </form>
            </div>
            <?php
        }
            if(isset($_POST['search_by_course_code_for_search'])){
                $query ="select * from courses where course_code = '$_POST[course_code]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <table class="mt-2">
                        <tr>
                            <td><b>Course Code : </b></td>
                            <td><?php echo $row['course_code'];?></td>
                        </tr>
                        <tr>
                            <td><b>Course Name : </b></td>
                            <td><?php echo $row['name'];?></td>
                        </tr>
                        <tr>
                            <td><b>Course Credit : </b></td>
                            <td><?php echo $row['credit'];?></td>
                        </tr>
                        <tr>
                            <td><b>Course Faculty : </b></td>
                            <td><?php echo $row['faculty'];?></td>
                        </tr>
                    </table>
                    <?php
                }
            }
    ?>


<?php 
        if(isset($_POST['pay'])){
            ?>
            <div>
                <form action="" method="post" class="mt-2">
                    <h6>Enter Student:</h6>
                    <input type="text" name="id"  class="border border-dark">
                    <input type="submit" name="search_by_pay_id_for_search" class="btn btn-light border mb-1" value="Search">
                </form>
            </div>
            <?php
        }
            if(isset($_POST['search_by_pay_id_for_search'])){
                $query ="select * from payment where id = '$_POST[id]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <table class="mt-2">
                    <tr>
                            <td><b>Name : </b></td>
                            <td><?php echo $row['name'];?></td>
                        </tr>
                        <tr>
                            <td><b>ID : </b></td>
                            <td><?php echo $row['id'];?></td>
                        </tr>
                        <tr>
                            <td><b>Amount : </b></td>
                            <td><?php echo $row['amount'];?></td>
                        </tr>
                        <tr>
                            <td><b>Status : </b></td>
                            <td><?php echo $row['status'];?></td>
                        </tr>
                    </table> <br>
                    <p class="text-info">Student can complete their payment through BRAC BANK LTD or Bkash services.</p>
                    <?php

                }
            }
    ?>



<?php 
        if(isset($_POST['enroll_course'])){
            ?>
            <div>
                <form action="" method="post" class="mt-2">
                    <h6>Enter Course Code:</h6>
                    <input type="text" name="course_code"  class="border border-dark">
                    <input type="submit" name="search_by_course_code_for_enroll" class="btn btn-outline-dark border mb-1" value="Search">
                </form>
            </div>
            <?php
        }
            if(isset($_POST['search_by_course_code_for_enroll'])){
                $query ="select * from courses where course_code = '$_POST[course_code]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <form action="enroll_course.php" method="post">
                    <table class="mt-2">
                        <tr>
                            <td><b>Course Code : </b></td>
                            <td><input type="text" name="code" class="border border-light bg-light" value="<?php echo $row['course_code'];?>"></td>
                        </tr>
                        <tr>
                            <td><b>Course Name : </b></td>
                            <td><?php echo $row['name'];?></td>
                        </tr>
                        <tr>
                            <td><b>Course Credit : </b></td>
                            <td><?php echo $row['credit'];?></td>
                        </tr>
                        <tr>
                            <td><b>Course Faculty : </b></td>
                            <td><?php echo $row['faculty'];?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="save" class="btn btn-outline-dark border mt-2" value="Enroll"></td>
                        </tr>
                    </table>
                    </form>
                    <?php
                }
            }
    ?>




</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>