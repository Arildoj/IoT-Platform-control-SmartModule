#include "SPI.h"
#include "sha1.h"
#include "mysql.h"
#include <WiFi.h>

char ssid[] = "RepOscarCarvara";     //  your network SSID (name)
char pass[] = "34716549";  // your network password
int status = WL_IDLE_STATUS;     // the Wifi radio's status

float valorLido;
long head_count = 0;

  
// CONFIG DE REDE 
IPAddress ip(192,168,0,20);
IPAddress gateway(192,168,0, 1);
IPAddress subnet(255, 255, 255, 0);
IPAddress dns(8,8,8,8);

// CONFIG SQL
Connector my_conn; // The Connector/Arduino reference
IPAddress server_addr(192,168,0,7); // MySQL server
unsigned int mysqlPort=3306;
char user[] = "dba";
char password[] = "dba123";
boolean sqlconnect= false; //variavel de controle
char USE_DB[] = "USE dcmsdb;";
char SELECT_QUERY[] = "SELECT stat FROM module where idmodule=1 LIMIT 1;";
char UPDATE_QUERY[] = "UPDATE module SET infomodule='Online', statusmodule='nav-block-green', stat=1 WHERE idmodule=1 and stat=0;";

// prototipos
long update_test();
void mysqlBegin();
void wifiBegin();
void printCurrentNet();
void monitoraNivel();

void setup() {
  Serial.begin(9600);
  wifiBegin();
  printCurrentNet();
  mysqlBegin();
}

void loop() {
  //Serial.println("VERIFICANDO UPDATES...");
  Serial.println(update_test());
  delay(1000); 
  //Serial.println("LENDO VALOR...");
  //monitoraNivel();
}

void mysqlBegin()
{
  Serial.println("CONECTANDO MySQL Server..");
  
  if (my_conn.mysql_connect(server_addr, mysqlPort, user, password))
  {
     sqlconnect=true;
     Serial.println("CONECTADO COM SUCESSO!");
     delay(150);
   //executa SQL
    Serial.println("SELECIONA BD!");
    my_conn.cmd_query(USE_DB);    
  }
  else
  {
     Serial.println("CONEXAO FALHOU!");
     //conexao persistente
     mysqlBegin();
  }
}
  
//CONFIGURACAO DE MANIPULAÇAO DE DADOS SQL
long update_test()
{
  if (sqlconnect==true)
  {
    my_conn.cmd_query(SELECT_QUERY);  // We ignore the columns but we have to read them to get that data out of the queue.
    my_conn.get_columns();    // Now we read the rows.
    row_values *row = NULL;
    do 
    {
      row = my_conn.get_next_row(); // We use the first value returned in the row - population of NYC!
      if (row != NULL) 
      {
        head_count = atol(row->values[0]);
      }
    } 
    while (row != NULL); // We're done with the buffers so Ok to clear them (and save precious memory).
    my_conn.free_columns_buffer();
    my_conn.free_row_buffer(); // Now, let's do something with the data.
    return head_count;
  }
  else
  {
    sqlconnect=false; //o banco nao esta conectado
    mysqlBegin();
    Serial.println("ERROR!");
  }
}

void printCurrentNet() {
  // print the SSID of the network you're attached to:
  Serial.print("SSID: ");
  Serial.println(WiFi.SSID());

  // print the MAC address of the router you're attached to:
  byte bssid[6];
  WiFi.BSSID(bssid);
  Serial.print("BSSID: ");
  Serial.print(bssid[5], HEX);
  Serial.print(":");
  Serial.print(bssid[4], HEX);
  Serial.print(":");
  Serial.print(bssid[3], HEX);
  Serial.print(":");
  Serial.print(bssid[2], HEX);
  Serial.print(":");
  Serial.print(bssid[1], HEX);
  Serial.print(":");
  Serial.println(bssid[0], HEX);

  // print the received signal strength:
  long rssi = WiFi.RSSI();
  Serial.print("signal strength (RSSI):");
  Serial.println(rssi);

  // print the encryption type:
  byte encryption = WiFi.encryptionType();
  Serial.print("Encryption Type:");
  Serial.println(encryption, HEX);
  Serial.println();
}

void wifiBegin()
{
  if (WiFi.status() == WL_NO_SHIELD) {
    Serial.println("WiFi shield NAO ENCONTRADO");
    // don't continue:
    while (true);
  }

  // attempt to connect to Wifi network:
  while ( status != WL_CONNECTED) {
    Serial.print("TENTANDO CONECTAR WPA SSID: ");
    Serial.println(ssid);
    // Connect to WPA/WPA2 network:
    status = WiFi.begin(ssid, pass);

    // wait 10 seconds for connection:
    delay(5000);
  }
  // you're connected now, so print out the data:
  Serial.println("CONECTADO COM SUCESSO");
 // IPAddress ip = WiFi.localIP();
   WiFi.config(ip, dns, gateway, subnet); 

  Serial.print("IP Address: ");
  Serial.println(ip);
  byte mac[6];
  WiFi.macAddress(mac);
  Serial.print("MAC address: ");
  Serial.print(mac[5], HEX);
  Serial.print(":");
  Serial.print(mac[4], HEX);
  Serial.print(":");
  Serial.print(mac[3], HEX);
  Serial.print(":");
  Serial.print(mac[2], HEX);
  Serial.print(":");
  Serial.print(mac[1], HEX);
  Serial.print(":");
  Serial.println(mac[0], HEX); 
}


void monitoraNivel()
{
  valorLido = analogRead(0);
  valorLido = valorLido * 0.00488;
  
  Serial.println(valorLido);

}

