# Blood_Bank_Management_System

# Problem Statement

**Design a simple ‘Blood Bank System’ web application**
**Requirements**
**1**. Assume you are designing a real-life system, that real users will use.
**2.** The application should contain 2 types of users: Hospitals and Receivers
**3.** Pages to be developed

**a.** ‘Registration’ pages - Different registration pages for hospitals & receivers. Capture the receiver’s
blood group during registration.

**b.** ‘Login’ pages - Single/different login pages for hospitals & receivers.

**c.** Hospital ‘Add blood info’ page - A hospital, once logged in, should be able to add details of available
blood samples (along with type) to their bank. Access to this page should be restricted only to the
respective hospitals only.

**d.** ‘Available blood samples’ page - There should be a page displaying all the available blood samples,
which hospital has them, and a ‘Request Sample’ button. This page should be accessible to
everyone, irrespective of whether the user is logged in or not.

Expected functionality on click of the 'Request Sample' button

  **i.** Only receivers should be able to request blood samples by clicking the ‘Request Sample’
      button. Make sure that only those receivers who are eligible for the blood sample are allowed to
      click the button.

  **ii.** If the user is not logged in, then he/she should be redirected to the login page.

   **iii.**. If a user is logged in as a hospital, then the user should not be allowed to request a blood
      sample.

**e.** Hospital ‘View requests’ page - Hospitals should be able to see the list of all the receivers who have
requested for particular blood group from its blood bank.

**Technologies**
1. Please write the front-end code in HTML/CSS/JS. You may use Bootstrap if you wish.
2. Please write the backend code in either core PHP or PHP Codeigniter framework.
3. Use MySQL as the database.



-----------------------------------------------------------------------------------------------------------------------------------------------------------
# Solution

Welcome to the Blood Management System web application! This application is designed to facilitate the interaction between hospitals and receivers in managing blood samples. It includes user registration, login functionality, and specific pages for hospitals to add blood information and view requests, as well as a public page displaying available blood samples.

**Technologies Used**

**Front-end**: HTML, CSS, JavaScript

**Framework**: Bootstrap

**Back-end**: PHP

**Database**: MySQL

**Database Setup**
Create a MySQL database named **blood management**

**Usage**

**User Registration**

Hospitals and receivers need to register using separate registration pages.

Receivers must provide their blood group during registration.

**User Login**

Users can log in through a single/different login page, depending on their role.

**Hospital - Add Blood Info**

Once logged in, hospitals can add details of available blood samples, specifying the blood type. Access to this page is restricted to respective hospitals.

**Available Blood Samples**

A public page displays all available blood samples, along with information about the hospital that has them
.
A 'Request Sample' button allows eligible receivers to request blood samples.

**Request Sample Button Functionality**

Only receivers can request blood samples.

If not logged in, users are redirected to the login page.

Hospitals are restricted from requesting blood samples.

**Hospital - View Requests**

Hospitals can view the list of receivers who have requested a particular blood group from their blood bank.
