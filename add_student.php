<?php 
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"cms");
        $query="insert into students values('$_POST[name]','$_POST[id]','$_POST[dept]','$_POST[course]')";
        $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Details Edited Successfully");
    window.location.href="admin_dashboard.php";
    </script>