<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departement_m extends CI_Model {

	public function getdata()
	{
		$query = $this->db->query("SELECT * FROM departement_tb ORDER BY id_departement ASC")->result();
		return $query;
	}


public function Add($post)
{
	$params = [
	'nama' => $post['nama']
	];
	$this->db->insert('departement_tb',$params);
}


 public function delete($id)
    {
        $this->db->where('id_departement',$id);
         $this->db->delete('departement_tb');
         }


public function getsdata($id)
	{
		$query = $this->db->query("SELECT * FROM departement_tb WHERE id_departement = '$id'")->row();
		return $query;
	}


	public function edit($post)
{
	$params = [
	'nama' => $post['nama']
	];
	$this->db->where('id_departement',$post['id_departement']);
	$this->db->update('departement_tb',$params);
}
}
