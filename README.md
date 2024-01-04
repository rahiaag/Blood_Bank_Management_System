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
