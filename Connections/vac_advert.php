<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_vac_advert = "localhost";
$database_vac_advert = "php_test1";
$username_vac_advert = "root";
$password_vac_advert = "";
$vac_advert = mysql_pconnect($hostname_vac_advert, $username_vac_advert, $password_vac_advert) or trigger_error(mysql_error(),E_USER_ERROR); 
?>