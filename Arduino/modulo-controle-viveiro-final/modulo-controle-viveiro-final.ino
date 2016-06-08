#define COOLER 4
#define LUZ 7
#define ONLINE 10
#define LED13 13
#define LED12 12
#define LED11 11

#include "SPI.h"
#include "sha1.h"
#include "mysql.h"
//#include <WiFi.h>
#include "Ethernet.h"
#include <Wire.h> 
#include <LiquidCrystal_I2C.h>

// CONFIG DE REDE 
IPAddress ip(192,168,1,102);
IPAddress gateway(192,168,1, 1);
IPAddress subnet(255, 255, 255, 0);
IPAddress dns_addr(8,8,8,8);

// CONFIG SQL
Connector my_conn; // The Connector/Arduino reference
char sqlbuf[128];
byte mac_addr[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };
IPAddress server_addr(192,168,1,100); // MySQL server
unsigned int mysqlPort=3306;
char user[] = "dba";
char password[] = "dba123";
boolean sqlconnect= false; //variavel de controle
unsigned long head_count = 0;

//PROTIPOS
void mysqlBegin();
void etherBegin();
int update_test();


LiquidCrystal_I2C lcd(0x27,16,2);  // set the LCD address to 0x27 for a 16 chars and 2 line display


void setup() 
{
  Serial.begin(9600);
  lcd.init(); 
  lcd.backlight();
  lcd.print("LCD OK");
    
  
  pinMode(COOLER,OUTPUT); //LED ON
  pinMode(LUZ,OUTPUT); //lUZES
  pinMode(ONLINE,OUTPUT); //COOLER
  digitalWrite(ONLINE,LOW);
  pinMode(LED13,OUTPUT);
    pinMode(LED12,OUTPUT);
      pinMode(LED11,OUTPUT);
      
  
  //inicia comnicacao
  etherBegin();
  mysqlBegin();
  
}

void loop() 
{
  digitalWrite(LED13,HIGH);
  delay(100);
  digitalWrite(LED13,LOW);
  delay(100);
  digitalWrite(LED12,HIGH);
  delay(100);
  digitalWrite(LED12,LOW);
  delay(100);
  digitalWrite(LED11,HIGH);
  delay(100);
  digitalWrite(LED11,LOW);
  delay(100);
  
  
  char UPDATE_QUERY[] = "UPDATE module SET infomodule='Online', statusmodule='nav-block-green', stat=1 WHERE idmodule=2 and stat=0;";
  sprintf(sqlbuf, UPDATE_QUERY);
  
  if(update_test()==2)
  {
    Serial.println("MODULO DESATIVADO - AGUARDA 60s");
    digitalWrite(ONLINE,LOW);
    delay(60000);
  }
  else
  {
    digitalWrite(ONLINE,HIGH);
    Serial.println("BATER PONTO");
   // my_conn.cmd_query(sqlbuf);
    //======================================= LOGICA AQUI ====================================





// ========================================================================================
    delay(1000); 
  }

}

void etherBegin()
{
  Serial.println("ATIVANDO ETHER");
  Ethernet.begin(mac_addr, ip, dns_addr, gateway, subnet); 
  delay(1000); 
}

void mysqlBegin()
{
  Serial.println("CONECTANDO MySQL Server..");
  char USE_DB[] = "USE dcmsdb;";
  sprintf(sqlbuf, USE_DB);
  

  if (my_conn.mysql_connect(server_addr, mysqlPort, user, password))
  {
     sqlconnect=true;
     Serial.println("CONECTADO COM SUCESSO!");
     delay(150);
   //executa SQL
    Serial.println("SELECIONA BD!");
    my_conn.cmd_query(sqlbuf);  
    delay(150);  
    Serial.println("BD SELECIONADO!");
  }
  else
  {
     Serial.println("CONEXAO FALHOU!");
     //conexao persistente
     mysqlBegin();
  }
}

//CONFIGURACAO DE MANIPULAÇAO DE DADOS SQL
int update_test()
{
  char SELECT_QUERY[] = "SELECT stat FROM module where idmodule=2 LIMIT 1;";
  sprintf(sqlbuf, SELECT_QUERY);
  
  if (sqlconnect==true)
  {
    my_conn.cmd_query(sqlbuf);  // We ignore the columns but we have to read them to get that data out of the queue.
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



