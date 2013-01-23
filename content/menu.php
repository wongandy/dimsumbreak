<?php
	require 'connect.php';
	$tables = array('rice', 'dishes', 'desserts', 'beverages');
	$menu_images = array('rice.jpg', 'foods.jpg', 'dessert.jpg', 'beverages.jpg');
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
	$i = 0;
	foreach ($tables as $table) :
		$query = mysql_query("SELECT Name, Price FROM $table");
?>
	<div class = 'menu_column<?php echo $i%2; ?>'>
		<div class = 'menu_list'>
			<table>							
				<tr> <th colspan = '2'> <?php echo ucfirst($table); ?> </th> </tr>
<?php while ($assoc = mysql_fetch_assoc($query)) : ?>
				<tr> 
					<td class = 'item'> <?php echo ucwords($assoc['Name']); ?> </td> 
					<td class = 'price'> <?php echo $assoc['Price']; ?> </td>
				</tr>									
<?php endwhile ?>
			</table>
		</div>

		<div class = 'menu_images'>
			<img src = 'images/<?php echo $menu_images[$i]; $i++; ?>' />																
		</div>		
	</div>
<?php endforeach; ?>
</div> <!-- end div menu -->