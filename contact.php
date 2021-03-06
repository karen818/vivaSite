<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Viva! NM Rural Animal Rescue is a small, volunteer based animal rescue located in Albuquerque, New Mexico.">
    
	    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
		<link rel="stylesheet" type="text/css" href="vendors/css/font-awesome.css">

		<link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
		
		<link rel="stylesheet" type="text/css" href="resources/css/vivastyle.css">
		<link rel="stylesheet" type="text/css" href="resources/css/queries.css">
		
		<link href='http://fonts.googleapis.com/css?family=Architects+Daughter|Raleway:400,200,300,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oldenburg|Cherry+Cream+Soda' rel='stylesheet' type='text/css'>
		
			
		<title>Viva! NM Rural Animal Rescue</title>
		
		<link rel="apple-touch-icon" sizes="57x57" href="/resources/favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/resources/favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/resources/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/resources/favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/resources/favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/resources/favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/resources/favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/resources/favicons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/resources/favicons/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="/resources/favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/resources/favicons/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="/resources/favicons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/resources/favicons/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="/resources/favicons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/resources/favicons/manifest.json">
		<link rel="shortcut icon" href="/resources/favicons/favicon.ico">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="/resources/favicons/mstile-144x144.png">
		<meta name="msapplication-config" content="/resources/favicons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
		
	</head>
	<body>
		<header class="contact-img">
			<img src="resources/img/logo.png" alt="Viva logo" class="logo" />
			<nav>
				<ul class="main-nav">
					<li><a href="index.html">Home</a></li>
					<li><a href="foster.html">Foster</a></li>
					<li><a href="adopt.html">Adopt</a></li>
					<li><a href="donate.html">Donate</a></li>
					<li><a href="contact.php">Contact&sol;FAQs</a></li>
					<li><a href="http://www.facebook.com/VivaAnimals" target="_blank"><i class="ion-social-facebook"></i></a><a href="https://twitter.com/vivapaws" target="_blank"><i class="ion-social-twitter"></i></a><a href="https://instagram.com/vivapaws/" target="_blank"><i class="ion-social-instagram"></i></a></li>
				</ul>
			</nav>
		</header>
		
		<section class="section-contact">
			<div class="row">
				<h1>Contact</h1>
			</div>
			<div class="row">
				<div class="col span-1-of-3">
					<img src="resources/img/adopt3.jpg" alt="Image of foster dog" class="contact-photo1">
				</div>
				<div class="col span-1-of-3 box">
					<a href="mailto:vivapaws@gmail.com"><i class="fa fa-envelope fa-2x"></i>&nbsp;&nbsp;Email Viva</a><br /><br />
					<a href="http://www.facebook.com/VivaAnimals" target="_blank"><i class="fa fa-facebook-square fa-2x"></i>&nbsp;&nbsp;Message us on Facebook</a><br />
					<p><i class="fa fa-pencil-square-o fa-2x"></i>Or fill out this contact form</p><br />
					<?=$thankYou ?>
					<form action="http://www.viva.com/contact" method="post" action="contact.php" target="_blank" class="contact-form">
						<label>Name</label>&nbsp;&nbsp;<input type="text" name="name" id="name" placeholder="Full Name"><br /><br />
						<label>Email</label>&nbsp;&nbsp;&nbsp;<input type="text" name="email" id="email" placeholder="Email"><br /><br />
						<textarea name="message" rows="4" placeholder="Message to Viva"></textarea>
						<input type="submit" name="submit" id="submit" value="&nbsp;Send Message&nbsp;">
						
					</form>

				</div>
				<div class="col span-1-of-3">
					<img src="resources/img/lauraMeeks.jpg" alt="Image of foster dog" title="Original image by Laura Meeks" class="contact-photo2">
				</div>
			</div>
		</section>
		<section class="section-faqs">
			<div class="row">
				<h1>Frequently Asked Questions</h1>
			</div>
			<div class="row">
				<div class="col span-1-of-2">
					<h3>Where is your location and what are your hours?</h3>
					<p>We are a foster-based rescue, which means that our adoptable furkids are safe in foster homes throughout the Albuquerque Metro area. We do not have set hours of operation, but we do try to keep Sundays free to spend time with our families and furkids.<br /><br />You can see our adoptable pets on our <a href="http://www.facebook.com/VivaAnimals" target="_blank">Facebook page</a>. Please note that meet-and-greets are by appointment only as we have to schedule them with the foster families. An adoption application is required prior to scheduling a meet-and-greet.</p>
					
					<h3>Do you take in strays or owner-surrendered animals?</h3>
					<p>
						No, we do not. We work nearly exclusively with the Valencia County Animal Shelter, and our goal is to help them lower their euthanasia rate. In order to accomplish our mission, we generally only pull animals from this shelter into our program. We do consider animals from other shelters on a case by case basis.<br /><br />
						We recommend that if you are surrendering an animal due to behavioral problems that you first call a trainer or behavioral hotline. Animal Humane New Mexico offers this help for free.<br />
						<span>
							<i class="fa fa-phone icon-small"></i>
&nbsp;&nbsp;&nbsp;Animal Humane Behavior Hotline: 505-938-7900</span><br />
							<span><i class="fa fa-envelope icon-small"></i>
&nbsp;&nbsp;&nbsp;<a href="mailto:behaviorhelpline@animalhumanenm.org">behaviorhelpline@animalhumanenm.org</a><br /></span>
							<span><i class="fa fa-globe icon-small"></i>
&nbsp;&nbsp;&nbsp;<a href="http://animalhumanenm.org/pets/behavior" target="_blank">Animal Humane New Mexico</a>
						</span>
					</p>
					<h3>Do you do out of state adoptions?</h3>
					<p>
						No, we do not. Our adoption process includes not only an adoption application, but a meet-and-greet as well as a home visit. These things are not feasible for us when the adopter is not local. We would be happy to provide you with contact information for rescues in your local area to adopt from if you would like. 
					</p>
					
				</div>
				<div class="col span-1-of-2">
					<h3>I am really interested in adopting one of your animals, how do I do that?</h3>
					<p>
						We have an adoption process that includes an adoption application, meet-and-greet, home visit, and then an adoption contract. Our goal with every adoption is to find the home that best fits the animal's needs and personality. In order to succeed in this, we do not adopt out on a "first come, first served" basis. We review each application, and choose the ones that we feel will be the best match to continue with the meet-and-greet process.
					</p>
					<h3>Where can I fill out this application?</h3>
					<p>
						Once your application is received, we will review it to determine if you may be a good match for the animal in question. If we believe this to be so, we will contact you via telephone to discuss your application, and the animal you have applied for. If your application is approved, we will then schedule a meet-and-greet. <br /><br />Please understand that a meet-and-greet does NOT guarantee an adoption. The purpose of the meet-and-greet is to see how the animal interacts with you, and vice versa. We often do multiple meet-and-greets with multiple applicants before finding the perfect home. Our adoption application can be found here: <a href="http://freeonlinesurveys.com/s.asp?sid=je5ws0cdf6xmy3u86549" target="_blank">Adoption Application</a>
					</p>
					
					
					<h3>What are your adoption fees?</h3>
					<p>
						Generally, our adoption fee is $200.00. This fee includes spay/neuter, microchip, and current vaccinations. Occasionally, we will have a higher or lower adoption fee based on an animal's special needs, or age. 
					</p>
					<h3>Where can we send you donations to help out?</h3>
					<p>
						Please visit our <a href="donate.html">Donate Page</a> for all the different ways you can help!
					</p>
					
				</div>
			</div>
				

		</section>
		
		<footer>
			<div class="row">
				<p>Copyright &copy; Viva! NM Rural Animal Rescue&nbsp; &#8226; &nbsp;All rights reserved&nbsp; &#8226; &nbsp;<a href="http://www.karenkellydesign.com" target="_blank">Website by Karen Kelly Design</a>
					
					<ul class="social-links">
						<li><a href="http://www.facebook.com/VivaAnimals" target="_blank"><i class="ion-social-facebook"></i></a></li>
						<li><a href="https://twitter.com/vivapaws" target="_blank"><i class="ion-social-twitter"></i></a></li>
						<li><a href="https://instagram.com/vivapaws/" target="_blank"><i class="ion-social-instagram"></i></a></li>
					</ul></p>
					
			</div>
			
		</footer>

		<?php

		if($_POST["submit"]) {
			$recipient="vivapaws@gmail.com";
			$subject="Message from Viva website";
			$sender=$_POST["sender"];
			$senderEmail=$_POST["senderEmail"];
			$message=$_POST["message"];

			$mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

			mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

			$thankYou="<p>Thank you! Your message has been sent. Woof!</p>";
		}

		?>


	</body>
</html>

 


-->
