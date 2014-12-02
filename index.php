<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>TA App</title>
</head>
<body>
<h1>Welcome to the TA management system - PHP is the worst language I can imagine.</h1>
<div style="float: left;">
<h2>Directory:</h2>
<ol>
<li><a href="?page=ta_list.php">TAs</a></li>
<li><a href="?page=prof_list.php">Prof</a></li>
<li><a href="?page=course_list.php">Courses</a></li>
<li><a href="php/admin.php">TA/Course Admin</li>
</ol>
</div>

<div style="float: left; margin-left:50px">
<?php

if(isset($_GET['page']))
{
    $page = 'php/' . $_GET['page'];
    echo $page;
    include($page);
}




?>
</div>

</body>
</html>

