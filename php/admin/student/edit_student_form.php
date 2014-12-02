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

<h2>Edit student:</h2>
<form name="edit_student" method="post" action="admin/student/edit_student.php">
  <p>
    <label>First Name:</label>
    <input name="firstname" value="<?php echo $row['firstname']; ?>"/>
  </p>
  <p>
    <label>Last Name:</label>
    <input name="lastname" value="<?php echo $row['lastname']; ?>"/>
  </p>
  <p>
    <label>Head Supervisor:</label>
    <input name="head_supervisor" value="<?php echo $row['head_supervisor']; ?>"/>
  </p>
  <p>
    <select name="degree" value="<?php echo $row['degree']; ?>">
      <option value="PhD">PhD</option>
      <option value="Masters">Masters</option>
    </select>
  </p>

  <p>
    <input type="hidden" name="western_id" value="<?php echo $_GET['id']; ?>" />
    <input type="submit" value="Update" />
  </p>
</form>

<form method="post" action="admin/student/delete_student.php">
  <p>
    <input type="hidden" name="firstname"  value="<?php echo $row['firstname']; ?>"/>
    <input type="hidden" name="lastname" value="<?php echo $row['lastname']; ?>"/>
    <input type="hidden" name="western_id" value="<?php echo $_GET['id']; ?>" />
    <input type="submit"  value="DELETE">
</form>

<?php 
mysqli_close($connection);
?>
