<?Php
/*
 Clase dedicada a la conexion de multiples servicios y bases de datos para la homologación del
 procedeimiento  y respuesta en las diferentes aplicativos realizados dentro de la CONAFOR
*/
/**
 * @category Herramientas
 * @author José Manuel Peralta
 * @copyright (c) 2019
 * @version 1.0
 */

ini_set('memory_limit', '-1');
ini_set('max_execution_time', 300); //5 minutos
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model {

	//Constructor
	function __construct(){
		parent::__construct();
	}

    //obtener el menu
    public function obtener_menu(){    
        $ide = '';
        $url_preview = base_url().'inicio/ver_graficos/?id=';

        //traer todas las categoias
        $query = $this->db->get('vw_categorias');
        foreach ($query->result() as $row){
             switch ($row->tipo_id) {
                case '1':
                    $ide = 'ger';
                break;
                case '2':
                    $ide = 'gen';
                break;
                case '3':
                    $ide = 'poli';
                break;
             }
            if($row->contador > 0){
                $reportes[$ide] .= '
                <li>
                <a href="#" title="'.$row->nombre.'" data-filter-tags="'.$row->nombre.'">
                    '.$row->icono.'
                    <span class="nav-link-text" >'.$row->nombre.'</span>
                </a>
                <ul>';
                $query2 = $this->db->query('SELECT * FROM vw_reportes WHERE categoria='.$row->id);
                foreach($query2->result() as $row2){
                    $reportes[$ide] .= '
                    <li>
                    <a href="'.$url_preview.$row2->id.'" title="'.$row2->nombre_reporte.'" data-filter-tags="'.strtolower($row2->nombre_reporte).'>
                        <span class="nav-link-text" >'.$row2->nombre_reporte.'</span>
                    </a>
                    </li>';
                }
                $reportes[$ide] .='</ul></li>';
            }
            //se da formato basico
            else{
                $reportes[$ide] .= '
                <li>
                <a href="#" title="'.$row->nombre.'" data-filter-tags="'.$row->nombre.'">
                    '.$row->icono.'
                    <span class="nav-link-text" >'.$row->nombre.'</span>
                </a>
                </li>';
            }
        }
        return $reportes;
    }

	//Funcion para consultar todos los registros de una tabla
	public function consulta($tabla=null){
		$query = $this->db->get($tabla);
        if($query->num_rows() > 0){
            return json_encode($query->result());
         }
         return json_encode(array());
    }

    public function consulta_condicionada($tabla,$condiciones){
        $this->db->trans_start();
        $query = $this->db->query('SELECT * FROM '.$tabla.' WHERE '.$condiciones);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            return json_encode(array());
        }
        return json_encode($query->result());
    }

    //Funcion para insertar registros
	public function guardar($datos,$tabla){
		if($this->db->insert($tabla, $datos)){
            return true;
        }
        return false;
	}
    
    //Funcion para ejecutar query de SOLO CONSULTA PONER UN LIMIT
	public function consulta_unica($tabla,$id){
        $this->db->where(array('id' => $id));
        //$this->db->limit(0, 10);
        $query = $this->db->get($tabla);
        if($query->num_rows() == 1){
            return $query->row();
         }
         elseif($query->num_rows() > 1){
            return $query->result();
         }
         return array();
    }
    
    //Funcion para actualiza datos
    public function actualizar($condicion,$datos,$tabla){
        $this->db->trans_start();
        $this->db->update($tabla,$datos,$condicion);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            return false;
        }
        return true;
    }

    //eliminar registros (1 a n)
    public function eliminar($condicion,$tabla){
        $this->db->trans_start();
        $this->db->where($condicion)->delete($tabla);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            return false;
        }
        return true;
    }

	//funcion para ejecutar query retornando resultados
	public function ejecuta($query){
        $this->db->trans_start();
        $query = $this->db->query($query);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            return false;
        }
         return $query->result();
	}

	//conocer si existe la tabla definida
	public function obtener_estructura($tabla){
		if ($this->db->table_exists($tabla)){
            return $this->db->list_fields($tabla);
        }
        // return false;
	}

	//FUncion para crear tabla
	public function crear_tabla($tabla,$query){
		if($this->obtener_estructura($tabla)){
			$this->db->query("DROP TABLE ".$tabla);
            $this->db->query($query);
            if(!$this->db->error()){
                return true;
            }
            return false;
		}
		$this->db->query($query);
        if(!$this->db->error()){
            return true;
        }
        return false;        
	}

	//funcion para guardar varios registros a la vez
	public function guardar_varios($tabla,$datos){
        $this->db->trans_start();
        $this->db->insert($tabla,$datos);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            return false;
        }
        return true;
	}

	//funcion para eliminar tabla
	public function eliminar_tabla($tabla){
		$this->load->dbforge();
		if($this->db->table_exists($tabla)){
			if($this->dbforge->drop_table($tabla)){
				return true;
			}
			return false;
		}
		return true;
	}
}


