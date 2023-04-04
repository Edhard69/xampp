<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrarUsuari extends CI_Controller
{
    public function index()
    {
		$this->load->view('RegistrarUsuari/registrarUsuari');
	}

	public function registrarUsuari()
	{
		define('USUARI', 'root');
		define('CONTRA', '');
		define('HOST', 'localhost');
		define('BD', 'testcodeigniter');

		$nom = $this->input->post('nomUsuari');
		$contra = $this->input->post('contrasenya');
		$contra_encriptada = password_hash($contra, PASSWORD_BCRYPT);

		$connection = new PDO("mysql:host=".HOST.";dbname=".BD, USUARI, CONTRA);

		$sql = $connection->prepare("SELECT NomUsuari FROM login WHERE NomUsuari = '$nom'");
		$sql->execute();
		$files = $sql->rowCount();

		if ($files == 1){
			echo "<script> alert('Usuari ja registrat: $nom'); location.href='http://localhost/code3/index.php/RegistrarUsuari';</script>";
		}else{
			$sql = $connection->prepare("INSERT INTO `login` (`NomUsuari`, `Contrasenya`) VALUES ('$nom', '$contra_encriptada')");
			$sql->execute();
			echo "<script> alert('Usuari \"$nom\" registrat correctament, ja pots fer Login'); location.href='http://localhost/code3/index.php/iniciarSessio';</script>";
		}


		//fer robustesa del nom d'usuari, maxim 25 caracters.
	}
}
