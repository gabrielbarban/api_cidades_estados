<?php  

class estados
{
	function __construct()
	{
		require_once("../database/crud.php");
	}

	public function lista_estados()
	{
		$crud = new Crud();
		$query = "SELECT CodigoUf, Nome, Uf FROM estado";
		$data = $crud->find($query);
		return $data; 
	}
}

?>