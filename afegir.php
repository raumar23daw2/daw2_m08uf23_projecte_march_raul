<html>
	<head>
		<title>
			Afegir usuari
		</title>
	</head>
	<body>
		<h2> Formulari per afegir usuaris</h2>
		<form action="afegir2.php" method="post">
            <label for="uid">UID:</label>
            <input type="text" name="uid" id="uid"><br>
            
            <label for="unidad_organizativa">Unidad Organizativa:</label>
            <input type="text" name="unidad_organizativa" id="unidad_organizativa"><br>
            
            <label for="uidNumber">UID Number:</label>
            <input type="text" name="uidNumber" id="uidNumber"><br>
            
            <label for="gidNumber">GID Number:</label>
            <input type="text" name="gidNumber" id="gidNumber"><br>
            
            <label for="homeDirectory">Directorio Personal:</label>
            <input type="text" name="homeDirectory" id="homeDirectory"><br>
            
            <label for="loginShell">Shell:</label>
            <input type="text" name="loginShell" id="loginShell"><br>
            
            <label for="cn">CN:</label>
            <input type="text" name="cn" id="cn"><br>
            
            <label for="sn">SN:</label>
            <input type="text" name="sn" id="sn"><br>
            
            <label for="givenName">Given Name:</label>
            <input type="text" name="givenName" id="givenName"><br>
            
            <label for="postalAddress">Dirección Postal:</label>
            <input type="text" name="postalAddress" id="postalAddress"><br>
            
            <label for="mobile">Móvil:</label>
            <input type="text" name="mobile" id="mobile"><br>
            
            <label for="telephoneNumber">Teléfono:</label>
            <input type="text" name="telephoneNumber" id="telephoneNumber"><br>
            
            <label for="title">Título:</label>
            <input type="text" name="title" id="title"><br>
            
            <label for="description">Descripción:</label>
            <input type="text" name="description" id="description"><br>
            
            <input type="submit" value="Crear usuario">
    	</form>

		<a href="http://zend-ramave.fjeclot.net/m08uf23/index.php">Torna a la pàgina inicial</a>
	</body>
</html>