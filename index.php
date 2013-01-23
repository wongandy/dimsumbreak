<!DOCTYPE html>
	<html>
		<head>
			<link rel = 'stylesheet' type = 'text/css' href = 'css/styles.css' />
			
			<link rel = 'stylesheet' href = 'flexslider/flexslider.css' />
			
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
			
			<script src = 'flexslider/jquery.flexslider.js'> </script>
			
			<script>
				$(window).load(function() {
					$('.flexslider').flexslider({
						animation: "slide"
					});
				});
			</script>
		</head>
		
		<body>
			<div id = 'wrapper'>
				<div id = 'header'> 
					<a href = 'index.php?content=home'> <img src = 'images/images.jpg' /> </a> 
				</div>
				
				<div id = 'navigation_bar'>
					<ul>
						<li> <a href = 'index.php?content=home'> Home </a> </li>
						<li> <a href = 'index.php?content=about_us'> About Us </a> </li>
						<li> <a href = 'index.php?content=menu'> Menu </a> </li>						
						<li> <a href = 'index.php?content=branches'> Branches </a> </li>						
					</ul>
				</div> <!-- end div nav bar -->
				
				<div id = 'main_content'>																	
					<?php
						$content = '';
						if (isset($_GET['content'])) {
							$content = $_GET['content'];
						}
						
						$content = (empty($content)) ? 'home' : $content;
						include 'content/' . $content . '.php';
					?>					
				</div> <!-- end div main_content -->
				
				<div id = 'footer'>				
					© 2013 Dimsum Break Corporation. All rights reserved.
				</div> <!-- end div footer -->								
				
			</div> <!-- end div wrapper -->			
		</body>
	</html>