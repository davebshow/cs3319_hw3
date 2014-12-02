

<?php
include 'connect.php';

$query = "select * from TeachingAssistant where western_id in (select student from AssignedTo where course='" . $_GET['id'] . "');";

$result = mysqli_query($connection, $query);
if (!$result) {
     die("databases query failed.");
}
echo "<h3>Tas for CS " . $_GET['id'] . "</h3>";
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row["firstname"] . $row["lastname"] . "</li>";
}
mysqli_free_result($result);
echo "</ol>";
mysqli_close($connection);
?>

