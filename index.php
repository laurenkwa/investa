<?php
session_start();

?>

<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Investa</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<nav id="nav">
						<a href="index.php">Home</a>
						<a href="forex.php">Forex</a>
						<a href="sp.php">S&amp;P500</a>
                        <a href="index.php#about">About</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Investa</h1>
					</header>
                        <h3>The latest stock and forex data at your fingertips.</h3>
                        <br/><br/>
					<div class="flex ">
						<div>
							<span><img src="images/money.png" class="homeIcon"/></span>
                            <a href="forex.php"><h3>Forex Converter</h3></a>
							<p>Real Time Exchange Rates</p>
						</div>

						<div>
							<span><img src="images/sp.png" class="homeIcon"/></span>
                            <a href="sp.php"><h3>S&amp;P Index</h3></a>
							<p>Current and Historical Prices</p>
						</div>

					</div>

				</div>
			</section>


		<!-- Three 
			<section id="three" class="wrapper align-center">
				<div class="inner">
                    <h3>Investa</h3>
                    <h1>created by Lauren Kwa</h1>
                    <p>Powered by Alpha Vantage API</p>
                    <footer>
                        <a href="#about" class="button">Learn More</a>
                    </footer>
                </div>
					<div class="flex flex-2">
						<!--<article>
							<div class="image round">
								<img src="images/lauren.jpg" alt="Pic 01" />
							</div>
						</article>
						<article>
							<header>
								<h3>Investa</h3>
							</header>
							<p>THis site</p>
							<footer>
								<a href="#" class="button">Learn More</a>
							</footer>
						</article> 
                    </div>
			</section>

        --!>

        <!-- About Investa !--> 
            <hr class="major"/>
            <div class="inner">
                <section id="about" class="wrapper align-center">
                    <header>
                        <h2 id="content">About Investa</h2>
                    </header>
                        <p>Investa is a financial data website providing users access to forex and stock data.</p>
                        <p>This website is powered by Alpha Vantage's API, which provides current and historical financial data through JSON.</p>   
                        <p>Languages used: HTML, PHP, Javascript</p>
                        <br/><br/>
                        <p>Created by Lauren Kwa</p>
                        <p>
                            <a href="https://github.com/laurenkwa/investa" target="_blank"><button class="button special">Github Link</button></a>
                        </p>
                        <p><a href="#aboutLauren"><button class="button special">Learn more about the author</button></a></p>
                </section>
            </div>
        
        <!-- About the Author !--> 
            <div id ="aboutLauren">
                <div class="inner">
                    <hr/>
                    <header class="wrapper align-center"><h3>Lauren Kwa</h3></header>
                    <hr/>
                    <div>
                        <div class="4u"> 
                        <span class="image fit image left">
                            <img src="images/lauren.jpg" alt="Pic 01" />
                        </span>
                        </div>
                    </div>
                    <p>Lauren is a Computer Systems student at the British Columbia Institute of Technology.</p>
                    <p>She is interested in software development and investing. For fun, she decided to combine those two hobbies into a project, so she created this website.</p>
                    <br/><br/>
                    <hr/>
                    <br/><br/>
                    <div class="wrapper align-center"><h3>Get Connected</h3></div>
                    <div class="wrapper align-center">
                        <a href="https://www.linkedin.com/in/laurenkwa/" target="_blank"> 
                            <button class="button special">Linked In</button>
                        </a>
                        <br/><br/>
                        <a href="https://github.com/laurenkwa" target="_blank">   
                            <button class="button special">Github</button>
                        </a>
                        <br/><br/>
                        <a href="http://laurenkwa.com" target="_blank">   
                            <button class="button special">Personal Website</button>
                        </a>
                           
                    </div> 
                </div>    
                <hr class="major"/>
            </div>
        
            <!-- footer -->
            <div class="wrapper align-center">
                <p class="copyright text-muted">
                Copyright &copy; Lauren Kwa 2017
                <br/>
                Design: <a href="http://templated.co">Templated</a>                  
                </p>
            </div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>