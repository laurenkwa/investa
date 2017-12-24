Investa ReadMe

[investa.azurewebsites.net](http://investa.azurewebsites.net)

Created by [Lauren Kwa](http://laurenkwa.com)



**Version 1.0 - released on December 23, 2017**

Investa is a website that provides its users with current and historical data for S&P500 stocks and specific currencies. The site was built using HTML, PHP, and Javascript. Investa uses Alpha Vantage's API in order to retrieve current and historical financial data.

_**Scope of Investa:**_
1. Forex Converter - provides real time currency exchange rate for the following currencies:
  * US dollar
* Canadian Dollar
* Korean Won
* Euro
* British Pound Sterling
* Japanese Yen
* Swiss franc
* Australian Dollar

    A converter calculator is also provided that allows a user to input a base currency amount and compute for the corresponding amount in a converted currency.

2. Standard & Poor's 500 Index - provides current and historical stock prices and trade volumes per company in the current S&P Index

_**Methodology:**_
  The website was built using HTML, PHP, and Javascript. 
  1. Source of Data:
    The financial data is taken from [Alpha Vantage's API](https://www.alphavantage.co/documentation/). 
    The API provides data in the form of JSON objects, which is then parsed into a PHP array for processing. 
    
    To access Alpha Vantage's API, a call to their URL must be made with the appropriate stock ticker code/forex code that you want to look up. 
    
  2. Retrieving Stock Names and Symbols
    There are 500 companies on the S&P500 index, which is the scope of the stock data provided by Investa.
    To create a list of those 500 company names and their symbols, a script was created 
    using Python to parse the names and corresponding symbols from the [Wikipedia Page](https://en.wikipedia.org/wiki/List_of_S%26P_500_companies) of the S&P500.
    The information parsed from the Wikipedia Page is outputted into a textfile, which is processed into an array by PHP and used in the Investa website.
    
  3. Forex Currency Conversion
    A call to Alpha Vantage API with corresponding currency pair codes is made to retrieve the current conversion rate.
    
_**Limitations:**_  
    The current version of Investa has the following limitiations, which will be addressed in succeeding versions:
    1. Alpha Vantage API
        The Investa website is reliant on the Alpha Vantage API for information. The primary function of the website is to display the data in a user-friendly format.
        To access and output the data from the API, the required format was hard coded into the website. 
        For example, the JSON data provided by the API is in a set structure. Investa receives the array and outputs the data in the order that the array is given. If Alpha Vantage changes its format structure, the Investa website will not work. 
        Possible Solution: modify website code to parse the data received from the API and arrange it according to our own structure.
        
    2. Python Script
        A Python script is used to parse data from Wikipedia to create a list of current S&P500 companies and their corresponding ticker symbols.
        The script is not run automatically, meaning the owner must run it manually to update the list on a periodical basis.
        Possible Solution: Automate script to update the list.
        
    3. Functionality and Relevance
    More functionality can be added in succeeding versions to process data and provide investors with useful analyses and forecasts. 
    Future additions:
    * Create graph of price movement per stock
    * Add more currencies for forex conversion

     
        
    
