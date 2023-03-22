<?php
$customCSS = '<link rel="stylesheet" href="css/forms.css">';
include 'inc/html-top.php';
?>

	<body>
	<div class="container">
		<header>
			<h1> Bicolor Cats </h1>
			<div>A small domesticated carnivorous mammal with soft fur, a short snout, and retractable claws.</div>
		</header>

		<?php include 'inc/nav.php' ?>
<form method="post" action="form-processor.php" class="full-width">		
	<fieldset>
		<legend>Pwersonal Infwomation:</legend>	
			Name: <input type="text" name="name"> 
		<br><br>
			Age: <input type="number" name="age">
		<br><br>
			E-meow: <input type="email" name="emeow">
	</fieldset>
	
	<br>

	What is your faworwite house pet?
	<br>
  		<input type="radio" id="cat" name="pet" value="cat">
 		<label for="cat">Cat</label><br>
 		<input type="radio" id="kitty" name="pet" value="cat2">
 		<label for="kitty">Kitty</label><br>
 		<input type="radio" id="feliscatus" name="pet" value="cat3">
 		<label for="feliscatus">Felis catus</label><br>

	<br>

	Why is it your faworwite?
	<br>
  		<input type="checkbox" id="reason1" name="reason1" value="cute">
  		<label for="reason1">Cute</label><br>
 		<input type="checkbox" id="reason2" name="reason2" value="meow">
 		<label for="reason2">Meow</label><br>
 		<input type="checkbox" id="reason3" name="reason3" value="baby">
  		<label for="reason3">Baby-sized</label>

	<br><br>

	Talk to us!
	<br>
	<textarea id="feedback" name="feedback">
	</textarea>

	<br>
	<br>

	<input type="submit" value="Ciao!">
</form>

		<?php include 'inc/scripts.php' ?>

	</div>
	</body>

</html>