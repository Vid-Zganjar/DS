/*
  AnalogReadSerial

  Reads an analog input on pin 0, prints the result to the Serial Monitor.
  Graphical representation is available using Serial Plotter (Tools > Serial Plotter menu).
  Attach the center pin of a potentiometer to pin A0, and the outside pins to +5V and ground.

  This example code is in the public domain.

  https://www.arduino.cc/en/Tutorial/BuiltInExamples/AnalogReadSerial
*/
double getTem(int senz){
 int t;
  t=(((senz/1023.00)*5000)-500)/10;
  return t;
}
// the setup routine runs once when you press reset:
void setup() {
  // initialize serial communication at 9600 bits per second:
  Serial.begin(9600);
}

// the loop routine runs over and over again forever:
void loop() {
  // read the input on analog pin 0:
  int sensorValue = analogRead(A1);
  // print out the value you read:
  
  Serial.print(getTem(analogRead(A1)));
  Serial.println(" °C temp senzorja");
  Serial.print(getTem(analogRead(A1))-7);
  Serial.println(" °C temp s korekcijo");
  Serial.println("---------------------");
  delay(1000);  // delay in between reads for stability
}
