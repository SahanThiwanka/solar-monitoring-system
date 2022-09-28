print ('Importing libraries... ',)

import time
from pyModbusTCP.client import ModbusClient
import requests


# Initialise the TCP connection
print ('Initialising tcp ',)
client = ModbusClient(host='ekalafeeds.ddns.net', port=8190)
print("TCP connection : Done ")
url= 'http://localhost/solar%20con/solar.php'
print ('Starting datalogger...')
while True:
    time.sleep(5)
    try:
            if client.open():
                result = client.read_holding_registers(40070,12) # Request the range of registers that hold the solar/battery realtime data (3100 - 3105)
                device_id = float(result[0] ) # Solar voltage is register 3100, divide by 100
                curren = float(result[2] /10) # Solar current is register 3101, divide by 100
                voltage = float(result[8] /10) # Battery voltage is register 3104, divide by 100
                Power = float(result[11] *10) # Charging current is register 3105, divide by 100
                
                result = client.read_holding_registers(40103,1) 
                temperature = float(result[0] /10) # Solar voltage is register 3100, divide by 100
                
                result = client.read_holding_registers(40189,2) 
                yield_1 = float(result[0] /10) # Solar voltage is register 3100, divide by 100
                yield_2 = float(result[0] /10) # Solar voltage is register 3100, divide by 100
                Total_yield = yield_1 + yield_2
                
                result = client.read_holding_registers(41305,21)
                pv_Length = float(result[0])
                pv_NOM= float(result[7])
                pv_id_1 = float(result[9])
                pv_DC_current_1 = float(result[18] /10)
                pv_DC_voltage_1 = float(result[19] /10)
                pv_DC_power_1 = float(result[20])
                        
                print ('device_id: ' + str(device_id) + ' | ' + 'curren: ' + str(curren) + ' | ' + 'voltage: ' + str(voltage) + ' | ' + 'Power: ' + str(Power)+' | ' + 'temperature: ' + str(temperature)+' | ' + 'Total_yield: ' + str(Total_yield )+ ' | '+
                      "\n" + 'pv_Length: ' + str(pv_Length) + ' | ' + 'pv_NOM: ' + str(pv_NOM) + ' | ' + 'pv_id_1: ' + str(pv_id_1) + ' | ' + 'pv_DC_current_1: ' + str(pv_DC_current_1) + ' | ' + 'pv_DC_voltage_1: ' + str(pv_DC_voltage_1) + ' | ' + 'pv_DC_power_1: ' + str(pv_DC_power_1)    )
                get_time=time.asctime( time.localtime(time.time()) )
                print (get_time) #system date
                
                payload={'device_id':device_id,'curren':curren,'voltage':voltage,'Power':Power,'temperature':temperature,'Total_yield':Total_yield,
                        'pv_Length':pv_Length,'pv_NOM':pv_NOM,'pv_id_1':pv_id_1,'pv_DC_current_1':pv_DC_current_1,'pv_DC_voltage_1':pv_DC_voltage_1,'pv_DC_power_1':pv_DC_power_1,}
                print("send values detabase")
                r=requests.post(url,data=payload)
                print(r.text)
                
    except ValueError:
                
            print("Error with host or port params")

