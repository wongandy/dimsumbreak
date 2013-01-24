<?php
	require 'connect.php';
?>

<div id = 'menu'>					
	<h2> Our Menu</h2>
	
	<p>
		Choose and order from our variety of authentic dimsum dishes
		like the all time favorite Sio Mai, the crispy Spring Roll, or
		the flavorful Sweet and Sour Pork. Here at Dimsum Break, we always
		deliver the best dimsum experience to our customers.
	</p>

<?php
		$query = mysql_query("SELECT * FROM menu_items SORT BY Type ASC LIMIT 0, 10");
		$last_type = "";

		$i = 0;

		while ($item = mysql_fetch_assoc($query)) {
			if ($item['Type'] != $last_type) {
				$last_type = $item['Type'];
				echo "<div class = 'menu_column" . $i%2 . "'>";
				echo "<div class = 'menu_list'>";
				echo "<table>";
				echo "<tr><th colspan = '2'>" . ucfirst($item['Type']) . "</th></tr>";
			}
			
			echo "<tr>";
			echo "<td class = 'item'>" . ucwords($item['Name']) . "</td>";
			echo "<td class = 'price'>" . $item['Price'] . "</td>";
			echo "</tr>";
			
			if ($item['Type'] != $last_type) {
				echo "</table>";
				echo "</div>";

				echo "<div class = 'menu_images'>";
				echo "<img src = 'images/{$item['Type']}' />";
				echo "</div>";
			}
			
			// increment $i
			$i++;
		}
?>
</div> <!-- end div menu -->