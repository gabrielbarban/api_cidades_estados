
<?php  

class cidades
{
	function __construct()
	{
		require_once("../database/crud.php");
	}

	public function lista_cidades($Uf_estado)
	{
		$crud = new Crud();
		$query = "SELECT Codigo, Nome FROM municipio WHERE Uf = '".$Uf_estado."';";
		$data = $crud->find($query);
		return $data; 
	}
}

?>