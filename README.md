# solar-monitoring-system
 creating solar monitoring system using tcp/ip model and raspberry pi  for university iot project
 
* Web Interface
![Screenshot 2022-09-28 193952](https://user-images.githubusercontent.com/73154273/192801439-bc606b06-782d-47f9-84a6-1f0333d3ae91.png)

 Our website link- https://solarplant.000webhostapp.com/
 
 * Login interface
     
![Screenshot 2022-09-28 194247](https://user-images.githubusercontent.com/73154273/192802103-666772da-f2f8-4c65-bde2-d040dd89336e.png)
     Login interface create html, css and back end using php.
     
   I created a dashboard with bootstrap 5 for responsive web design and used chart line to give users a better experience. This webpage is under real-time monitoring      . That means refreshing every 20 seconds . It also has a weather monitor. I  used to using the weather API to categorize that one.

   Secondly, it has previous data watching tables and it can be searched whenever I want data.

   Thirdly I created a chart page. A Google chart helped me to create that one .

   Fourthly, it has temperature monitoring; it shows the inverter temperature.

   Also I used php  and JavaScript.
   PHP my admin is the one I use as a database.



* reading inverter value and send to php code

   The main python code .It is used to read inverter values and send them to php code.

   As example (host='ekalafeeds.ddns.net' ,port=0000)



   Technically I used data sent to php code, using url

   ('http://localhost/solar%20con/solar.php')



   I used tcp/ip technology for read to inverter (data.read_holding_registers )

   I used python - pyModbusTCP library to import tcp/ip.



   Also I was inserted exception handling.
     
* In this project I am using dht11 sensor to get ambient temperature.
     ![Screenshot 2022-09-28 194611](https://user-images.githubusercontent.com/73154273/192803089-2030aec1-516a-4ca5-af82-dd38bd86eb41.png)
     
     The project data insert code. I used php language. It contribution is what ever value push on python code those values insert to data base. 
     Get system date and time using SQL Query.
* This is our project sensor and board arrangement.
   ![Screenshot 2022-09-28 204544](https://user-images.githubusercontent.com/73154273/192820630-21bf7a25-98a5-4142-b9ff-3cb48c9035a6.png)
