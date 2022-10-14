<?php namespace App\Controllers;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
class formulari extends sfActions
{
    public function executeIndex()
    {
        return $this->renderPartial('Formulari/index');
    }



    public function formulari()
    {
        $conexion = mysqli_connect('localhost','root','','testcodeigniter');


        $nom = $this->request->getPost('nom');
        $cognoms = $this->request->getPost('cognoms');
        $dni = $this->request->getPost('dni');
        $adreca = $this->request->getPost('adreca');

        $sql = "INSERT INTO `persones` (`Nom`, `Cognoms`, `DNI`, `Adreca`) VALUES ('$nom', '$cognoms', '$dni', '$adreca')";
        $sql2 = "SELECT DNI FROM persones WHERE DNI = '$dni'";

        $result = mysqli_query($conexion,$sql2);
        $files_DNI = mysqli_num_rows($result);

        if($files_DNI == 0) {
            mysqli_query($conexion, $sql);
            echo "<script> alert('Persona registrada \\nNom: $nom, cognoms: $cognoms, DNI: $dni'); location.href='http://localhost/code4/Formulari';</script>";
        }else{
            echo "<script> alert('Usuari amb DNI \"$dni\" ja està registrat'); location.href='http://localhost/code4/Formulari';</script>";
        }
    }


}