<?php
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'idusuarios';

    protected $allowedFields = ['usuario', 'password', 'estado', 'idperfil'];

    public function usuarios_activos(){
        return $this->select('idusuarios, usuario, password')
                    ->where('estado', 'ACTIVO')
                    ->findAll();
    }
}

?>