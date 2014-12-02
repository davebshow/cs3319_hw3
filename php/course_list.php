<h2>Courses:</h2>

<?php
include 'connect.php';

$query = "select * from Course;";
$result = mysqli_query($connection, $query);
if (!$result) {
     die("databases query failed.");
}
echo "<h3>Tas</h3>";
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo "<a href='?page=course_detail.php&id=" . $row["course_number"] . "'>";
    echo $row["course_number"] . ' ' . $row["name"] . "</li>";
}
mysqli_free_result($result);
echo "</ol>";
mysqli_close($connection);
?>

