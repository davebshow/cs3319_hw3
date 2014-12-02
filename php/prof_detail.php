<?php
require('connect.php');

$query = "select * from TeachingAssistant WHERE head_supervisor in (SELECT western_id from Instructor where western_id='" . $_GET['id'] . "')";
$result = mysqli_query($connection, $query);

if (!$result) {
     die("databases query failed.");
}
echo "<h3>Head supervised</h3>";
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row["firstname"] . ' ' .  $row["lastname"] . ' ' . $row["western_id"] . ' ' . $row["degree"] . "</li>";
}
mysqli_free_result($result);
echo "</ol>";




$query2 = "select * from TeachingAssistant WHERE western_id in (SELECT student from CoSupervises where instructor='" . $_GET['id'] . "')";
$result2 = mysqli_query($connection, $query2);

if (!$result2) {
     die("databases query failed.");
}
echo "<h3>Co-supervised</h3>";
echo "<ol>";
while ($row = mysqli_fetch_assoc($result2)) {
    echo "<li>";
    echo $row["firstname"] . ' ' .  $row["lastname"] . ' ' . $row["western_id"] . ' ' . $row["degree"] . "</li>";

}
mysqli_free_result($result2);
echo "</ol>";


mysqli_close($connection);

?>
