import sys
from getpass import getpass
from matplotlib.style import use
from mysql.connector import connect, Error
from datetime import datetime, timedelta
import matplotlib.pyplot as plt
from dateutil.relativedelta import relativedelta
from numpy import append
userName = sys.argv[1]
mydb = connect(
  host="localhost",
  user="root",
  password="",
  database="app1"
)

mycursor = mydb.cursor()

mycursor.execute("SELECT log_date FROM log_hst WHERE user_name = '" + userName + "'")# AND log_date >= curdate() - INTERVAL DAYOFWEEK(curdate())-358 DAY 

myresult = mycursor.fetchall()

#print (userName)
thisYear = datetime.now().year
startCountdown = datetime(year=thisYear, month=1, day=1, hour=1, minute=1, second=1)
activityPMonths = [[],[],[],[],[],[],[],[],[],[],[],[]]
for x in myresult:
  for i in range(0,12):
    if x[0]<startCountdown + relativedelta(months=+i+1):
      activityPMonths[i].append(x[0])
      break

    

months = ["ian", "feb", "mar", "apr", "mai", "iun", "iul", "aug", "sept", "oct", "noi", "dec"]
values = [0,0,0,0,0,0,0,0,0,0,0,0]
for i in range(0,11):
  values[i] = len(activityPMonths[i])


plt.figure(figsize=(9, 3))
plt.plot( months,values)
plt.savefig('plots/'+userName+'.png')
