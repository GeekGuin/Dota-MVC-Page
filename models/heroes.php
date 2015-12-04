<?php
class Heroes
{
	public $id;
	public $nombre;
	public $rol;
	public $atributo;
	public $idrol;
	public $idatributo;


	public function __construct($id1, $nombre1, $rol1, $atributo1, $idrol1, $idatributo1)
	{
		$this->id = $id1;
		$this->nombre = $nombre1;
		$this->rol = $rol1;
		$this->atributo = $atributo1;
		$this->idatributo = $idatributo1;
		$this->idrol = $idrol1;
	}


	public static function all()
	{
		$V = [];
		$db = Db::getInstance();
		$req = $db->query('Select heroes.nombre as nombre, heroes.idHeroe as id, heroes.idAtributo as ida, heroes.idRol as idr, atributos.nombre as an, roles.nombre as rn from heroes 
							inner join atributos on atributos.idAtributo = heroes.idAtributo 
							inner join roles on heroes.idRol = roles.idRol
							order by id;');

		foreach($req->fetchAll() as $heroe)
		{
			$V[] = new Heroes($heroe['id'], $heroe['nombre'], $heroe['rn'], $heroe['an'], $heroe['idr'], $heroe['ida']);
		}
		return $V;
	}

}


?>