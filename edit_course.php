<?php 
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"cms");
        $query = "update courses set name='$_POST[name]',
        credit=$_POST[credit],faculty='$_POST[faculty]' where course_code='$_POST[code]'";
        $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Details Edited Successfully");
    window.location.href="admin_dashboard.php";
    </script>