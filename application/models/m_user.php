<?php
/**
* 
*/
class M_user extends CI_Model
{

	function login($data)
	{
		$dt=$this->db->get_where('user',$data);
		return $dt;
	}

	function tampil_user()
	{
		return $this->db->get('user');
	}
	
	function add($data)
	{
		$this->db->insert('user',$data);
	}
	function get_id($id)
	{
		$data = array('user_id'=>$id);
		return $this->db->get_where('user',$data);
	}
	function edit($id)
	{
		
		$this->db->where('user_id',$id);
		return $this->db->get('user')->result();
	}
	
	function update($data,$id)
	{
		$row=$this->db->where('user_id',$id)
					  ->get('user')
					  ->row();
		unlink('./assets/gambar/'.$row->gambar);
		$this->db->where('user_id',$id);
		$this->db->update('user',$data);
	}
	
	function delete($id)
	{
		$row=$this->db->where('user_id',$id)
					  ->get('user')
					  ->row();
		unlink('./assets/gambar/'.$row->gambar);
		$this->db->where('user_id',$id);
		$this->db->delete('user');
	}
}