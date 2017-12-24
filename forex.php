<?php
    session_start();
    extract($_POST);

    if(isset($_POST["fromCurrency"]) && isset($_POST["toCurrency"])) {
        extract($_POST);
        if(($fromCurrency !== "" && $toCurrency !== "")) {
            $_SESSION["fromCurrency"] = $fromCurrency;
            $_SESSION["toCurrency"] = $toCurrency;
            $_SESSION["apiKey"] = $apiKey; 

            header("Location: forexProcess.php");
            die();

        } else {
            echo '<script language="javascript">';
            echo 'alert("Please choose currency pair to convert")';
            echo '</script>';
        }
    } 


?>


<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Forex</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script> 
	</head>
	<body class>

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

				</div>
			</section>
        
        
		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
                        <h2>Forex</h2>
						<h4>Real Time Currency Exchange Rates</h4>
					</header>
                    <div class="align-center"> 
                        <div class="box">
                                 <form id="currencyExchange" method="post" action="forex.php">
                                         Base Currency
                                    <div class="select-wrapper">
                                        <select id="fromCurrency" name = "fromCurrency">
                                            <option selected value="">Select Currency:</option>
                                            <option value="USD">US Dollar</option>
                                            <option value="CAD">Canada Dollar</option>
                                            <option value="PHP">Philippine Peso</option>
                                            <option value="KRW">Korean Won</option>
                                            <option value="EUR">Euro</option>
                                            <option value="GBP">British Pound Sterling</option>
                                            <option value="JPY">Japanese Yen</option>
                                            <option value="CHF">Swiss Franc</option>
                                            <option value="AUD">Australian Dollar</option>
                                        </select>
                                    </div> 
                                    <br/><br/>
                                    Converted Currency    
                                    <div class="select-wrapper">    
                                        <select id="toCurrency" name="toCurrency">
                                            <option selected value="">Select Currency:</option>
                                            <option value="USD">US Dollar</option>
                                            <option value="CAD">Canada Dollar</option>
                                            <option value="PHP">Philippine Peso</option>
                                            <option value="KRW">Korean Won</option>
                                            <option value="EUR">Euro</option>
                                            <option value="GBP">British Pound Sterling</option>
                                            <option value="JPY">Japanese Yen</option>
                                            <option value="CHF">Swiss Franc</option>
                                            <option value="AUD">Australian Dollar</option>
                                        </select>    
                                    </div>
                                    <input type="hidden" value='UFGXKEBNFFHKOICE' name="apiKey"/>      
                                    <br/>
                                    <div class="align-center">
                                        <button type = "submit" id ="convert" class="button">Convert</button>
                                    </div>         
                            </form>
                        </div>        
                    </div>    
                </div>  
            </section>
        
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