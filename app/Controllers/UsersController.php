<?php

namespace App\Controllers;

use App\Models\UserModel;

class UsersController extends BaseController
{
    public function __construct() {

		$db = db_connect();
		$this->userModel = new UserModel($db);
	}

    public function index()
    {
        // echo "hello !";
        
        $user = new UserModel();

        $data['users'] = $user->findAll();

        return view('users/index.php', $data);
    }

    public function create()
    {

      $nom    = $this->request->getPost('nom');
      $prenom    = $this->request->getPost('prenom');
      $age        = $this->request->getPost('age');
      $genre        = $this->request->getPost('genre');

      $data = [
          'nom'        => $nom,
          'prenom'        => $prenom,
          'age'            => $age,
          'genre'            => $genre,
      ];

      $result = $this->userModel->add($data);
      if ($result) {
        $user = new UserModel();
        $data['users'] = $user->findAll();
        echo "New user is registered successfully.";
        return view('users/index.php', $data);
         
      } else {

        $user = new UserModel();
        $data['users'] = $user->findAll();
        echo "Something went wrong";
        return view('users/index.php', $data);
      }


        
    }


}
