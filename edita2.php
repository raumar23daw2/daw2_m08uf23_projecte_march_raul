<?php
require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;
use Laminas\Ldap\Attribute;

ini_set('display_errors', 0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uid = $_POST['uid'];
    $unorg = $_POST['unidad_organizativa'];
    $attrToModify = $_POST['attribute'];
    $newValue = $_POST['new_value'];
    
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
    
    $newValueArray = [$attrToModify => $newValue];
    
    if ($ldap->update($dn, $newValueArray)) {
        echo "Atribut '$attrToModify' de l'usuari '$uid' modificat amb èxit";
        echo '<form action="https://zends-ramave/m08uf23_projecte/menu.php">
                  <input type="submit" value="Tornar al menu">
              </form>';
    } else {
        echo "Error: No s'ha pogut modificar l'atribut '$attrToModify' de l'usuari '$uid'";
        echo '<form action="https://zends-ramave/m08uf23_projecte/edita.php">
                  <input type="submit" value="Tornar">
              </form>';
    }
}
?>
