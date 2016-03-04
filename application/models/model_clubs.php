<?php
	/**
	 * 
	 */
	class model_clubs extends CI_Model {
		protected $table = 'clubs';
		
		function get_clubs() {
			return $this->db->select('*')
			->from($this->table)
			->get()
			->result();
			
		}
		
		function add_club($nom,$desc){
					$data = array(
						'nom' => $nom,
						'desc' => $desc,
					);
					
				$this->db->insert($table,$data);
		}
		
		function count_clubs(){
			return $this->db->count_all("clubs");
		}
	}
	