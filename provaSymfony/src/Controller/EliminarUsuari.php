<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EliminarUsuari extends CI_Controller
{
    public function index()
    {
		$this->load->view('EliminarUsuari/eliminarUsuari');
	}

	public function EliminarUsuari()
	{
		define('USUARI', 'root');
		define('CONTRA', '');
		define('HOST', 'localhost');
		define('BD', 'testcodeigniter');

		$nom = $this->input->post('nomUsuari');
		$contra = $this->input->post('contrasenya');

		$connection = new PDO("mysql:host=".HOST.";dbname=".BD, USUARI, CONTRA);

		$sql = $connection->prepare("SELECT NomUsuari FROM login WHERE NomUsuari = '$nom'");
		$sql->execute();
		$files = $sql->rowCount();
		if ($files == 1) {
			foreach ($connection->query("SELECT Contrasenya FROM login WHERE NomUsuari = '$nom'") as $fila) {
				$fila['Contrasenya'];
			}
			$fila = $fila['Contrasenya'];
			if (password_verify($contra, $fila)) {
				$sql = $connection->prepare("DELETE FROM login WHERE NomUsuari = '$nom'");
				$sql->execute();
				echo "<script> alert('Usuari eliminat correctament'); location.href='http://localhost/code3';</script>";
			} else {
				echo "<script> alert('Contrasenya incorrecta, torna a intentar-ho'); location.href='http://localhost/code3/index.php/EliminarUsuari';</script>";
			}
		}else{
			echo "<script> alert('Nom d\'usuari no valid, torna a intentar-ho'); location.href='http://localhost/code3/index.php/EliminarUsuari';</script>";
		}
	}
}
