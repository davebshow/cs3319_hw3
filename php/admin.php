<?php
require('access.php');
?>

<h1>Welcome to the TA and Course Admin System - PHP is the worst language I can imagine.</h1>
<div style="float: left;">
<h2>Directory:</h2>
<ol>
<li><a href="/">Home</a></li>
<li><a href="?page=student/edit_student_list.php">TAs</a></li>
<li><a href="?page=course/edit_course_list.php">Courses</a></li>
<li><a href="?page=professor/edit_prof_list.php">Instructors</a></li>
</ol>
</div>

<div style="float: left; margin-left:50px">
<?php 

if(isset($_GET['page']))
{
    $page = 'admin/' . $_GET['page'];
    echo $page;
    include($page);
}




?>
</div>


