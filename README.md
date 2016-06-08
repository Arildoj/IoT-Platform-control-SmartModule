# IoT-Platform-control-SmartModule
This is a PHP and Arduino IoT solution, developed to manage farm tasks and machines to offer more efficient production and easy administration.<br/>
![Sample-IoT-control](https://raw.githubusercontent.com/Arildoj/IoT-Plataform-control-SmartFarm/master/wiki/Sample-IoT_2.png)

## FAQ 

**What was the motivation?**<br/>
The motivation begins of the actual problems found in farms to control and manage your business. Other problem we can see the interferences of human in nature, for example, today (2014) 40% of population suffer with consequences of no water supply. 
We think that is a good way to increase the income and better performance in production.

**Why the modular form was the better way to do it?**<br/>
Because you can acquire separately modules for each necessity.

## Basic Composition

+ Database server
+ Modules

## Description

The system consists in a database platform where the modules can communicate independent (autonomous) generating information from your sensors direct to a database.
All modules communicate with server through an IP address and the platform recognize automatic your status and what is your finality.
The all generate data can be manipulated direct in a web browser, visualized in graph and changed remotely. Each module can be set remotely too, if necessary.

**Database Server**
Is a remote server where are storage all data, information and activities of the modules. The controller of modules can be configured in this page.

<br/>Management screens<br/><br/>
1 **This is a home page of modules control.**<br/>
![Sample-IoT-Home](https://raw.githubusercontent.com/Arildoj/IoT-Plataform-control-SmartFarm/master/wiki/home.PNG)
<br/><br/><br/>
2 **This is other page of modules control.**<br/>
![Sample-IoT-Modulo](https://raw.githubusercontent.com/Arildoj/IoT-Plataform-control-SmartFarm/master/wiki/tela-modulo.PNG)
<br/>
It is programmed in PHP and the data is storage in MySQL database.

**Modules:**
The modules are developed in Arduino platform with input sensors and output controllers.
![Sample-IoT-Modulo-Case](https://raw.githubusercontent.com/Arildoj/IoT-Plataform-control-SmartFarm/master/wiki/Sample-Module%3DCase.png)<br/>
The modules are built in this case.

Initially we have preset 3 modules:
+	Plants Nursery controller
+ Animal feeding controller
+	Water supply controller

## Growth plan for the TRex project 

##References
- Chuck Bell, Sr. Software Developer, MySQL Utilities, Oracle
- Luis Soares, Sr. Software Engineer, MySQL Replication, Oracle<br/>
  July 18, 2012

<br/><br/>
<hr>
## Credits
**Developers**
- [Arildo F. Rodrigues Junior](https://github.com/Arildoj)
- [Haroldo Dornelas](https://)
- [Yann F. Veiga Dias](https://)

