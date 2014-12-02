<?php
require('../../access.php');
?>

<?php
require('../../access.php');
?>

<?php
include('../../connect.php');
  $fname = $_POST["firstname"];
  $lname = $_POST["lastname"];
  $degree = $_POST["degree"];
  $western_id = $_POST["western_id"];
  $query = "delete from TeachingAssistant where western_id='" . $western_id . "';";
$result = mysqli_query($connection, $query);
  if (!$result) {
    die("Failed to delete TA");
   echo "<br><a href=/php/admin.php?page=student/edit_student_list.php>Back to List</a>";

  } 
echo 'Succesfully deleted:  ' . $fname . ' ' . $lname . ' ' . $sId;
echo "<br><a href=/php/admin.php?page=student/edit_student_list.php>Back to List</a>";
mysqli_close($connection);

?>

