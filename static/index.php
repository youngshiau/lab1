<?php
require_once 'functions.php';	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en-US" dir="ltr">
<head>
    <link rel="shortcut icon" href="images/cthulu-favicon.png">
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <title>Cthoogle</title>
    <meta name="description" content="Young Shiau's manager application for CSE 112 at UCSD">
    <meta name="keywords" content="112, Young, Shiau, manager, application">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
	<?php
	if(isset($_GET['query'])) {
		$query = $_GET['query'];
	?>
	<div class="search">
		<img alt="Cthoogle" src="images/cthoogle-small.png" class="search">
		<form method="get" action="index.php" class="search test">
			<input type="text" id="search-bar" name="query" value="<?php echo escape($query); ?>">
			<input type="submit" id="submit-button">
		</form>
		<img alt="tentacles" src="images/tentacles.png" class="tentacles">
	</div>
	<div class="query-results">
		<?php
		if($query != "Young Shiau") {
		?>
		<h2>Did you mean: <a href="index.php?query=Young+Shiau" id="dym">Young Shiau</a></h2>
		<?php
		}
		?>
		<p>Exactly 2 results (0.00 seconds)</p>
		<div class="results">
			<div class="result">
				<h2 class="result-title"><a href="http://www.youngshiau.com">Young Shiau</a></h2>
				<div class="addr">
					http://www.youngshiau.com
				</div>
				<div>
					<b>Young Shiau's</b> personal website (under construction).
				</div>
			</div>
			<br>
			<div class="result">
				<h2 class="result-title"><a href="https://www.linkedin.com/pub/young-shiau/51/ba0/6b9">Young Shiau | LinkedIn</a></h2>
				<div class="addr">https://www.linkedin.com/pub/young-shiau/51/ba0/6b9</div>
				<div>
					View <b>Young Shiau's</b> professional profile on LinkedIn. Linked in is the world's largest <br>
					business network, helping professionals like <b>Young Shiau</b> discover inside...<br>
				</div>
			</div>
		</div>
		<div class="info">
			<img alt="Young Shiau" src="images/ohmygodwhy.png">
			<ul>
				<li><h3>Young Shiau</h3></li>
				<li>Software Engineer</li>
				<li>Young Shiau was created when Satan downed a cup of black coffee and 
				spit it out because it was too hot. The coffee fused with the soul of a 
				newly-born child in Taiwan, and Young came into existence. He is currently 
				a student studying Computer Science at the UCSD. He spends most of his 
				time either hunched over his laptop, furiously pumping out code to meet a 
				deadline, or lying on a couch, staring at the ceiling with his eyes glazed over.
				</li>
				<li>E-Mail: youngshiau@gmail.com</li>
				<li>Location: San Diego, CA</li>
			</ul>
		</div>
	</div>
	<?php
	}
	else {
	?>
	<div id="logo">
		<img alt="Cthoogle" src="images/cthoogle.png">
	</div>
	<div id="search">
		<form method="get" action="index.php">
			<input type="text" id="search-bar" name="query">
			<input type="submit" id="submit-button">
		</form>
	</div>
	<?php
	}
	?>
</body>
</html>
