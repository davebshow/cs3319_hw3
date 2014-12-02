<?php
require('../../access.php');
?>

<?php
include('../../connect.php');
  $student = $_POST['student'];
  $course = $_POST['course'];
  $year = $_POST['year'];
  $term = $_POST['term'];
  $attrs = '"' . $student . '", "' . $course . '", "' . $year . '", "' . $term . '"';
  $query = 'INSERT INTO AssignedTo VALUES (' . $attrs . ')';
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die("Failed to assign TA");
    echo "<br><a href=/php/admin.php?page=course/edit_course_list.php>Back to List</a>";

  } 
    echo 'Succesfully assigned:  ' . $student . ' to ' . $course . ' in ' . $term . ' ' . $year;
    echo "<br><a href=/php/admin.php?page=course/edit_course_list.php>Back to List</a>";
mysqli_close($connection);



?>

