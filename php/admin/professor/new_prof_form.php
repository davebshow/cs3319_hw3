<?php
require('access.php');
?>

<h2>Create a new professor:</h2>
<form name="new_prof" method="post" action="admin/professor/create_prof.php">
  <p>
    <label>First Name:</label>
    <input name="firstname" />
  </p>
  <p>
    <label>Last Name:</label>
    <input name="lastname" />
  </p>
  <p>
    <label>Western ID:</label>
    <input name="western_id" />
  </p>

  <p>
    <input type="submit" value="Create" />
  </p>
</form>
