<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Your page title here :)</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
   <link rel="stylesheet" href="css/style.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">


</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container">
	<div class="row">
		<div class="one-half column" style="margin-top: 25%">
			<h4>My name is Joel Perry and this my web development portfolio.</h4>

			<ul>
				<?php if ($handle = opendir('p/')): ?>
					<?php while (false !== ($file = readdir($handle))): ?>
					  	<?php if (substr($file, 0, 1) !== '.'): ?>
							<a href="/p/<?php echo $file; ?>">
								<li><?php echo $file; ?></li>
							</a>
					  	<?php endif; ?>
					<?php endwhile; ?>

					<?php closedir($handle); ?>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
