# 1CWK50 Frameworks

## Install / setup 

### setup DB
To set up the database, please got to PHP my admin and create a database called `gamereview`. Once this is done, import the gamereview.sql in the `application/SQL` directory.

### port config
The current base URL is configured to work on port 82, if for any reason you anicipate using this on a different port, please update the base url in the `application/config/config.php`

### Testing admin chat feature

When testing the admin chat feature, use a incognito tab and a normal tab due to the admin feature being based around an API call that takes the admin status from session variables. By using incognito, you are running 2 different sessions 

Tom Misson :)
