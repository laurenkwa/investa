<?php
    session_start();
    $apiKey = $_SESSION["apiKey"]; 
    $answer="";

    if(isset($_SESSION["fromCurrency"]) && isset($_SESSION["toCurrency"])) {
       if(isset($_POST["fromCurrency"]) && isset($_POST["toCurrency"])) {
        extract($_POST);
        $_SESSION["fromCurrency"] = $_POST["fromCurrency"];
        $_SESSION["toCurrency"] = $_POST["toCurrency"];

       }

        $fromCurrency = $_SESSION["fromCurrency"];
        $toCurrency = $_SESSION["toCurrency"];


        $url = "https://www.alphavantage.co/query?function=CURRENCY_EXCHANGE_RATE&from_currency=" . $fromCurrency . "&to_currency=" . $toCurrency . "&apikey=" . $apiKey;


        $obj = json_decode(file_get_contents($url), true);

        $string = implode(":", $obj["Realtime Currency Exchange Rate"]);
        $result = explode(":", $string);

        if(isset($_POST["baseCurrencyConvert"])) {
            if (is_numeric($_POST["baseCurrencyConvert"])) {
            $exchangeRate = $result[4];
            $total = $exchangeRate * $_POST["baseCurrencyConvert"]; 
            $answer = "<table><tr><td>Base Currency Amount:</td><b><th>" . $_POST["baseCurrencyConvert"] . " " . $_SESSION["fromCurrency"] .  "</th></b></tr><tr><td>Converted amount:</td><th><b>" . $total . " " . $_SESSION["toCurrency"] . "</b></th></tr></table>";
            } else {
                echo '<script language="javascript">';
                echo 'alert("Please enter valid amount to convert.")';
                echo '</script>';
            }
        }

    } else {
        header("Location: forex.php");
        die();
    }


?>


<html>
	<head>
		<title>Forex</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
				    <div id="divResult" class="container"></div>
                    
                    <div id="calculateForex">
                        <div class="align-center">    
                            <div class="box">
                                <h4>Convert Amount: </h4>
                                <form method="post" action="forexProcess.php#calculateForex">
                                    <h1>Base Currency <?php echo $_SESSION["fromCurrency"];?>:<input type="text" name="baseCurrencyConvert"></h1>
                                    <br/>
                                    <h1><div id="convertedAmount"></div></h1>
                                    <br/>
                                    <button type = "submit" id ="convertAmount" class="button special small">Convert Amount</button>
                                    <br/>
                                </form>     
                            </div>   
                        </div>
                    </div>
                        
                    <br/>
                    
                    <div class="align-center">
                     <a href="forex.php"><button class="button special">Convert Another Currency</button></a>
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
             <script type="text/javascript">

                 $(function() {
                    var result = '<?php echo $string; ?>';
          
            
                    <?php
                     $iterate = "<table class=\'table table-striped\'><tr><th>Base Currency</th><th></th><th>Converted Currency</th><th></th><th>Exchange Rate</th></tr><tr class>";
                     for($i=0; $i<5; $i++) {
                         $iterate .= "<td>" . $result[$i] . "</td>";
                     }
                     
                     $iterate .= "</tr></table>";
                    ?>
          
                    document.getElementById("divResult").innerHTML = '<?php echo $iterate; ?>'; 
                    
                    document.getElementById("convertedAmount").innerHTML="<?php echo $answer?>";
       
                });
        
	           </script>    

	</body>
</html>