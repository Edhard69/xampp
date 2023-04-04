<?php
$conexion = mysqli_connect('localhost','root','','testcodeigniter');

$numero_pagina = $_GET['pagina'];
$files_mostrar = 5;

if ($numero_pagina == '0'){
    $inici = 0;
} else {
    $numero = (int) $numero_pagina;
    $inici = $numero * 5;
}

$sql = "SELECT NomUsuari FROM login ORDER BY NomUsuari ASC LIMIT $inici,$files_mostrar";
$sql2 = "SELECT NomUsuari FROM login ORDER BY NomUsuari ASC";
$result = mysqli_query($conexion,$sql);
$result2 = mysqli_query($conexion,$sql2);
$files_contades = mysqli_num_rows($result);
$files_contades2 = mysqli_num_rows($result2);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?= $title_meta ?>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <?= $this->include('partials/head-css') ?>

</head>



<?= $this->include('partials/body') ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?= $this->include('partials/menu') ?>

    <div class="main-content">

        <div class="page-content">

            <?= $page_title ?>
            <div class="row">


                <a href="/code3/index.php/registrarUsuari"><input type="button" value="Afegir Usuari"></a>

                <br><br>
                <table class="table table-striped table-sm m-0">
                    <thead class="table-light">
                        <tr>
                            <th>NomUsuari</th>
                            <th colspan="2">Contrasenya</th>
                        </tr>
                    </thead>
                    <?php
                    while($mostrar=mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $mostrar['NomUsuari'] ?></td>
                            <td>********</td>
                        </tr>

                        <?php
                    }
                    ?>
                </table>
                <div align="center">
                    <?php
                    $numero = (int) $numero_pagina;
                    if ($numero - 1 != -1) {
                        ?> <a href="/codeMinia/public/apps-chat?pagina=<?=$numero_pagina-1?>"><input type="button" value="Endarrere"></a> <?php
                    }else {
                        ?>
                        <hr style="height: 0px" class="special-hr-left">
                        <?php
                    }

                    if ($files_contades2/5 != $numero + 1 && $files_contades > 4) {
                        ?> <a href="/codeMinia/public/apps-chat?pagina=<?=$numero_pagina+1?>"><input type="button" value="Endavant"></a> <?php
                    }else {
                        ?>
                        <hr style="height: 0px" class="special-hr-right">
                        <?php
                    }
                    ?>
                </div>
                <br>
                <div align="center">
                    <br>
                    <?php $numero = (int) $numero_pagina; ?>
                    <a href="/codeMinia/public/apps-chat?pagina=0"><input type="button" value="Primer"></a>
                    <?php
                    $comp = 0;
                    while($files_contades2/5 > $comp){
                        if($numero==$comp){
                            ?><a href="/codeMinia/public/apps-chat?pagina=<?=$comp?>" class="especialAColor">
                            <?php echo $comp+1?>&nbsp;</a><?php
                        }else{
                            ?><a href="/codeMinia/public/apps-chat?pagina=<?=$comp?>" class="especialA">
                            <?php echo $comp+1?>&nbsp;</a><?php
                        }
                        $comp++;
                    }
                    ?>

                    <a href="/codeMinia/public/apps-chat?pagina=<?=$comp-1?>"><input type="button" value="Ultim"></a>
                </div>

                <p class="nPagina">Pagina nº <?php echo $numero+1?> / <?php echo $comp ?></p>

                <a href="http://localhost/codeMinia/public/"><input type="button" value="Pagina Principal" class="botons"></a>
            </div>

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <?= $this->include('partials/footer') ?>

</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->


<?= $this->include('partials/right-sidebar') ?>

<!-- JAVASCRIPT -->
<?= $this->include('partials/vendor-scripts') ?>

<!-- Calendar init -->
<script src="assets/js/main.js"></script>
<script src="assets/js/pages/calendar.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>