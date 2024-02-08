<?php 
        session_start();
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"cms");
        $query = "update students set enrolled_course='$_POST[code]' where id='$_SESSION[sid]'";
        $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Details Edited Successfully");
    window.location.href="student_dashboard.php";
    </script>