<?php $projects = json_decode(file_get_contents('projects.json')); ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>joel perry's portfolio</title>
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

<div class="container">
	<div class="row">
		<div class="one-half column" style="margin-top: 25%">
			<h4>My name is Joel Perry and this my web development portfolio.</h4>

			<ul>
				<?php foreach ($projects as $project): ?>
					<a href="<?= $project->url ?>">
						<li><?= $project->name ?></li>
					</a>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>

</body>
</html>
