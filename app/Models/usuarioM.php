<?php
namespace App\Models;

use CodeIgniter\Model;

class usuarioM extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['usuario', 'pass','mail','creacion'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'creacion';
    protected $updatedField = 'actualizacion';
    protected $deletedField = 'eliminacion';

    public function obtenerID($CE)
    {
      $usuario = $this->db->table('usuarios');
      $usuario->where(['mail'=> $CE]);
      return intval($usuario->get()->getRow('ID'));
    }

    public function comprobar($id,$ps)
    {
      $usuario = $this->db->table('usuarios');
      $usuario->where(['ID'=> $id]);
      $dato = $usuario->get()->getRow('pass');
      if($id != 0 and password_verify($ps,$dato)){
        return true;
      };
      return false;
    }



    // Validation
    //protected $validationRules      = [];
    //protected $validationMessages   = [];
    //protected $skipValidation       = false;
    //protected $cleanValidationRules = true;
}
?>
