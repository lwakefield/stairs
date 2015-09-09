import serial
import sqlite3
from datetime import date, datetime

dev_address = raw_input("Please enter the dev address:")
s = serial.Serial(port=dev_address, baudrate=9600)

conn = sqlite3.connect('storage/database.sqlite')
c = conn.cursor()

while True:
    val = s.readline()
    now = datetime.now()
    print now
    if val:
        c.execute("INSERT INTO readings (value, created_at, update_at) VALUES ('"+val+"',"+now+","+now+")")
