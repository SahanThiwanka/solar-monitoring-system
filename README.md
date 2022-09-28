# solar-monitoring-system
 creating solar monitoring system using tcp/ip model and raspberry pi  for university iot project
 
* Web Interface

Login interface create html, css and back end using php.

I created a dashboard with bootstrap 5 for responsive web design and used chart line to give users a better experience. This webpage is under real-time monitoring . That means refreshing every 20 seconds . It also has a weather monitor. I  used to using the weather API to categorize that one.

Secondly, it has previous data watching tables and it can be searched whenever I want data.

Thirdly I created a chart page. A Google chart helped me to create that one .

Fourthly, it has temperature monitoring; it shows the inverter temperature.

Also I used php  and JavaScript.
PHP my admin is the one I use as a database.


* reading inverter value and send to php code

This is the main python code .It is used to read inverter values and send them to php code.

As example (host='ekalafeeds.ddns.net' ,port=8190)



Technically I used data sent to php code, using url

('http://localhost/solar%20con/solar.php')



I used tcp/ip technology for read to inverter (data.read_holding_registers )

I used python - pyModbusTCP library to import tcp/ip.



Also I was inserted exception handling.
