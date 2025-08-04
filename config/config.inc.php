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
