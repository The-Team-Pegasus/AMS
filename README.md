 

 # STUDENT ATTENDANCE MANAGEMENT SYSTEM



The objective of the student attendance management system is to reduce the time that is consumed when attendance is taken manually. Unlike the manual process, an online system easily helps management to analyse student’s attendance details as per requirement.

A detailed summary of student attendance history can be obtained in an instant.

## Block Diagram

![image](https://user-images.githubusercontent.com/63590870/115340275-fd949580-a1c3-11eb-9a29-da46fa626fc6.png)



## Subsystems/Modules:
Home page consists login.<br>
Depending upon the userID  the user will be directed either to faculty dashboard or student dashboard.<br>
       <br><strong> Faculty Dashboard:</strong><br>
Faculty dashboard consists of Attendance, Report and Change password.<br>
When Attendance page is selected, the faculty will be given option to select Date, Class, Subject to mark the attendance.<br>
Then a list of students names will be displayed with options Present Absent and On leave.<br>
Report page helps faculty to get attendance of Particular student (table consists of no.of classes, no. of classes attended, absent, no. of days on leave, percentage )  <br>and Particular class and subject ( displays table consists of all the students names in the class and their attendance percentage)
Change password page is used to change their passwords by entering  old password, new password, confirm new password.<br>
        <br><strong>Student Dashboard:</strong><br>
Student dashboard consists of  Select Subject and Change Password.<br>
when a student selects a subject he can view his attendance in a table which consists of no.of classes, no. of classes attended, absent, no. of days on leave, percentage.<br>
Change password page is used to change their passwords by entering  old password, new password, confirm new password.<br>
<br>
<br>

## Basic technologies we are going to use:
HTML <br>
CSS <br>
Bootstrap <br>
PHP<br>
A database<br>

## How we are going to use these technologies:
### Front-end:
web application<br>
responsive web<br>
   ### Pages in our Web application:<br>
Home page (contains Login Portal)<br>
Faculty Dashboard page <br>
Mark attendance page<br>
Displays the student list in a class<br>
Report page<br>
Displays a particular student data.<br>
Change password page<br>
Student Dashboard page<br>
Select Subject<br>
Displays Attendance in a table <br>
Change password page<br>


### Back-end
we are using PHP to connect and retrieve information from DB, to call the functions and also to perform the action requested on the webpage.<br>
we are using mySQL for storing student details and retrieving information and as mentioned before we are using PHP for establishing link between webpages and DBs<br>

