<style>
.aa{color:red;
text-transform: capitalize;
}
</style>
<?php

require("dbb.php");
$result = mysqli_query($con, "SELECT * FROM v ORDER BY id ASC");
while($row=mysqli_fetch_array($result)){
echo "<div class='comments_content'>";
echo "<h4><a href='delete.php?id=" . $row['id'] . "'> X</a></h4>";
echo '<h1 class="aa">' . $row['name'] . "</h1>";
echo "<h2>" . $row['date_publish'] . "</h2></br></br>";
echo "<h3>" . $row['comments'] . "</h3>";
echo "</div>";
}
mysqli_close($con);

?>