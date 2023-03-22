<?php
// NOTICE: this part of this HTML document is just one PHP tag
//  This script doesn't output anything to the user's browser
//  so there is no DOCTYPE or any of the usual HTML things
//  in this part

// **********************************
// SECTION ONE: set all the variables
// **********************************

// set some variables
$emailFrom = "hpeng10@u.rochester.edu"; // use YOUR email for both lines 12 and 13
$emailTo = "hpeng10@u.rochester.edu";
$subject = "Lab 13 - HTML Forms";

// the following lines of code will grab the data being passed 
//   from the method="post" in the HTML form and hold it in a variable

// the words inside each $_POST[] must match a name="" attribute from the 
//   HTML form EXACTLY; then create a variable on the left side that
//   makes sense for the data it will hold

// these are from the text INPUT fields...
$name = Trim(stripslashes($_POST['name'])); 
$age = Trim(stripslashes($_POST['age'])); 
$emeow = Trim(stripslashes($_POST['emeow'])); 
// ...used more input fields? Then copy these lines (above)
//   and make more

// these are from the INPUT type="checkbox" fields...
$cute = $_POST['reason1']; 
$meow = $_POST['reason2']; 
$baby = $_POST['reason3']; 
// ...used more checkboxes? Then copy these lines (above)
//   and make more

// this is from all the INPUT type="radio" fields...
$pet = $_POST['pet']; 
// notice: no matter how many radio buttons, there's only one answer

// this is from the TEXTAREA field...
$feedback = Trim(stripslashes($_POST['feedback'])); 

// **********************************
// SECTION TWO: build the email body
// **********************************

// initialize the variable, then start concatenating
			// backslash-n means new-line in emails

$body .= "name: \n"; //...a label
$body .= $name;	  //...a variable
$body .= "\n\n";			  //...a new line
 
$body .= "age: \n"; //...a label
$body .= $age;	  //...a variable
$body .= "\n\n";			  //...a new line

$body .= "emeow: \n"; //...a label
$body .= $emeow;	  //...a variable
$body .= "\n\n";			  //...a new line

$body .= "reason1: \n"; //...a label
$body .= $cute;	  //...a variable
$body .= "\n\n";			  //...a new line

$body .= "reason2: \n"; //...a label
$body .= $meow;	  //...a variable
$body .= "\n\n";			  //...a new line

$body .= "reason3: \n"; //...a label
$body .= $baby;	  //...a variable
$body .= "\n\n";			  //...a new line

$body .= "pet: \n"; //...a label
$body .= $pet;	  //...a variable
$body .= "\n\n";			  //...a new line

$body .= "feedback: \n"; //...a label
$body .= $feedback;	  //...a variable
$body .= "\n\n";			  //...a new line
// ...used more input fields? Then copy these lines (above)
//   and make more

// Do your checkboxes this way...
$body .= "Why is it your faworwite? \n"; 	 	// a heading for your checkbox section

if (isset($reason1)) {		// a checkbox variable
	$body .= $reason1 . "\n";	// the same checkbox variable
}
if (isset($reason2)) {		// a checkbox variable
	$body .= $reason2 . "\n";	// the same checkbox variable
}
if (isset($reason3)) {		// a checkbox variable
	$body .= $reason3 . "\n";	// the same checkbox variable
}

$body .= "\n";
// ...used more checkbox fields? Then copy these lines (above)
//   and make more

// This is for your radio buttons (always just one answer)...
$body .= "What is your faworwite house pet? \n";		// a heading for your radio button section
$body .= $pet;			// the (one) radio button variable
$body .= "\n\n";

// This is for your TEXTAREA
$body .= "talk: \n";		// a heading for your text area
$body .= $feedback;			// the variable for your text area
$body .= "\n";

// **********************************
// SECTION THREE: send the email
// **********************************
// You won't need to edit anything here...

// send email 
mail($emailTo, $subject, $body, "From: <$emailFrom>");


//end the PHP block here...
?>

<!-- **********************************
	 SECTION FOUR: thank the user in HTML;
	 Below, there needs to be an HTML 
	 webpage with a customized message 
	 for the user
	 ********************************** -->

<?php include 'inc/html-top.php'; ?>

	<body>
	<div class="container">
		<header>
			<h1> Bicolor Cats </h1>
			<div>A small domesticated carnivorous mammal with soft fur, a short snout, and retractable claws.</div>
		</header>

		<?php include 'inc/nav.php' ?>
		<main class="full-width">
    <h2>Thank You <?php echo $name; ?></h2>
    <p>Go back to <a href="start.php">the home page</a>.</p>
</main>

	</div>
	</body>

</html>