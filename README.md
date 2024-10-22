
---

5th Semester PHP Unit 2 Practical Project

Project Title: User Authentication System

Institution:

Government Polytechnic Chopan, Sonbhadra

Semester:

5th Semester


---

Project Overview:

This project implements a basic User Authentication System using PHP and MySQL. It includes the following features:

User Sign-up

User Login

Password Change

Account Deletion

Session Management


The system is designed to showcase fundamental PHP operations including database connectivity, form handling, and session management. It is built following PHP Unit 2 concepts from the 5th Semester syllabus.


---

Folder Structure:

/gpc
  ├── signup.php             
  # User registration page
  ├── login.php               
  # User login page
  ├── change_password.php      
  # Password change page
  ├── delete_account.php      
  # Account deletion page
  ├── logout.php              
  # Logout handler
  ├── db.php                  
  # Database connection setup
  ├── README.md              
  # Documentation of the project


---

Project Files and Description:

1. db.php:

Purpose: This file is responsible for connecting the project to the MySQL database. It establishes a connection using the mysqli extension and ensures that the users table is created if it doesn't already exist.
Key Components:

Hostname: 'localhost'

Database: 'your_database'

User: 'root' (for local)

Password: '' (for local without a password)


Explanation:

The mysqli object is used to connect to the MySQL database.

The SQL statement in this file creates a users table with two fields: id, email, and password. The email field is unique to avoid duplicate registrations, and the password is hashed for security.



---

2. signup.php:

Purpose: This page allows new users to register by submitting their email and password. The passwords are securely hashed before storing them in the database.

Key Functionality:

HTML form for user input (email and password).

Password hashing using password_hash() for security.

Form data is sent via POST and inserted into the users table.


Flow:

1. User enters email and password.


2. Password is hashed.


3. The details are saved into the users table.


4. A confirmation message is shown on success.




---

3. login.php:

Purpose: This page allows existing users to log in. It checks the user's credentials against the database and verifies the password using password_verify(). Upon successful login, a session is created for the user.

Key Functionality:

Verifies the user's credentials.

Uses PHP sessions to track user login status.

Redirects the user to the change_password.php page upon successful login.


Flow:

1. User enters email and password.


2. The entered password is compared to the hashed password stored in the database using password_verify().


3. A session is created, and the user is redirected to the password change page on success.




---

4. change_password.php:

Purpose: This page allows logged-in users to change their passwords. The new password is hashed and updated in the database.

Key Functionality:

Checks if the user is logged in using the session.

Provides a form for the user to enter a new password.

Updates the users table with the new hashed password.


Flow:

1. The user must be logged in to access this page.


2. The user inputs a new password.


3. The new password is hashed and updated in the users table.




---

5. delete_account.php:

Purpose: This page allows users to delete their account. The account is permanently removed from the users table, and the session is destroyed afterward.

Key Functionality:

Checks if the user is logged in using the session.

Provides an option to delete the account.

Deletes the user's record from the users table and ends the session.


Flow:

1. The user must be logged in to access this page.


2. The account is deleted by removing the record from the database.


3. The user is logged out, and the session is destroyed.




---

6. logout.php:

Purpose: This file handles logging the user out. It destroys the current session and redirects the user to the login page.

Key Functionality:

Calls session_destroy() to end the user's session.

Redirects to the login.php page.



---

Database Schema:

The project requires a MySQL database with a single table:

users Table:

Create Table Query (already included in db.php):

CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);


---

Setup Instructions:

Step 1: Setup Environment

1. Install XAMPP or any PHP server and MySQL.


2. Start Apache and MySQL servers from XAMPP.



Step 2: Create Database

1. Open phpMyAdmin in your browser (usually accessible via http://localhost/phpmyadmin/).


2. Create a new database (e.g., gpc).


3. Update the database name in db.php accordingly.



Step 3: Configure Files

1. Place the project folder user_auth inside htdocs (if using XAMPP).


2. Ensure that the database credentials (username, password, database name) in db.php match your MySQL setup.



Step 4: Running the Project

1. Open your browser and navigate to http://localhost/gpc/signup.php.


2. Sign up as a new user.


3. Login with the credentials to access password change and account deletion functionalities.




---

Session Management:

Sessions are used to manage user authentication. Once a user logs in, their session is stored, and they can access protected pages like change_password.php and delete_account.php. If the session is not present, users will be redirected to the login page.


---

Security Considerations:

Password Hashing: User passwords are hashed using password_hash() to protect sensitive data. This ensures that even if the database is compromised, the passwords are secure.

Session Security: PHP sessions are used to maintain login status. Pages like change_password.php and delete_account.php are protected by session checks.



---

Conclusion:

This project demonstrates key PHP functionalities such as connecting to a MySQL database, creating and managing user sessions, handling user input securely, and performing CRUD operations. It provides a complete solution for user authentication, which is a critical aspect of web development.


---

Contact Information:

Submitted By:
Rizwan Ahmad
5th Semester, Government Polytechnic Chopan, Sonbhadra


---

