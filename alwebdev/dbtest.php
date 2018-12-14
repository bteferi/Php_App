<?php
/*    Using "mysqli" instead of "mysql" that is obsolete.
* Change the value of parameter 3 if you have set a password on the root userid
* Add port number 3307 in parameter number 5 to use MariaDB instead of MySQL
*
*     Utilisation de "mysqli" à la place de "mysql" qui est obsolète.
* Changer la valeur du 3e paramètre si vous avez mis un mot de passe à root
* Ajouter le port 3307 en paramètre 5 si vous voulez utiliser MariaDB
*/
$DBSERVER = '127.0.0.1';
$DBUSER = 'root';
$DBNAME = '';
$PASSWORD = '';
$DBPORT = 3308;
//$mysqli = new mysqli('127.0.0.1', 'root', '', '');
$mysqli = new mysqli($DBSERVER, $DBUSER, $PASSWORD, $DBNAME, $DBPORT);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo '<p>Connection OK '. $mysqli->host_info.'</p>';
echo '<p>Server '.$mysqli->server_info.'</p>';
$mysqli->close();
?>
