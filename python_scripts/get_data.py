import sys
from getpass import getpass
from mysql.connector import connect, Error
from datetime import datetime, timedelta
import matplotlib.pyplot as plt
name = []
values = []
mydb = connect(
  host="localhost",
  user="root",
  password="",
  database="app1"
)

mycursor = mydb.cursor()

mycursor.execute("SELECT name FROM users")

myresult = mycursor.fetchall()

for x in myresult:
   
    mycursor.execute("SELECT log_date FROM log_hst WHERE user_name = '" + x[0] + "' AND log_date >= curdate() - INTERVAL DAYOFWEEK(curdate())-2 DAY ")

    myresult2 = mycursor.fetchall()
    nowTime = datetime.now()
    th = nowTime + timedelta(days =100)
    c = 0
    for y in myresult2:
        c+=1
       
    
    if c!=0:
        values.append(c)
        name.append(x[0])
        
plt.figure(figsize=(9, 3))

plt.subplot(131)
plt.bar(name, values)
plt.savefig('plots/activity.png')