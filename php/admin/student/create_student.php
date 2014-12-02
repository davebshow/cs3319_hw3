<?php
require('../../access.php');
?>

<?php
include('../../connect.php');
  $fname = $_POST["firstname"];
  $lname = $_POST["lastname"];
  $sNum = $_POST["student_num"];
  $sId = $_POST["student_id"];
  $degree = $_POST["degree"];
  $sup = $_POST["head_supervisor"];
  $attrs = '"' . $fname . '", "' . $lname . '", "' . $sNum . '", "' . $sId . '", "' . $degree . '", "", ' . '"' . $sup . '"';
  $query = 'INSERT INTO TeachingAssistant VALUES (' . $attrs . ')';
  echo $query;
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die("Failed to create TA");
  } 
    echo 'Succesfully created:  ' . $fname . ' ' . $lname . ' ' . $sId;
    echo "<br><a href=/php/admin.php?page=student/edit_student_list.php>Back to List</a>";
mysqli_close($connection);



?>
