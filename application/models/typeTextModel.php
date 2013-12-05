<?php
class TypeTextModel extends CI_Model
{
	
	public function getRows()
	{
		$rs = $this->db->query("Select Sentence from sentence where Type = 'food'");
		return $rs->result();
	}
	public function getTime()
	{
		$time = $this->db->query("Select Sentence from sentence where Type = 'time'");
		return $time->result();
		
	}
	public function getMoney()
	{
		$money = $this->db->query("Select Sentence from sentence where Type = 'money'");
		return $money->result();
		
	}
	public function getHealth()
	{
		$health = $this->db->query("Select Sentence from sentence where Type = 'health'");
		return $health->result();
		
	}
	
}
?>	
