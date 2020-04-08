<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Backoffice_model extends CI_model
{

	public function get_client()
	{

		$query = $this->db->select("*")
				->from('client')
				->order_by('no_id', 'DESC')
				->get();
		return $query->result();

	}

	public function save_client($data)
	{


		$query = $this->db->insert("client",$data);

		if($query)
		{
			return true;
		}else
		{
			return false;
		}

	}


}

?>