<?php
require('access.php');
require('connect.php');

$query = "select * from TeachingAssistant where head_supervisor.western_id='" . $_GET['id'] . "'";
$result = mysqli_query($connection, $query);

if (!$result) {
     die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row["firstname"] . . $row["lastname"] . "</li>";
    echo "</a>";
}
mysqli_free_result($result);
echo "</ol>";
mysqli_close($connection);

?>
