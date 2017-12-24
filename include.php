<?php 

$companyNames = file_get_contents("spCompanyName.txt");
$companySymbols = file_get_contents("spCompanySymbol.txt");

$companyNamesArray = explode("\\", $companyNames);
$companySymbolsArray = explode("\\", $companySymbols);

$_SESSION["companyNamesArray"] = $companyNamesArray;
$_SESSION["companySymbolsArray"] = $companySymbolsArray;

$_SESSION["apiKey"] = "UFGXKEBNFFHKOICE"; 

?>