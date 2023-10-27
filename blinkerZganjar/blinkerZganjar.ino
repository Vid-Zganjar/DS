/*
  Blink

  Turns an LED on for one second, then off for one second, repeatedly.

  Most Arduinos have an on-board LED you can control. On the UNO, MEGA and ZERO
  it is attached to digital pin 13, on MKR1000 on pin 6. LED_BUILTIN is set to
  the correct LED pin independent of which board is used.
  If you want to know what pin the on-board LED is connected to on your Arduino
  model, check the Technical Specs of your board at:
  https://www.arduino.cc/en/Main/Products

  modified 8 May 2014
  by Scott Fitzgerald
  modified 2 Sep 2016
  by Arturo Guadalupi
  modified 8 Sep 2016
  by Colby Newman

  This example code is in the public domain.

  https://www.arduino.cc/en/Tutorial/BuiltInExamples/Blink
*/

#define stop 11
#define clock 10
#define data 12

// the setup function runs once when you press reset or power the board
void setup() {
  // initialize digital pin LED_BUILTIN as an output.
  pinMode(clock, OUTPUT);
  pinMode(data, OUTPUT);
  pinMode(stop, OUTPUT);
}

void posljiPodatek(char podatek){
digitalWrite(clock, LOW); //inicializacija vofila-korak2
digitalWrite(stop, LOW);
digitalWrite(data, LOW);
// korak 3
for(int i=0; i<8; i++){
  if(podatek&B00000001){ //PONOVI 8x
    digitalWrite(data, HIGH); //Data high - bit 0. = 1
  }
  else{
    digitalWrite(data, LOW); // dazta low - 0. = 0
  }

  digitalWrite(clock, HIGH); //clock gor
  digitalWrite(clock, LOW);// clock dol
  podatek=podatek>>1; // (shift right) premknemo za eno mesto desno
}
// Korak 4
digitalWrite(stop, HIGH);// LAch up
digitalWrite(stop, LOW);// Lach low
}
// the loop function runs over and over again forever
void loop() {
posljiPodatek(B11110000);
delay(200);
posljiPodatek(B00001111);
delay(200);
posljiPodatek(B10000000);
delay(200);
posljiPodatek(B11000000);
delay(200);
posljiPodatek(B11100000);
delay(200);
posljiPodatek(B11110000);
delay(200);
posljiPodatek(B11111000);
delay(200);
posljiPodatek(B11111100);
delay(200);
posljiPodatek(B11111110);
delay(200);
posljiPodatek(B11111111);
delay(200);
  

     
}
