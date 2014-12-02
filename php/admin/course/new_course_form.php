<?php
require('access.php');
?>

<h2>Create a new student:</h2>
<form name="new_student" method="post" action="admin/student/create_student.php">
  <p>
    <label>First Name:</label>
    <input name="firstname" />
  </p>
  <p>
    <label>Last Name:</label>
    <input name="lastname" />
  </p>
  <p>
    <label>Student ID:</label>
    <input name="student_id" />
  </p>
  <p>
    <label>Student Number:</label>
    <input name="student_num" />
  </p>
  <p>
    <select name="degree">
      <option value="PhD">PhD</option>
      <option value="Masters">Masters</option>
    </select>
  </p>

  <p>
    <input type="submit" value="Create" />
  </p>
</form>
