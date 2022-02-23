<?php
namespace App\Models;
use CodeIgniter\Model;
class mUsuarios extends Model{
	protected $table = 'usuarios';
	protected $primaryKey = 'id_usuario';

	protected $useAutoIncrement = true;

	protected $returnType = 'array';
	protected $useSoftDeletes=true;

	protected $allowedFields =['email', 'password','nombre'];
}
?>