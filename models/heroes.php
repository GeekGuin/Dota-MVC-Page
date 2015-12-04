<?php
class Heroe
{
	private $id;
	private $nombre;
	private $rol;
	private $atributo;
	private $idrol;
	private $idatributo;


	public function __construct($id1, $nombre1, $rol1, $atributo1, $idrol1, $idatributo1)
	{
		$id = $id1;
		$nombre = $nombre1;
		$rol = $rol1;
		$atributo = $atributo1;
		$idatributo = $idatributo1;
		$idrol = $idrol1;
	}


	public static function all()
	{
		$V = [];
		$db = Db::getInstance();
		$req = $db->query('Select heroes.nombre as nombre, heroes.idHeroe as id, heroes.idAtributo as ida, heroes.idRol as idr, atributos.nombre as an, roles.nombre as rn from heroes 
							inner join atributos on atributos.idAtributo = heroes.idAtributo 
							inner join roles on heroes.idRol = roles.idRol;');

		foreach($req->fetchAll() as $hero)
		{
			$V[] = new Heroe($heroe['id'], $heroe['nombre'], $heroe['rn'], $heroe['an'], $heroe['idr'], $heroe['ida']);
		}
		return $V;
	}

}


?>