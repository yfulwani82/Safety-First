##

## Safety First

**ABSTRACT :**

Many accidents on road lead to death and the reason being: Not wearing a helmet.

Wearing a helmet can reduce the chances of death by 80 percent and chances of head injury by 95 percent.

Currently, no automotive industry equip their vehicles with technology that can report accidents.

Keeping all these problems in mind I tried to design a module that is affordable and It also has an accident alert system that monitors the data from accelerometer, gyroscope and impact sensors and detects if some accident has happened.

In case of accident it reports to the nearest police station and hospitals for the same.

**DESIGN :**

The project has an accident detection mechanism. Hardware used in this project are listed below:

1. Raspberry Pi

2. GSM, GPS, GSRM Shied (SIM808)

3. Accelerometer (MPU6050)

**Algorithm for Accident Detection :**

**Step 1** : Start the program.

**Step 2** : Read accelerometer data.

**Step 3** : If sensor value is more than limit go to step 4, otherwise go to step 2.

**Step 4** : Ask Driver for confirm accident. Set wait time 60 second.

**Step 5** : If Driver confirm accident go to step 6, otherwise go to step 7.

**Step 6** : Send notification to web server owner account, nearest police station, hospital also send SMS. Go to step2.

**Step 7** : Decrement wait time each second.

**Step 8** : if wait time = 0 second go to step 9, otherwise go to step 5.

**Step 9** : go to step 6.

**Step 10** : Stop.

**Communication with web server and sending notification**

The system communicates with the web server through GPRS communication via a GSM, GPRS Shield. It will send the vehicle location&#39;s latitude and longitude data to web server upon user request or after detection of accident. The web application will forward necessary notification to the nearest police station and hospital with the website, mobile application and mobile SMS.


**Calculation of shortest distance:**

To find out the nearest police station and hospital &#39;haversine&#39; approximation method is used. **Haversine formula:**

𝑎 = 𝑠𝑖𝑛² (𝛥𝜑 /2) + 𝑐𝑜𝑠𝜑1 × 𝑐𝑜𝑠𝜑2 × 𝑠𝑖𝑛²( 𝛥𝜆 /2)

𝑐 = 2 × 𝑎𝑡𝑎𝑛2 ( √𝑎,√(1−𝑎) )

𝑑 = 𝑅 × 𝑐

Where 𝜑 is latitude, 𝜆 is longitude, 𝑅 is earth&#39;s radius (mean radius = 6,371km);

note that angles need to be in radians to pass to trig functions.

**Project flow chart:** The complete design flow of the project can be depicted here: ![](Safety%20First/imgs/flow_chart.png)

**Configuration of Database:**

A web database is configured to store the data that are being sent from the embedded devices. DB2 application on ibm is used to configure the SQL database. There are 7 tables:

1. **user** : Store user information. 2. **policestation** : Store Police Station information, location. 3. **hospital** : Store Hospital information, location. 4. **vehicle** : Store each device installed in different vehicle. 5. **location** : Store vehicle location on demand of user. 6. **accident** : Store location information after accident detection. 7. **rescue** : Store which police station and hospital is involving in rescue.

 ![](Safety%20First/imgs/table.jpg)
 
 ![](Safety%20First/imgs/database.png)

**SQL Database in webserver**

**Web Application**

A web application has been developed to receive data from embedded device through GSM shield using GPRS connection.

 ![](Safety%20First/imgs/web1.png)
                                **Website**

 ![](Safety%20First/imgs/website.png)

**Website Screenshot**

 ![](Safety%20First/imgs/web_3.png)

Figure 4.7: User panel for multiple car installed the device. (website screenshot)

  ![](Safety%20First/imgs/web4.png)

**Hospital get notification about accident and direction towards the spot.**

  ![](Safety%20First/imgs/web5.png)

**Police station get notification about accident and direction towards the spot.**

** Security**

**User Authentication for Login**

To access the website, the user has to go through a login page. There is a table &quot;user&quot; stored in the database with username and password. This username also enables the data to load on the site. So, even if someone got access to the main webpage no data will be loaded until the correct username and password is given.

# THE END
