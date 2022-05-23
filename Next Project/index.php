<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous">
	<title>scroll website</title>
</head>
	<body>
		<!-- Navbar -->
		<nav class="navbar">
      <div class="navbar__container">
        <a href="#home" id="navbar__logo">COLOR</a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="#home" class="navbar__links" id="home-page">Home</a>
          </li>
          <li class="navbar__item">
            <a href="#about" class="navbar__links" id="about-page">About</a>
          </li>
          <li class="navbar__item">
            <a href="#services" class="navbar__links" id="services-page"
              >Services</a
            >
          </li>
          <li class="navbar__btn">
            <a href="#sign-up" class="button" id="signup">Sign Up</a>
          </li>
        </ul>
      </div>
    </nav>

		<!-- Legend Section -->

		<div class="legend" id="home">
			<div class="legendContainer">
				<h1 class="legendHeading"> Choose your <span>colors</span>	</h1>
				<p class="legendDescription">	Unlimited possibilities</p>
				<button class="mainBtn"><a href="#"> Explore</a></button>
			</div>
		</div>


		<!-- About Section -->

		<div class="about" id="about">
			<div class="aboutContainer">
				<div class="aboutImageContainer">
					<div class="aboutImageCard"><i class="fas fa-layer-group"> </i></div>
					</div>
					<div class="aboutContent">
						<h1> What do we do? </h1>
						<h2> We help businesses scale</h2>
						<p> Schedule a call to learn more about our services </p>
						<button class="mainBtn"><a href="signf-up"> Schedule Call </a></button>
					</div>
				</div>           
			</div>
		



		<!-- Services -->
		<div class="services" id="services">
			<h1> Our Services </h1>
			<div class="servWrapper">
				<div class="servCard">
					<h2>Custom Colorways</h2>
					<p> AI powered technology</p>
					<div class="servicesBtn"><button>Get Started</button></div>
				</div>
				<div class="servCard">
					<h2>Are you ready?</h2>
					<p>Take the leap</p>
					<div class="servicesBtn"><button>Get Started</button></div>
				</div>
				<div class="servCard">
					<h2>Full Gradients</h2>
					<p> 100 combinations</p>
					<div class="servicesBtn"><button>Get Started</button></div>
				</div>
				<div class="servCard">
					<h2>Infinite Choices</h2>
					<p>Thousands of colors</p>
					<div class="servicesBtn"><button>Get Started</button></div>
				</div>
			</div>
		</div>


		<!-- featured section -->
		<div class="about" id="sign-up">
			<div class="aboutContainer">
				<div class="aboutContent">
					<h1> Join our team </h1>
					<h2> Sign up today!</h2>
					<p> See what its all about </p>
					<button class="mainBtn"><a href="#"> Sign up </a></button>
				</div>
				<div class="aboutImageContainer">
					<div class="aboutImageCard" id = "card-2"><i class="fas fa-users"> </i></div>
					</div>
				</div>           
			</div>

			<!-- footer section -->

			<div class="footerContainer">
				<div class="footerLinks">
					<div class="footerLinkWrapper">
						<div class="footerLinkItems">
							<h2>About us</h2>
							<a href="/sign-up">How it Works</a>
							<a href="/sign-up">Testimonials</a>
							<a href="/sign-up">Careers</a>
							<a href="/sign-up">Terms of Service</a>
						</div>
						<div class="footerLinkItems">
							<h2>About us</h2>
							<a href="/sign-up">How it Works</a>
							<a href="/sign-up">Testimonials</a>
							<a href="/sign-up">Careers</a>
							<a href="/sign-up">Terms of Service</a>
						</div>
					</div>
					<div class="footerLinkWrapper">
						<div class="footerLinkItems">
							<h2>About us</h2>
							<a href="/sign-up">How it Works</a>
							<a href="/sign-up">Testimonials</a>
							<a href="/sign-up">Careers</a>
							<a href="/sign-up">Terms of Service</a>
						</div>
						<div class="footerLinkItems">
							<h2>About us</h2>
							<a href="/sign-up">How it Works</a>
							<a href="/sign-up">Testimonials</a>
							<a href="/sign-up">Careers</a>
							<a href="/sign-up">Terms of Service</a>
						</div>
					</div>
				</div>
				<section class="socialMedia">
					<div class="socialMediaWrapper">
						<div class="footerLogo">
							<a href="." id="footerLogo">COLOR</a>
						</div>
						<p class="websiteRights"> Color 2020. All rights reserved</p>
						<div class="socialIcons">
							<a href="/" class="socialIconLink" target="_blank"><i class="fab fa-facebook"></i></a>
							<a href="/" class="socialIconLink" target="_blank"><i class="fab fa-instagram"></i></a>
							<a href="/" class="socialIconLink" target="_blank"><i class="fab fa-youtube"></i></a>
							<a href="/" class="socialIconLink" target="_blank"><i class="fab fa-linkedin"></i></a>
							<a href="/" class="socialIconLink" target="_blank"><i class="fab fa-twitter"></i></a>
						</div>
					</div>
				</section>
			</div>
		<script src="app.js"> </script>
	</body>
</html>