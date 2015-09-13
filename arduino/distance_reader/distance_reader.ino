int trigPin = 13;
int echoPin = 12;
int led = 11;
int led2 = 10;
int THRESHOLD = 10;

void setup() {
  Serial.begin (9600);
  pinMode(trigPin, OUTPUT);
  pinMode(echoPin, INPUT);
  pinMode(led, OUTPUT);
  pinMode(led2, OUTPUT);
}

void loop() {
  long distance = getDistance(trigPin, echoPin);
  Serial.println(distance);
  delay(10);
}

long getDistance(int trigPin, int echoPin){
  long duration;
  long distance;
  digitalWrite(trigPin, LOW);
  delayMicroseconds(2);
  digitalWrite(trigPin, HIGH);

  delayMicroseconds(10);
  digitalWrite(trigPin, LOW);
  duration = pulseIn(echoPin, HIGH);
  distance = duration/58.2; //in cm

  return distance;
}

