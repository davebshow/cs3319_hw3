<?php
require('../../access.php');
?>

<?php
require('../../access.php');
?>

<?php
include('../../connect.php');
  $name = $_POST["name"];
  $course_number = $_POST["course_number"];
  $query = "delete from Course where course_number='" . $course_number . "';";
$result = mysqli_query($connection, $query);
  if (!$result) {
    die("Failed to delete TA");
   echo "<br><a href=/php/admin.php?page=student/edit_course_list.php>Back to List</a>";

  } 
echo 'Succesfully deleted:  ' . $name . ' ' . $course_number;
echo "<br><a href=/php/admin.php?page=student/edit_course_list.php>Back to List</a>";
mysqli_close($connection);

?>

