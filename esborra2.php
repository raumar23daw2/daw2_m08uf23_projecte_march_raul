<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;

ini_set('display_errors', 0);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $unorg = $_GET['ou'];
    $uid = $_GET['usr'];
    
    $domini = 'dc=fjeclot,dc=net';
    $opcions = [
        'host' => 'zend-ramave.fjeclot.net',
        'username' => "cn=admin,$domini",
        'password' => 'fjeclot',
        'bindRequiresDn' => true,
        'accountDomainName' => 'fjeclot.net',
        'baseDn' => 'dc=fjeclot,dc=net',
    ];
    $ldap = new Ldap($opcions);
    $ldap->bind();
    
    $dn = 'uid=' . $uid . ',ou=' . $unorg . ',dc=fjeclot,dc=net';
    
    if ($ldap->delete($dn)) {
        echo "Usuari eliminat amb èxit";
        echo '<form action="https://zends-ramave/m08uf23_projecte/menu.php">
                  <input type="submit" value="Tornar al menu">
              </form>';
    } else {
        echo "Error: No s'ha pogut eliminar l'usuari";
    }
}
?>
