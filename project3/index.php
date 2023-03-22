<?php 
$customCSS = '<link rel="stylesheet" href="css/home.css">';
include 'inc/html-top.php'; ?>

	<body>

	<header class="header-bg">
		<h1><a class="h1" href="index.php">HELENA PENG</a></h1>
			<div class="sub">CSC 170 - Web Design and Development</div>
	</header>

<?php include 'inc/nav.php' ?>

<div class="menu">
<ul>
	<li><a href="#sec1">Typography</a></li>
    <li><a href="#sec2">Watermelon</a></li>
    <li><a href="#sec3">Blackpink</a></li>
    <li><a href="#sec4">Descartes</a></li>
</ul>
</div>

<div class="container">
	<main>
		<h2> HELENA PENG </h2>
		CSC 170 Project 3
		<div class="slider">
  		<img src="images/grid.jpg" alt="grid">
  		<img src="images/melon.jpg" alt="melon">
  		<img src="images/spotify.jpeg" alt="bp">
  		<img src="images/rene.jpg" alt="rene">
  		</div>
		<h2 id="sec1">TYPOGRAPHY</h2>
		<figure class="N">
  			<img src="images/alphabet.jpg" alt="Alphabet">
  			<figcaption>The Alphabet.</figcaption>
		</figure>
		<p>Typography is the art and technique of arranging type to make written language legible, readable and appealing when displayed. The arrangement of type involves selecting typefaces, point sizes, line lengths, line-spacing (leading), and letter-spacing (tracking), as well as adjusting the space between pairs of letters (kerning). The term typography is also applied to the style, arrangement, and appearance of the letters, numbers, and symbols created by the process. Type design is a closely related craft, sometimes considered part of typography; most typographers do not design typefaces, and some type designers do not consider themselves typographers. Typography also may be used as an ornamental and decorative device, unrelated to the communication of information.</p>

		<a href="typography.php">READ MORE</a>

		<h2 id="sec2">WATERMELON</h2>
		<figure class="N">
  			<img src="images/melon4.jpg" alt="Watermelon">
  			<figcaption>Watermelon.</figcaption>
		</figure>
		<p>Watermelon (Citrullus lanatus) is a flowering plant species of the Cucurbitaceae family and the name of its edible fruit. A scrambling and trailing vine-like plant, it is a highly cultivated fruit worldwide, with more than 1,000 varieties. Watermelon is grown in favorable climates from tropical to temperate regions worldwide for its large edible fruit, which is a berry with a hard rind and no internal divisions, and is botanically called a pepo. The sweet, juicy flesh is usually deep red to pink, with many black seeds, although seedless varieties exist. The fruit can be eaten raw or pickled, and the rind is edible after cooking. It may also be consumed as a juice or an ingredient in mixed beverages.</p>

		<a href="watermelon.php">READ MORE</a>

		<h2 id="sec3">BLACKPINK</h2>
		<figure class="N">
  			<img src="images/logo.png" alt="Blackpink">
  			<figcaption>Blackpink's Logo.</figcaption>
		</figure>
		<p>Blackpink (Korean: 블랙핑크; RR: Beullaekpingkeu, commonly stylized as BLACKPINK or BLɅϽKPIИK) is a South Korean girl group formed by YG Entertainment, consisting of members Jisoo, Jennie, Rosé, and Lisa. The group debuted in August 2016 with their single album Square One, which featured "Whistle" and "Boombayah", their first number-one entries on South Korea's Gaon Digital Chart and the US Billboard World Digital Song Sales chart, respectively. Blackpink's music has been characterized as primarily EDM and pop with elements of hip hop and rap, although they have incorporated a variety of other genres in their discography, such as R&B, Arabic music, ballad and rock. They tend to feature bass drops frequently in their songs, especially immediately preceding the chorus, which some publications consider part of their characteristic sound. Vocally, Blackpink's music has been described as combining fierce and bold rapping with frequent use of an "edgy" singing style. Jisoo explained in an interview with Rolling Stone that the members are "involved from the beginning" in their creative process, from "building the blocks" to "adding this or that feeling" and "exchanging feedback".</p>


		<a href="blackpink.php">READ MORE</a>

		<h2 id="sec4">DESCARTES</h2>
		<figure class="N">
  			<img src="images/graph.jpg" alt="Cartesian Graph">
  			<figcaption>Cartesian Graph.</figcaption>
		</figure>
		<p>René Descartes, (born March 31, 1596, La Haye, Touraine, France—died February 11, 1650, Stockholm, Sweden), French mathematician, scientist, and philosopher. Because he was one of the first to abandon Scholastic Aristotelianism, because he formulated the first modern version of mind-body dualism, from which stems the mind-body problem, and because he promoted the development of a new science grounded in observation and experiment, he is generally regarded as the founder of modern philosophy. Applying an original system of methodical doubt, he dismissed apparent knowledge derived from authority, the senses, and reason and erected new epistemic foundations on the basis of the intuition that, when he is thinking, he exists; this he expressed in the dictum “I think, therefore I am” (best known in its Latin formulation, “Cogito, ergo sum,” though originally written in French, “Je pense, donc je suis”). He developed a metaphysical dualism that distinguishes radically between mind, the essence of which is thinking, and matter, the essence of which is extension in three dimensions. Descartes’s metaphysics is rationalist, based on the postulation of innate ideas of mind, matter, and God, but his physics and physiology, based on sensory experience, are mechanistic and empiricist.</p>

		<a href="descartes.php">READ MORE</a>
	</div>
</main>
</div>

	<footer>
		<h2>About</h2>
		Helena Peng - CSC 170 Webpage Design and Development
	</footer>		
		<?php include 'inc/scripts.php' ?>

		<script src="sss/sss.js"></script>				
		
		<script>
		$('.slider').sss();
		</script>

	</body>

</html>
