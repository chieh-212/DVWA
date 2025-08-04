<?php

# If you are having problems connecting to the MySQL database and all of the variables below are correct
# try changing the 'db_server' variable from localhost to 127.0.0.1. Fixes a problem due to sockets.
#   Thanks to @digininja for the fix.

# Database management system to use
$DBMS = getenv('DBMS') ?: 'MySQL';
#$DBMS = 'PGSQL'; // Currently disabled

# Database variables
#   WARNING: The database specified under db_database WILL BE ENTIRELY DELETED during setup.
#   Please use a database dedicated to DVWA.
#
# If you are using MariaDB then you cannot use root, you must use create a dedicated DVWA user.
#   See README.md for more information on this.
$_DVWA = array();
$_DVWA[ 'db_server' ]   = getenv('DB_SERVER') ?: 'turntable.proxy.rlwy.net:29774';
$_DVWA[ 'db_database' ] = getenv('DB_DATABASE') ?: 'railway';
$_DVWA[ 'db_user' ]     = getenv('DB_USER') ?: 'root';
$_DVWA[ 'db_password' ] = getenv('DB_PASSWORD') ?: 'GPJlQwByTBrIicZOCBRzXOccKrURZpwM';
$_DVWA[ 'db_port']      = getenv('DB_PORT') ?: '29774';

# ReCAPTCHA settings
#   Used for the 'Insecure CAPTCHA' module
@@ -55,3 +55,5 @@ $_DVWA['SQLI_DB'] = getenv('SQLI_DB') ?: MYSQL;

?>
