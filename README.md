# Login Page

This login page allows registered users to login using a username and password.  There is also an option for the user to register.
There are 3 usernames and passwords already stored in the database which are:

username - password

Dannielle - amber2015

Colin - 123456

## Files

All files are in the root directory except images which are in a seperate folder.

* <b>dbconx.php</b> -
Contains connection to database.
* <b>login.php</b> -
Calls login_user.php. Contains Login Form with Username and Password Fields.
* <b>login_user.php</b> -
Validates username and password against database then logs them in.
* <b>register.php</b> -
Calls register_user.php.  Contains Register form with username and password fields.
* <b>register_user.php</b> -
Registers a new user and requires a unique username that is not already stored in the database.
Creates a password hash and stores hash in database for security.
* <b>validate.js</b> -
Client side validation on username and password fields in the login/register form.
* <b>session.php</b> -
Creates a session and stores username in the session.
* <b>logout.php</b> -
Destroys session.

## What it looks like on my end

![alt text](https://github.com/danniellebuchanan/login-page/raw/master/images/login.png "Logo Title Text 1")

![alt text](https://github.com/danniellebuchanan/login-page/raw/master/images/login2.png "Logo Title Text 1")

![alt text](https://github.com/danniellebuchanan/login-page/raw/master/images/register.png "Logo Title Text 1")

### What i used

I used an SQL database and Apache Server while completing this project.  (downloaded UniServer)
