<h2>Instructors:</h2>

<?php
include 'connect.php';

$query = "select * from Instructors";
$result = mysqli_query($connection, $query);
if (!$result) {
     die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo "<a href='?page=prof_detail.php&id=" . $row["western_id"] . "'>";
    echo $row["firstname"] . "</li>";
    echo "</a>";
}
mysqli_free_result($result);
echo "</ol>";
mysqli_close($connection);
?>