<script type="text/javascript">
    if(confirm("Are you sure to delete this course?")){
        document.write("<?php 
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"cms");
        $query="delete from courses where course_code = '$_POST[code]'";
        $query_run = mysqli_query($connection,$query);
            ?>");
            window.location.href="admin_dashboard.php";
    }
    else{
    window.location.href="admin_dashboard.php";
    }
    </script>