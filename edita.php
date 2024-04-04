<html>
	<head>
		<title>
			Edita usuari
		</title>
	</head>
	<body>
		<h2> Formulari editar</h2>
        <form action="edita2.php" method="post">
            <label for="uid">UID:</label>
            <input type="text" name="uid" id="uid"><br>
        
            <label for="unidad_organizativa">Unitat organitzativa:</label>
            <input type="text" name="unidad_organizativa" id="unidad_organizativa"><br>
        
            <label for="attribute">Atribut a modificar:</label><br>
            <input type="radio" name="attribute" value="uidNumber"> UID Number<br>
            <input type="radio" name="attribute" value="gidNumber"> GID Number<br>
            <input type="radio" name="attribute" value="homeDirectory"> Home directory<br>
            <input type="radio" name="attribute" value="loginShell"> Shell<br>
            <input type="radio" name="attribute" value="cn"> CN<br>
            <input type="radio" name="attribute" value="sn"> SN<br>
            <input type="radio" name="attribute" value="givenName"> Given Name<br>
            <input type="radio" name="attribute" value="postalAddress"> Postal Address<br>
            <input type="radio" name="attribute" value="mobile"> Mobile<br>
            <input type="radio" name="attribute" value="telephoneNumber"> Telephone number<br>
            <input type="radio" name="attribute" value="title"> Title<br>
            <input type="radio" name="attribute" value="description"> Description<br>
        
            <label for="new_value">Nou valor:</label>
            <input type="text" name="new_value" id="new_value"><br>
        
            <input type="submit" value="Modificar atribut">
        </form>


		<a href="http://zend-ramave.fjeclot.net/m08uf23/index.php">Torna a la pàgina inicial</a>
	</body>
</html>
