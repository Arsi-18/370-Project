<?php 
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"cms");
        $query = "update payment set status='$_POST[status]' where id='$_POST[id]'";
        $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Details Edited Successfully");
    window.location.href="admin_dashboard.php";
    </script>