<?php
    session_start();

    include("include.php");

    if(isset($_POST["stockCode"])) {
        if(trim($_POST["stockCode"]) == "") {
            header("Location:sp.php?error='No Stock Selected'");
            die();
        } else {
            header("Location: stockData.php?stock=" . $_POST["stockCode"]);
            die();
        }
    }

    if(isset($_GET["error"])) {
        $error = $_GET["error"];
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
		<title>S&amp;P 500 Companies</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script> 
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

				</div>
			</section>
        
        
		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
                        <h2>S&amp;P 500 Companies</h2>
						<h1>Search the current and historical data for each S&amp;P500 company</h1>
					</header>
                    <div class="align-center">
                        <div class="box">
                            <div class="error">
                                <?php 
                                    if(isset($error)) {
                                        echo $error;   
                                    }
                                ?>
                            </div>
                                
                            <form method="post" action="sp.php" id="stockData">    
                                Enter a Company Name:<br/>
                                <input type="text" id="autocomplete" placeholder="Search a company" oninput="onInput()"/>
                                <input type="hidden" name ="stockCode" id="stockCode" value=""/>
                                <br/><br/>
                                <button type="submit" class="button special">SEARCH</button>
                                <div id="answer"></div>
                                <br/><br/>
                                -- OR --
                                <br/>
                            </form>
                            <button id="showTable" onclick="showTable()" class="button special">See full list of S&amp;P500</button>
                            </div> 

                            <table id = "spIndex" style="display:none; text-align:center; width:50%; margin: 0 auto;">
                            <?php 
                                echo "<td><b>Company Name</b></td><td><b>Ticker Symbol</b></td>";


                                for($i=0; $i<count($companyNamesArray); $i++) {
                                    echo "<tr>";
                                    echo "<td>" . $companyNamesArray[$i] . "</td>";
                                    echo "<td>" . $companySymbolsArray[$i] . "</td>";
                                    echo "</tr>";
                                } 
                            ?>
                            </table>   
                        
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
            <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
            <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
            <script type="text/javascript">
                var jsArray = <?php echo '["' . implode('", "', $companyNamesArray) . '"]' ?>;
                $('#autocomplete').autocomplete({
                    source: function(request, response) {
                        var results = $.ui.autocomplete.filter(jsArray, request.term);
                        response(results.slice(0, 5));
                    },
                    select: function (event, ui) {
                            document.getElementById("stockCode").value= ui.item.value;
                            
                        }  
                    
                  });
                
                function showTable() {
                    var x = document.getElementById("spIndex");
                    if (x.style.display == "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                    }   
                }
                
                function onInput() {
                    var x = document.getElementById("spIndex");
                        x.style.display = "block";
                        x.style.display = "none";   
                }
 
 
 
  
            </script>

	</body>
</html>