<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class CrudModel extends Model {
		public function listarNombres() {
			$Nombres = $this->db->query("SELECT * FROM t_personas");
			return $Nombres->getResult();
		}
		public function insertar($datos) {
			$Nombres = $this->db->table('t_personas');
			$Nombres->insert($datos);

			return $this->db->insertID(); 
		}

		public function obtenerNombre($data) {
			$Nombres =  $this->db->table('t_personas');
			$Nombres->where($data);
			return $Nombres->get()->getResultArray();
		}

		public function actualizar($data, $idNombre) {
			$Nombres = $this->db->table('t_personas');
			$Nombres->set($data);
			$Nombres->where('id_nombre', $idNombre);
			return $Nombres->update();
		}

		public function eliminar($data) {
			$Nombres = $this->db->table('t_personas');
			$Nombres->where($data);
			return $Nombres->delete();
		}
	}