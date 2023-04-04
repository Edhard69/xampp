<?php
    $conexion = mysqli_connect('localhost','root','admin','testcodeigniter');

$numero_pagina = $_GET['pagina'];
$files_mostrar = 5;

if ($numero_pagina == '0'){
    $inici = 0;
} else {
    $numero = (int) $numero_pagina;
    $inici = $numero * 5;
}

$sql = "SELECT * FROM persones ORDER BY Nom ASC LIMIT $inici,$files_mostrar";
$sql2 = "SELECT * FROM persones ORDER BY Nom ASC";
$result = mysqli_query($conexion,$sql);
$result2 = mysqli_query($conexion,$sql2);
$files_contades = mysqli_num_rows($result);
$files_contades2 = mysqli_num_rows($result2);
?>
<html>
<style>
    <?php include 'style.css'; ?>
</style>

<head>
    <meta charset="UTF-8">
    <title>Dades</title>
</head>
<body>
<h1>Taula Persones:</h1>

<a href="../Formulari"><input type="button" value="Afegir Persona" class="afegirPers"></a>

<br><br>
<table>
    <tr>
        <th>Nom</th>
        <th>Cognoms</th>
        <th>DNI</th>
        <th>Adreça</th>
    </tr>

    <?php
    while($mostrar=mysqli_fetch_array($result)){
    ?>
        <tr>
            <td><?php echo $mostrar['Nom'] ?></td>
            <td><?php echo $mostrar['Cognoms'] ?></td>
            <td><?php echo $mostrar['DNI'] ?></td>
            <td><?php echo $mostrar['Adreca'] ?></td>
        </tr>

    <?php
    }
    ?>
</table>
    <br>
    <div>
        <?php
            $numero = (int) $numero_pagina;
            if ($numero - 1 != -1) {
                ?> <a href="?pagina=<?=$numero_pagina-1?>"><input type="button" value="Endarrere" class="pasaPag"></a> <?php
            }else {
                ?>
                <hr class="special-hr-left">
                <?php
            }

        if ($files_contades2/5 != $numero + 1 && $files_contades > 4) {
            ?> <a href="?pagina=<?=$numero_pagina+1?>"><input type="button" value="Endavant" class="pasaPag"></a> <?php
        }else {
            ?>
            <hr class="special-hr-right">
            <?php
        }
        ?>
    </div>
<br>
    <div>
    <br><br>
    <?php $numero = (int) $numero_pagina; ?>
    <a href="?pagina=0"><input type="button" value="Primer"></a>
        <?php
        $comp = 0;
        while($files_contades2/5 > $comp){
            if($numero==$comp){
                ?><a href="?pagina=<?=$comp?>" class="especialAColor">
                <?php echo $comp+1?>&nbsp;</a><?php
            }else{
                ?><a href="?pagina=<?=$comp?>" class="especialA">
                <?php echo $comp+1?>&nbsp;</a><?php
            }
            $comp++;
        }
        ?>

    <a href="?pagina=<?=ceil($files_contades2/5)-1?>"><input type="button" value="Ultim"></a>
    </div>

    <p class="nPagina">Pagina nº <?php echo $numero+1?> / <?php echo ceil($files_contades2/5) ?></p>

</body>
</html>