<?php
	$images = array(
		'collage1.jpg',
		'534019_331079426991348_203828151_n.jpg',
		'546761_345419812223976_1691613766_n.jpg',
		'dimsum-break-1.jpg'
	);
?>	

<div class = "flexslider">
	<ul class = "slides">

	<?php
		foreach ($images as $image) :
	?>
		<li>
			<img src = 'images/<?php echo $image ?>' />
		</li>
	<?php
		endforeach;
	?>
	</ul>
</div>	