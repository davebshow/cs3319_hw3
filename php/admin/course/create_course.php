<?php
require('../../access.php');
?>

<?php
include('../../connect.php');
  $name = $_POST["name"];
  $course_number = $_POST["course_number"];
  $attrs = '"' . $name . '", "' . $course_number . '"';
  $query = 'INSERT INTO Course VALUES (' . $attrs . ')';
  echo $query;
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die("Failed to create Course");
    echo "<br><a href=/php/admin.php?page=course/edit_course_list.php>Back to List</a>";
  } else {
    echo 'Succesfully created:  ' . $name . ' ' . $course_number;
    echo "<br><a href=/php/admin.php?page=course/edit_course_list.php>Back to List</a>";
}

?>
