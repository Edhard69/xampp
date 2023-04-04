<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function index()
    {
		return new Response('IniciarSessio/iniciarSessio');
	}

	public function validacioUsuari()
	{
		define('USUARI', 'root');
		define('CONTRA', '');
		define('HOST', 'localhost');
		define('BD', 'testcodeigniter');

		$nom = $this->input->post('nomUsuari');
		$contra = $this->input->post('contrasenya');

		$connection = new PDO("mysql:host=".HOST.";dbname=".BD, USUARI, CONTRA);

		foreach ($connection->query("SELECT Contrasenya FROM login WHERE NomUsuari = '$nom'") as $fila) {
			$fila['Contrasenya'];
		}
		$fila = $fila['Contrasenya'];
		if (password_verify($contra, $fila)){
			header("Location: http://localhost/code3/index.php/taulaPersones");
		}else{
			echo "<script> alert('Nom d\'usuari o contrasenya incorrecte, torna a intentar-ho'); location.href='http://localhost/code3/index.php/iniciarSessio';</script>";
		}
	}
}
