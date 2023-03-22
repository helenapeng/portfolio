<?php 
$customCSS = '<link rel="stylesheet" href="css/home.css">';
include 'inc/html-top.php';
?>

	<body>
	<div class="container">
		<header>
			<h1> Bicolor Cats </h1>
			<div>A small domesticated carnivorous mammal with soft fur, a short snout, and retractable claws.</div>
		</header>

		<?php include 'inc/nav.php' ?>

<section class="lead inner-container">
	<h2 class="full-width">Welcomeow!</h2>
	<div class="slider">
  		<img src="images/party.jpg" alt="party">
  		<img src="images/violence.jpg" alt="violence">
  	</div>

  	<div id="accordion">
 		<h3>About Bicolor Cats</h3>
 			<p>A bicolor cat or piebald cat is a cat with white fur combined with fur of some other color, for example black or tabby. There are various patterns of bicolor cat. These range from Turkish Van pattern (color on the crown of the head and the tail only) through to solid color with a throat locket. Where there is low-to-medium grade white spotting limited to the face, paws, throat and chest of an otherwise black cat, they are known in the United States as a tuxedo cat. High-grade bicolor results in Van-pattern cats. There are many patterns between, such as "cap-and-saddle", "mask-and-mantle" and "magpie" (more randomly splashed). Bicolors are found in many cat breeds, as well as being common in domestic longhair and domestic shorthair cats.</p>
 			
 			<h3>More About Bicolor Cats</h3>
			<p>Mostly-solid-color bicolor cats occur because there is a white spotting gene present along with a recessive allele of the agouti gene, which evens out the usual striped pattern of the colors of the coat. In contrast, tabby cats have an agouti gene that produces striping of the coat. The Abyssinian has agouti (ticked tabby) fur, giving the appearance of even color with color-banded hairs</p>
		</div>
</section>
		
		<?php include 'inc/scripts.php' ?>
		
		<script src="sss/sss.js"></script>				
		
		<script>
		$('.slider').sss();
		</script>

		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

		<script>
		$( "#accordion" ).accordion();
		</script>
	
	</div>
	</body>

</html>