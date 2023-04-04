<html>
<style>
    <?php include 'style.css'; ?>
</style>

<head>
    <meta charset="UTF-8">
    <title>Formulari</title>
</head>
<body>
<h1>Introduir Persones:</h1>

    <form method="post" action="Formulari/formulari">
        <table>
            <tr>
                <td><label for="nom">Nom:</label></td>
                <td><input type="text" name="nom" size="40" placeholder="Introdueix el nom" required=""></td>
            </tr>
            <tr>
                <td><label for="cognoms">Cognoms:</label></td>
                <td><input type="text" name="cognoms" size="40" placeholder="Introdueix els cognoms" required=""></td>
            </tr>
            <tr>
                <td><label for="dni">DNI:</label></td>
                <td><input type="text" name="dni" size="40" placeholder="Introdueix el DNI" required=""></td>
            </tr>
            <tr>
                <td><label for="adreca">Adreça:</label></td>
                <td><input type="text" name="adreca" size="40" placeholder="Introdueix l'adreça" required=""></td>
            </tr>
        </table>

    <br>
    <div>
        <a href="http://localhost/codeMinia/public/"><input type="button" value="Tornar a la pagina principal" class="botons"></a>

        <a href=""><input type="reset" value="Borrar dades" class="botons"></a>

        <a href=""><input type="submit" value="Introduir persona" class="botons"></a>
    </div>
    </form>

</body>
</html>