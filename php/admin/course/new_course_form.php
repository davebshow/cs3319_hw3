<?php
require('access.php');
?>

<h2>Create a new course:</h2>
<form name="new_student" method="post" action="admin/course/create_course.php">
  <p>
    <label>Course Name:</label>
    <input name="name" />
  </p>
  <p>
    <label>Course Number:</label>
    <input name="course_number" />
  </p>


  <p>
    <input type="submit" value="Create" />
  </p>
</form>
