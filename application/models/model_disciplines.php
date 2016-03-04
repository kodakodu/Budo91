<?php
	/**
	 * 
	 */
	class model_disciplines extends CI_Model {
		protected $table = 'disciplines';
		
		function get_disciplines() {
			return $this->db->select('*')
			->from($this->table)
			->order_by("nom", "desc")
			->get()
			->result();
			
		}
	}
	