<?php
$conexion = mysqli_connect('localhost','root','','testcodeigniter');
?>

<html>
<head>
    <title>Dades</title>
</head>
<body>
<h1>Taula</h1>
<table>
    <tr>
        <td>Nom</td>
        <td>Cognoms</td>
        <td>DNI</td>
        <td>Adreça</td>
    </tr>

    <?php
    $sql = "SELECT * FROM persones";
    $result = mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
        ?>

        <tr>
            <td><?php echo $mostrar['Nom'] ?></td>
            <td><?php echo $mostrar['Cognoms'] ?></td>
            <td><?php echo $mostrar['DNI'] ?></td>
            <td><?php echo $mostrar['Adreça'] ?></td>
        </tr>
        <?php
    }
    ?>

</table>
</body>
</html>