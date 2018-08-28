<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link rel="shortcut icon" type="image/x-icon" href="resource/img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <title>Simplon Charleville</title>

</head>

<body>

	<header>
    <!-- The video -->
<video autoplay muted loop id="myVideo">
 <source src="video/simplon.mp4" type="video/mp4">
</video>
<div class="tester">



</div>
<!-- Optional: some overlay text to describe the video -->
<div class="content2">
  <navbar>

      <div class="logo">
        <a href="index.php" class="active"><img src="img/simplonlogo.png" alt="logo simplon"></a>
      </div>
      <div class="links">
        <a href="index.php" class="active">Home</a>
        <a href="learn.php" class="active" class="active">Learn</a>
        <a href="project.php" class="active">A Project ?</a>
        <a href="help.php" class="active">Help Us</a>
				<a href="courses.php" class="active">Courses</a>
      </div>
      <div class="backdoor">
        <a href="backdoor.php" id="backdoor">BACKDOOR</a>
      </div>


	</navbar>
 <!-- Use a button to pause/play the video with JavaScript -->
</div>
	</header>


	<main>

<div class="fixed-action-btn">
  <a class="btn-floating btn-large black">
    <i class="large material-icons">SOC</i>
  </a>
  <ul>
    <li><a href="#" class="btn-floating black"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="#" class="btn-floating yellow black"><i class="fab fa-linkedin-in"></i></a></li>
    <li><a href="#" class="btn-floating black"><i class="fab fa-twitter"></i></a></li>
    <li><a href="#" class="btn-floating black"><i class="fab fa-google-plus-g"></i></a></li>
  </ul>
</div>

		<section>
      <div class="rubriques">
        <div class="icons">
          <img src="img/user.png" alt="user">
        </div>
        <div class="text">
          <h4>Vous souhaitez</h4>
          <p>Apprendre ?</p>
        </div>
        <div class="button">
          <a href="learn.php">Cliquez ici</a>
        </div>
  		</div>

      <div class="rubriques">
        <div class="icons">
          <img src="img/info.png" alt="info">
        </div>
        <div class="text">
          <h4>Vous souhaitez</h4>
          <p>Proposer un projet ?</p>
        </div>
        <div class="button">
          <a href="project.php">Cliquez ici</a>
        </div>
  		</div>

      <div class="rubriques">
        <div class="icons">
          <img src="img/ouvrier.png" alt="ouvrier">
        </div>
        <div class="text">
          <h4>Vous souhaitez</h4>
          <p>Engager un stagiaire ?</p>
        </div>
        <div class="button">
          <a href="hire.php">Cliquez ici</a>
        </div>
  		</div>

      <div class="rubriques">
        <div class="icons">
          <img src="img/cloud.png" alt="cloud">
        </div>
        <div class="text">
          <h4>Vous souhaitez</h4>
          <p>Nous aider?</p>
        </div>
        <div class="button">
          <a href="help.php">Cliquez ici</a>
        </div>
  		</div>
		</section>


	</main>
	<footer>
    <div class="footer">

			<a href="#" class="icons-fb"></a>
	      <a href="#" class="icons-tw"></a>
				<a href="#" class="icons-yt"></a>
				<a href="#" class="icons-ig"></a>

    </div>
	</footer>
</body>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
 var elems = document.querySelectorAll('.fixed-action-btn');
 var instances = M.FloatingActionButton.init(elems, {
   direction: 'bottom',
   hoverEnabled: false
 });
});
</script>
<script src="js/scroll.js"></script>
</html>
