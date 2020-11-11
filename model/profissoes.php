
<?php  

class profissoes
{
	function __construct()
	{
		require_once("../database/crud.php");
	}

	public function lista_profissoes()
	{
		$crud = new Crud();
		$query = "SELECT nome FROM profissoes;";
		$data = $crud->find($query);
		return $data; 
	}
}

?>