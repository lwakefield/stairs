import serial
from peewee import *
import dircache
from datetime import datetime
from time import sleep

dev_list = dircache.listdir('/dev/')
dev = '/dev/' + [dev for dev in dev_list if dev.startswith('cu.usbmodem1421')][0]
print 'using device: ' + dev

s = serial.Serial(port=dev, baudrate=9600)
db = SqliteDatabase('storage/database.sqlite')

class Readings(Model):
    value = CharField()
    created_at = DateField()
    updated_at  = DateField()

    class Meta:
        database = db

while True:
    val = s.readline()
    now = datetime.now()
    # print now, ':', val
    reading = Readings(value=val, updated_at=now, created_at=now)
    reading.save()
    sleep(0.1)
