<html>
<style>
    <?php include 'styleEliminarUsuari.css'; ?>
</style>

<head>
    <meta charset="UTF-8">
    <title>Delete</title>
</head>
<body>
	<h1><u>&nbsp; Delete &nbsp;</u></h1>
    <form method="post" action="EliminarUsuari/eliminarUsuari">
        <table>
            <tr>
                <td><label for="nomUsuari">Nom:</label></td>
                <td><input type="text" name="nomUsuari" size="40" placeholder="Introdueix el nom d'usuari" required=""></td>
            </tr>
            <tr>
                <td><label for="contrasenya">Contrasenya:</label></td>
                <td><input type="password" name="contrasenya" size="40" placeholder="Introdueix la contrasenya" required=""></td>
            </tr>
		</table>
		<br><br><br>
		<div>
			<a href=""><input type="reset" value="Borrar dades" class="botons"></a>
			<a href=""><input type="submit" value="Eliminar Usuari" class="botons"></a>
			<a href="http://localhost/codeMinia/public/"><input type="button" value="Pagina Principal" class="botons"></a>
		</div>
    </form>
</body>
</html>
