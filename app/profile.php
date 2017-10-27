<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<h1 class="text-center">HeroBook</h1>

	<?php include('hero.php'); ?>

	<ul>

		<?php foreach (getHero() as $Hero) { ?>
			<li>
				<div class="profilePage">
						
					<div class="row justify-content-md-center">
						<h2 class="profName"><?=$Hero['name']?></h2>
					</div>
					
						
					<div class="row justify-content-md-center">
						<?php $showimage = $Hero['image_url']; ?>
						<img src="<?php echo $showimage; ?>" />

						<p><?=$Hero['biography']?></p>
						<a href="/app/index.php" class="btn btn-secondary active" role="button" aria-pressed="true">Home Page</a>
					</div>

				</div>

			</li>
		<?php } ?>

	</ul>
		
</body>
</html>