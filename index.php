<?php $projects = json_decode(file_get_contents('projects.json')); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>joel perry's portfolio</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" type="image/png" href="images/favicon.png">
</head>
<body>

<div class="container">
	<div class="row">
        <div class="twelve column">
            <header>
      			<h4>Joel Perry's Web Development Portfolio.</h4>
            </header>

			<ul class="projects-list row">
				<?php foreach ($projects as $project): ?>
					<a href="<?= $project->url ?>">
						<li class="project six columns">
                            <img src="<?= $project->image->url; ?>" class="project-preview-image" />
                            
                            <div class="row project-preview-footer">
                                <div class="one-half column project-name">
                                    <?= $project->name ?>
                                </div>

                                <p class="one-half column web-technologies">
                                    <?= implode(', ', $project->technologies) ?>
                                </p>
                            </div>
                        </li>
					</a>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>

</body>
</html>
