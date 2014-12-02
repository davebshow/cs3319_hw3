<?php
require('access.php');
?>

<h2>TAs:</h2>

<?php
include('connect.php');

$query = "select * from Instructor";
$result = mysqli_query($connection, $query);
if (!$result) {
     die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo "<a href='?page=professor/edit_prof_form.php&id=" . $row["western_id"] . "'>";
    echo $row["firstname"] . "</li>";
    echo "</a>";
}
mysqli_free_result($result);
echo "</ol>";
mysqli_close($connection);
?>
<h3><a href="?page=professor/new_prof_form.php">Add a new Instructor!</h3>
