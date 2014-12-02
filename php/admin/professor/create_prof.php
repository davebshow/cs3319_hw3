<?php
require('../../access.php');
?>

<?php
include('../../connect.php');
  $fname = $_POST["firstname"];
  $lname = $_POST["lastname"];
  $western_id = $_POST["western_id"];
  $attrs = '"' . $fname . '", "' . $lname . '", "' . $western_id . '"';
  $query = 'INSERT INTO Instructor VALUES (' . $attrs . ')';
  echo $query;
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die("Failed to create TA");
  } 
    echo 'Succesfully created:  ' . $fname . ' ' . $lname . ' ' . $western_id;
    echo "<br><a href=/php/admin.php?page=professor/edit_prof_list.php>Back to List</a>";
mysqli_close($connection);

?>
