<?php
require_once 'adodb/adodb.inc.php';

/**
* Penduduk
*/
class Food
{

	function __construct()
	{
		$this->db = NewADOConnection('mysqli');
		$this->db->Connect('localhost','root','','satub_4754');
	}

	function get_food_by_code($code="")
	{
		$food  = $this->db->Execute("SELECT * FROM food WHERE code LIKE ?","%$code%");
		return json_encode($food->GetAssoc());
	}

}

// $penduduk = new Penduduk();
// $data = $penduduk->get_penduduk_by_nik();
// echo '<pre>';
// print_r($data);
// echo '</pre>';
?>