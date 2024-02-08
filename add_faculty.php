<?php 
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"cms");
        $query="insert into faculties values('$_POST[name]',$_POST[id],'$_POST[email]')";
        $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Details Edited Successfully");
    window.location.href="admin_dashboard.php";
    </script>