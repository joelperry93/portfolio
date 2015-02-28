<?php $projects = json_decode(file_get_contents('projects.json')); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>joel perry's portfolio</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

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
            <header class="row">
                <h4 class="eight columns">Joel Perry | Web Development</h4>
                
                <div class="four columns icons">
                    <a href="mailto:joelperry@me.com">
                        <i class="fa fa-envelope-o icon"> email me</i>
                    </a>
                    <a href="https://github.com/joelperry93">
                        <i class="fa fa-github icon"> github</i>
                    </a>
                </div>
            </header>

			<ul class="projects-list row">

				<?php foreach ($projects as $project): ?>
					<a href="<?= $project->url ?>">
						<li class="six columns project" style="background-image:url('<?= $project->image->url; ?>');">                            
                            <div class="project-preview-footer row">
                                <div class="twelve column project-name">
                                    <?= $project->name ?>
                                </div>
                                <p class="twelve column web-technologies pull-right">
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
