<?php
require('access.php');
require('connect.php');

$query = "select * from Course where course_number='" . $_GET['id'] . "'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);

if (!$result) {
     die("databases query failed.");
}

?>

<h2>Add TA to Course:</h2>
<form name="edit_course" method="post" action="admin/course/add_ta.php">
  <p>
    <label>Western ID:</label>
    <input name="student" />
  </p>
  <p>
    <label>Term:</label>
    <input name="term" />
  </p>
  <p>
    <label>Year:</label>
    <input name="year"/>
  </p>

  <input type="hidden" name="course" value="<?php echo $_GET['id']; ?>" />
  <p>
    <input type="submit" value="Update" />
  </p>
</form>


<form method="post" action="admin/course/delete_course.php">
  <p>
    <input type="hidden" name="course_number" value="<?php echo $_GET['id']; ?>" />
    <input type="submit"  value="DELETE COURSE">
</form>

<?php mysqli_free_result($result);
mysqli_close($connection);
?>
