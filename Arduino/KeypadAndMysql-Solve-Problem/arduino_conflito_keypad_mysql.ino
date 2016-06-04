#include <SPI.h>
#include <sha1.h>
#include <mysql.h>
#include <Ethernet.h>
#include <Keypad.h>
#include <LiquidCrystal_I2C.h>
#include <Wire.h>
#include <Servo.h> 

  IPAddress server_addr(192,168,1,100);   // The IP address of your database server
  Connector my_conn;                     // The Connector/Arduino reference
  char user[] = "dba";                  // USER of database
  char password[] = "dba123";            // pass of USER of database
  char sqlbuf[128];                     // VETOR QUE CARREGA AS CONSULTAS DO BANCO 
                                        // O COMPRIMENTO DEVE SER MAIOR QUE A MAIOR CONSULTA SQL
  boolean sqlConnect;                  //  variavel de controle Da DATABASE
   
   // CONSULTAS A SEREM UTILIZADAS
  const char SELECT_GAVETA[] = "SELECT `gavetareq` FROM `sharemais`.`requisicao` WHERE `statusreq` = '1' AND `matriculareq`= '%s' AND `senhareq` = '%s'";
  const char INSERT_STRING[] = "INSERT INTO `dbtest`.`new_table` VALUES ('NULL', '%s' ,'30','5.9987999','6.321')";
  const char SELECT_INT[] = "SELECT `inttest` FROM `dbtest`.`new_table` WHERE `stringtest`= '%s' "; 

  byte mac_addr[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };
    IPAddress ip(192,168,1,2);
  IPAddress gateway(192,168,1, 100);
  IPAddress subnet(255, 255, 255, 0);
  IPAddress dns_addr(8,8,8,8);
  
  #define MATRICULA 1
  #define SENHA 2
  String capturaTeclado(int operacao);                    //FUNCTION - captura informacoes do usuario
  String matSql="",senhaSql="",senha="",gaveta01="";
  const byte ROWS = 4;                                     //four rows
  const byte COLS = 3;                                     //three columns
  char hexaKeys[ROWS][COLS] = 
  {
    {'#','0','*'},{'9','8','7'},                                      //define the cymbols on the buttons of the keypads
    {'6','5','4'},{'3','2','1'}
  };
  byte rowPins[ROWS] = {8, 7, 6, 5};                   //connect to the row pinouts of the keypad
  byte colPins[COLS] = {11, 10, 9};                     //connect to the column pinouts of the keypad
                                                     //initialize an instance of class NewKeypad
  Keypad customKeypad = Keypad( makeKeymap(hexaKeys), rowPins, colPins, ROWS, COLS ); 
  
    void lcdprint(int posicao, String char16);            // FUNCTION - escreve no lcd
  LiquidCrystal_I2C lcd(0x27,16,2);                    // set the LCD address to 0x27 for a 16 chars and 2 line display
  unsigned long tempoAtual,tempoAnterior=0;
  
    #define SERVO1 2                                         // SERVO1 ATRACADO A D2
  Servo myservo1;                                         // create servo1 object to control a servo 
  int pos = 0; 

  #define PUSH 3
  
  void lcdprint(int posicao, String char16);
  
  int contador=0;
  boolean cooldown = false;

void setup() {
    // incia monitor
  Serial.begin(9600);
  Serial.println("INICIALIZANDO...");
  Serial.println("CONFIGURANDO A REDE");
  
  // initialize the lcd 
    lcd.init();  
    lcd.backlight();
    lcdprint(0," INICIALIZANDO");
    lcdprint(1,"   O SISTEMA"); 

      Ethernet.begin(mac_addr, ip, dns_addr, gateway, subnet); 
      delay(15000);
      
      Serial.println("CONNECT DATABASE");
    if (my_conn.mysql_connect(server_addr, 3306, user, password))
    {
          sqlConnect = true;
          Serial.println("Conected Success!");
    }
    else
    {
          Serial.println("Connection failed.");
          sqlConnect = false;
    }
    
        lcd.clear();
    lcdprint(0," SISTEMA SHARE+");
    lcdprint(1,"PRESSIONE TECLA!");
    Serial.println("ENTROU NO LOOP");

}

void loop() 
{
    // INSERT
    contador++;
     
        Serial.println("DENTRO DO LOOP E FORA DO CUSTOM");
        const char INSERT_DATA2[] = "INSERT INTO `sharemais`.`requisicao` VALUES ('NULL', '1' ,'matricula', 'senha' ,'%i','tag')";
        sprintf(sqlbuf, INSERT_DATA2,contador);
        if(my_conn.cmd_query(sqlbuf))
              Serial.println(" INT inserido com sucesso");
              delay(2000);
              
        if(contador == 30)
        {
          Serial.println("");
          Serial.println("LIMPAR TABELA");
          const char TRUNCATE_QUERY[] = "TRUNCATE `sharemais`.`requisicao`";
          if(my_conn.cmd_query(TRUNCATE_QUERY))
                Serial.println("TABELA LIMPA");
          contador = 0;
        }
         
    //char customKey = customKeypad.getKey();       
   //if(customKey)
    {
        Serial.println("");        
        Serial.println("DEPOIS DO CUSTOM");
        const char INSERT_DATA2[] = "INSERT INTO `sharemais`.`requisicao` VALUES ('NULL', '1' ,'matricula', 'senha' ,'%i','tag')";
        sprintf(sqlbuf, INSERT_DATA2,contador);
        if(my_conn.cmd_query(sqlbuf))
              Serial.println(" INT inserido com sucesso");
              delay(2000);
              
        if(contador == 30)
        {
          Serial.println("");
          Serial.println("LIMPAR TABELA");
          const char TRUNCATE_QUERY[] = "TRUNCATE `sharemais`.`requisicao`";
          if(my_conn.cmd_query(TRUNCATE_QUERY))
                Serial.println("TABELA LIMPA");
          contador = 0;
        }
    
    
        cooldown = false;
        lcd.backlight();
        
        Serial.println("CAPTURA MATRICULA");
        //matSql = capturaTeclado(MATRICULA); 
        Serial.println("CAPTURA SENHA"); 
        //senhaSql= capturaTeclado(SENHA);
        
        //------------------------- LOGICA DE ABERTURA ----------------------
        //int gaveta = consultaGaveta(matSql, senhaSql);
        Serial.print("GAVETA ENCONTRADA: ");
        //Serial.println(gaveta);
        
        // ------------------------------------------------------------------ 
        //if(gaveta !=0)
        {  
              myservo1.attach(SERVO1); 
              delay(100);
              lcd.clear();
              lcdprint(0,"ABRINDO GAVETA...");
              Serial.println("ABRE A GAVETA");
              //abreGaveta();
              delay(3000);
              
              lcd.clear();
              lcdprint(1,"GAVETA ABERTA...");
                
                while(digitalRead(PUSH)!=0)
                  delay(50);
      
              lcd.clear();
              lcdprint(0,"FECHANDO GAVETA");
              delay(2000);
              //fechaGaveta();
              
              lcd.clear();
              lcdprint(0," SISTEMA SHARE+");
              lcdprint(1,"PRESSIONE TECLA!");
              myservo1.detach();                                // desativa servo
      
        }
    }
    
    //retorno();

}

void lcdprint(int posicao, String char16)
{
  lcd.setCursor(0,posicao);
  lcd.print(char16);
}
