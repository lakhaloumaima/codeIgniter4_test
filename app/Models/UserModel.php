<?php

namespace App\Models;

use CodeIgniter\Model ;

class UserModel extends Model
{
    protected $table = 'users' ;
    protected $primaryKey = 'id';
    protected $allowedFields = [ 'nom' , 'prenom' , 'age' , 'genre' ]  ;

	function add($data) {
		return $this->db
                        ->table('users')
                        ->insert($data);
	}

}



?>