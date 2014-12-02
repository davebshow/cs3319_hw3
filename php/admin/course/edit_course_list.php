<?php
require('access.php');
?>

<h2>TAs:</h2>

<?php
include('connect.php');

$query = "select * from Course";
$result = mysqli_query($connection, $query);
if (!$result) {
     die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo "<a href='?page=course/edit_course_form.php&id=" . $row["course_number"] . "'>";
    echo $row["name"] . "</li>";
    echo "</a>";
}
mysqli_free_result($result);
echo "</ol>";
mysqli_close($connection);
?>
<h3><a href="?page=course/new_course_form.php">Add a new course!</h3>
