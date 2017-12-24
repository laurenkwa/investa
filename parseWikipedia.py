from lxml import html
import requests

page = requests.get('https://en.wikipedia.org/wiki/List_of_S%26P_500_companies')
tree = html.fromstring(page.content)

length = 500
count = 0



    

#This will create an array of S&P500 Company Names
companyName = tree.xpath('///*[@id="mw-content-text"]/div/table[1]/tr/td[2]/a[1]/text()')
#This will create an array of S&P500 Company ticker symbols
companySymbol = tree.xpath('//*[@id="mw-content-text"]/div/table[1]/tr/td[1]/a[1]/text()')

companyNamefile = open("spCompanyName.txt","w")
count = 0

for element in companyName:
        companyNamefile.write(element + "\\")
        count=count+1
companyNamefile.close()


companyTickerfile = open("spCompanySymbol.txt","w")
countTwo=0

for element in companySymbol:
            companyTickerfile.write(element + "\\")
            countTwo=countTwo+1           
companyTickerfile.close()

print "done"



