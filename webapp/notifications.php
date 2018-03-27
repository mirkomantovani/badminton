<? require("connect.php");
session_start();


?>
<h1 style="text-align:center">Notifications</h1>
<table>

    <? $sql = "SELECT * FROM friendrequest";
    $result = mysqli_query($connection, $sql);
       echo "<table border='2' style='text-align:center; margin-left:30%;'><tr><td>id</td><td>id1</td><td>id2</td><td>date</td></tr>";
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
     		echo "<tr>";
            foreach ($row as $value) {
    			echo "<td>" . $value. "</td>";
			}
        	echo "</tr>";
        }
    } else {
        echo "You don't have notifications";
    }echo "</table>";

    ?>





</table>