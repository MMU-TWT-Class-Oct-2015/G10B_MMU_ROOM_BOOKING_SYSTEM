#1) System Requirement
##* Outline the aim and objective of system
- allow student to access the MMU Room Booking System
- allow staff to access the MMU Room Booking System
- allow admin to access the MMU Room Booking System
- allow student to perform booking
- allow staff to perform all booking
- allow admin to view all rooms, add, edit and delete rooms
- system will continue with process the room booking, and update into the database
- friendly user

##* Clarify potential user and specific requirement
- *potential user* : Students ,staffs and admin
- *specific requirement* : A computer/laptop with intranet access to the server

##* Evaluate the required hardware, software platform
- __Hardware__

  Server           - a normal standard computer running on Xampp

  Client (Student/staff/admin) - a device (computer/smart devices) with access to the server intranet

- __Software__

  Server-Xampp (Apache & MYSQL)

  Client-browser

  ##* Consider delivery platform – running on network or stand alone
  - server running on intranet
  - client access server html/php files through intranet (xampp: apache/MySQL)


  #2) Implementation

  ## i) config.php
  - a template for database connection
  - used for most of the php


  ## ii) register.php
  - obtain information from user to key in
  - information will send to database after click register button

  ## iii) logintest.php
  - obtained id and password from user who submitted
  - establish connection to the database
  - check whether ID exist (not exist, echo invalid input)
  - hash the password obtained the user (md5)
  - compare the hash password
  - if both hash password value are the same, redirect student.php / staff.php
  - else echo invalid input

  ## iv) adminlogin.php
  - obtained id and password from admin who submitted
  - establish connection to the database
  - check whether ID exist (not exist, prompt invalid input!try again)
  - hash the password obtained the user (md5)
  - compare the hash password
  - if both hash password value are the same, redirect admin.php
  - else prompt invalid input!try again

  ## v) stubooking.php
  - provide option for student to choose either lecture room or tutorial room to perform booking
  - obtain room information from the student
  - if booking is successful redirect to viewbookingrecords.php and prompt Booking Stored
  - else prompt OPS something wrong!

  ## vi) stabooking.php
  - provide option for student to choose all tupe of  room to perform booking
  - obtain room information from the staff
  - if booking is successful redirect to stafviewrecords.php and prompt Booking Stored
  - else prompt OPS something wrong!

  ## vii) aredit.php
  - admin can change information (roomid , roomtype ,roomcap)
  - if success will redirect to admroomdisplay.php to show the changes

  ## viii) ardelete.php
  - the data will delete by getting the id from admroomdisplay.php

  ## ix) aradd.php
  - admin can insert data (roomid , roomtype , roomcap) to add the room , redirect admroomdisplay.php

  ## x) auadd.php
  - admin can insert data (userid,uname',upass,utype,uphone,uemail) to add the user redirect admroomdisplay.php

  ## xi) audelete.php
  - the user data will delete by getting the id from admroomdisplay.php

  ## xii) auedit.php
  - admin can change information (userid,uname',upass,utype,uphone,uemail)
  - if success will redirect to admroomdisplay.php to show the changes

  ## xiii) abadd.php
  - admin can insert data to add (bid,date,stime,etime,organizer,NOP,userid,roomid) to add the booking , redirect admroomdisplay.php
  - userid must be present in database

## xiv) abedit.php
  - admin can change information (bid,date,stime,etime,organizer,NOP,userid,roomid)
  - if success will redirect to admroomdisplay.php to show the changes

## xv) logout.php
  - redirect user to homepage.html

#3) Evaluation
-simple system
-users can perform booking through the system
-admin can perform edit,add or delete on the data stored
-admin can view all the records for users,room and booking

#4) How to run the system
##how to create database
i) Install xampp v5.6.8  from (https://www.apachefriends.org/download.html)
ii) Enable apache and MYSQL after the installation.
iii) Open browser and type URL:localhost/ phpmyadmin
vi) create new database using query ("create database roombooking;")
vi) Import sql(roombooking(3).sql) from the repository into the database.

##move files into c:\xampp\htdocs\
- create folder TWT in htdocs
-paste all the codes from repository G10B_MMU_ROOM_BOOKING_SYSTEM

##access system
i) open browser
ii) change URL: localhost/TWT/homepage.html
iii) New user registration for STUDENT only
iv) After registered or existing user login.Go to Localhost/TWT/loginpage.php.
v)Key in id and password to perform booking.
vi)For admin login in, go to :localhost/TWT/adminloginpage.php
vii)For admin, there is view,add,edit and delete function.
viii)A logout function is set for each user including admin which redirect users back to _homepage.html_

#5)Screenshot
![homepage](https://raw.githubusercontent.com/chinhang95/G10B_MMU_ROOM_BOOKING_SYSTEM/master/screenshot/homepagess.png)

![user_login_page](https://raw.githubusercontent.com/chinhang95/G10B_MMU_ROOM_BOOKING_SYSTEM/master/screenshot/userloginpage.png)

![Student_booking_1](https://raw.githubusercontent.com/chinhang95/G10B_MMU_ROOM_BOOKING_SYSTEM/master/screenshot/studentbooking.png)

![student_booking_2](https://raw.githubusercontent.com/chinhang95/G10B_MMU_ROOM_BOOKING_SYSTEM/master/screenshot/studentbooking2.png)

![Student_available](https://raw.githubusercontent.com/chinhang95/G10B_MMU_ROOM_BOOKING_SYSTEM/master/screenshot/studentviewavailable.png)

![student_records](https://raw.githubusercontent.com/chinhang95/G10B_MMU_ROOM_BOOKING_SYSTEM/master/screenshot/stuviewbookingrecords.png)

![staff_main](https://raw.githubusercontent.com/chinhang95/G10B_MMU_ROOM_BOOKING_SYSTEM/master/screenshot/staffmainpage.png)

![staff_selection](https://raw.githubusercontent.com/chinhang95/G10B_MMU_ROOM_BOOKING_SYSTEM/master/screenshot/staffselection.png)

![staff_available](https://raw.githubusercontent.com/chinhang95/G10B_MMU_ROOM_BOOKING_SYSTEM/master/screenshot/staffviewavailable.png)

![staff_records](https://raw.githubusercontent.com/chinhang95/G10B_MMU_ROOM_BOOKING_SYSTEM/master/screenshot/staffbookingrecords.png)

![admin_login_page](https://raw.githubusercontent.com/chinhang95/G10B_MMU_ROOM_BOOKING_SYSTEM/master/screenshot/adminloginpage.png)

![admin_main](https://raw.githubusercontent.com/chinhang95/G10B_MMU_ROOM_BOOKING_SYSTEM/master/screenshot/adminmainpage.png)

![admin_booking_records](https://raw.githubusercontent.com/chinhang95/G10B_MMU_ROOM_BOOKING_SYSTEM/master/screenshot/adminbookingrecords.png)

![admin_room_display](https://raw.githubusercontent.com/chinhang95/G10B_MMU_ROOM_BOOKING_SYSTEM/master/screenshot/adminroomdisplay.png)

![admin_search](https://raw.githubusercontent.com/chinhang95/G10B_MMU_ROOM_BOOKING_SYSTEM/master/screenshot/adminsearch.png)

![admin_user_display](https://raw.githubusercontent.com/chinhang95/G10B_MMU_ROOM_BOOKING_SYSTEM/master/screenshot/adminuserdisplay.png)

![admin_user_edit](https://raw.githubusercontent.com/chinhang95/G10B_MMU_ROOM_BOOKING_SYSTEM/master/screenshot/adminedituser.png)

