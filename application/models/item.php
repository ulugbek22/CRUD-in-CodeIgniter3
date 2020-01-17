<?php

class Item extends CI_Model
{
	protected $table;

	public function __construct()
	{
		$this->load->database();
	}

	public function get($start = 0, $limit = 10)
	{
		$query = $this->db->order_by('id', 'DESC')->get($this->table, $limit);

		return $query->result_array();
	}

	public function get_by($where)
	{
		$this->db->where($where);

		$query = $this->db->get($this->table);
		
		return $query->result_array();
	}

	public function add($item)
	{
		if (!$this->validate($item)) return false;

		return $this->db->insert($this->table, $item);
	}

	public function delete($key, $val)
	{
		$this->db->where($key, $val);

		$this->db->delete($this->table);
	}

	protected function validate($data)
	{
		foreach ($data as $key => $val) 
		{
			if (empty($val)) return false;
		}
		return true;
	}

	public function update($key, $val, $data)
	{
		$this->db->where($key, $val);

		$this->db->update($this->table, $data);
	}
}