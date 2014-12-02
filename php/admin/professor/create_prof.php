<?php
require('../../access.php');
?>

<?php
include('../../connect.php');
  $fname = $_POST["firstname"];
  $lname = $_POST["lastname"];
  $western_id = $_POST["western_id"];
  $attrs = '"' . $fname . '", "' . $lname . '", "' . $western_id;
  $query = 'INSERT INTO Instructor VALUES (' . $attrs . ')';
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die("Failed to create TA");
  } else {
    echo 'Succesfully created:  ' . $fname . ' ' . $lname . ' ' . $western_id;
    echo "<br><a href=/php/admin.php?page=student/edit_prof_list.php>Back to List</a>";
}

?>
