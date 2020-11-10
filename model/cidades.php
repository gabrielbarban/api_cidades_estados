
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

	public function lista_cidades_by_typing($text)
    {
        $crud = new Crud();
        $query = "SELECT CONCAT(Nome, ' - ', Uf) as 'nome' FROM municipio";
        $data = $crud->find($query);
        return $data;
    }
}

?>