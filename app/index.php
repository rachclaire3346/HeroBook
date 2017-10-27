<!DOCTYPE html>
<html>
<head>
	<title>HeroBook</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="app/style.css">
</head>
<body>

	<h1 class="text-center">HeroBook</h1>

	<?php include('hero.php'); ?>

	<ul>

		<?php foreach (getHero() as $Hero) { ?>
			<li>
				<div class="profile">
					<div class="row justify-content-md-center">
						<h2><?=$Hero['name']?></h2>
					</div>	

					<div class="row justify-content-md-center">

						<div class="col col-lg-4">
							<?php $showimage = $Hero['image_url']; ?>
							<img src="<?php echo $showimage; ?>" />
						</div>

						<div class="col col-lg-4">
							<p><?=$Hero['about_me']?></p>
							<a href="/app/profile.php" class="btn btn-secondary active" role="button" aria-pressed="true">View Profile</a>
						</div>
					</div>
					
				</div>		

			</li>
		<?php } ?>

	</ul>

</body>
</html>