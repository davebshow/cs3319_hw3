<h2>TAs:</h2>

<?php
include 'connect.php';

$query = "select * from TeachingAssistant";
$result = mysqli_query($connection, $query);
if (!$result) {
     die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row["firstname"] . "</li>";
}
mysqli_free_result($result);
echo "</ol>";
mysqli_close($connection);
?>

