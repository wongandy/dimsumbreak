<?php
	$branches = array(
		array('Colon, Colon St., Cebu City', '+63-32-2550333', '9:00 AM - 9:00 PM', 'img_3236.jpg'), 
		array('GMC Arcade, Lapu-Lapu City', '+63-32-3413388', '10:00 AM - 10:00 PM', 'Dimsum.Break.SM.North.Edsa-21.jpg'), 
		array('Gaisano Fiesta Mall, Tabunok, Talisay City', '+63-32-4917979', '9:00 AM - 10:00 PM', 'P1120450.jpg')
	);
?>

<div id = 'branches'>
	<h2> Our Branches</h2>
	
	<p>
		Come visit any of our branches to experience different kinds of delicious and 
		sumptuous dimsum dishes at affordable prices and with excellent service. Each 
		of our dishes are meticulously prepared and served fresh in order to ensure 
		that our customers are satisfied and happy of their dining experience. We hope 
		to see you soon and we guarantee that you will enjoy the variety of dimsum 
		dishes available.
	</p>
	
<?php
	foreach ($branches as $branch) :
		$i = 0;
?>
	<div class = 'branches_line'> </div>
	
	<div class = 'branches_info'>
		<h4> Address: </h4>
		
		<p> <?php echo $branch[$i]; $i++; ?> </p>
		
		<h4> Telephone: </h4>
		
		<p> <?php echo $branch[$i]; $i++; ?> </p>
		
		<h4> Business Hours </h4>
		
		<p> <?php echo $branch[$i]; $i++; ?> </p>
	</div>
	
	<div class = 'branches_images'>
		<img src = 'images/<?php echo $branch[$i]; ?>' />
	</div>
	
<?php
	endforeach;
?>
</div> 