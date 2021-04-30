## How to Install and Run this project?

### Pre-Requisites:

1. Download and Install XAMPP

[Click Here to Download](https://www.apachefriends.org/index.html)

2. Install any Text Editor (Sublime Text or Visual Studio Code or Atom or Brackets)

### Installation

1. Download as as Zip or Clone this project
2. Extract and Move this project to Root Directory
```
Local Disc C: -> xampp -> htdocs -> 'this project'
```
*Local Disk C is the location where xampp was installed*

3. Open XAMPP Control Panel and Start 'Apache' and 'MySQL'

4. Extract and Import Database

- Open 'phpmyadmin' in your browser
- Create a Database ('quizapp')
- Import the SQL file provided with this project ('quizapp')

5. Make Changes to settings

Go to 'admin' folder then'config' folder and Open 'constants.php' file. Then make changes on following constants
```php
<?php 

//Create Constants to save Database Credentials
define('LOCALHOST', 'localhost');
define('USERNAME', 'root'); //Your Database username instead of 'root'
define('PASSWORD', ''); //Your Database Password instead of null/empty
define('DBNAME', 'quizapp'); //Your Database Name if it's not 'quizapp'

define('SITEURL', 'http://localhost/name_of_project_folder/'); //Update the home URL of the project if you have changed port number or it's live on server

?>
```

6. Now, Open the project in your browser. It should run perfectly.


## CMS - Admin Panel
This is a very simple Content Management System (No advanced stuffs). 

**Instructions to use**
1. Go to the link -> yourhomeurl/admin  
>e.g. *http://localhost:81/name-of-project-folder/admin*
2. Login with the Username and Password 
>*[Username: admin, Password: admin]*
3. Hola! You're logged in. Now you can manage categories, posts and users.
