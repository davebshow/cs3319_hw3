<?php
require('access.php');
require('connect.php');

$query = "select * from TeachingAssistant where western_id='" . $_GET['id'] . "'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);

if (!$result) {
     die("databases query failed.");
}

?>

<h2>Edit Course:</h2>
<form name="edit_student" method="post" action="admin/course/edit_course.php">
  <p>
    <label>First Name:</label>
    <input name="firstname" value="<?php echo $row['firstname']; ?>"/>
  </p>
  <p>
    <label>Last Name:</label>
    <input name="lastname" value="<?php echo $row['lastname']; ?>"/>
  </p>

  <p>
    <input type="submit" value="Update" />
  </p>
</form>

<form method="post" action="admin/course/delete_course.php">
  <p>
    <input type="hidden" name="course_number" value="<?php echo $_GET['id']; ?>" />
    <input type="submit"  value="DELETE">
</form>

<?php mysqli_free_result($result);
mysqli_close($connection);
?>
