<?php

namespace App\Controllers;

use App\Models\usuarioM;

class usuario extends BaseController
{
  public function new()
  {
    $valid = \Config\Services::validation();
    return view('registro',['val' => $valid]);
  }

  public function create()
  {
    $user = new usuarioM();
    if($this->validate('usuario')){
      $user -> insert([
        'usuario' => $this->request->getPost('NN'),
        'pass' => password_hash($this->request->getPost('Passr'), PASSWORD_DEFAULT),
        'mail' => $this->request->getPost('CEr')
      ]);
      return redirect()->to(base_url());
    }else{
      return redirect()->to(base_url('usuario/new'))->withInput()->with('errors', $this->validator->getErrors());
    }

  }

  public function login()
  {
    $user = new usuarioM();
    $corr = $this->request->getPost('CE');
    $pass = $this->request->getPost('Pass');
    $id = $user->obtenerID($corr);
    if($user->comprobar($id,$pass))
    {
      return redirect()->to(base_url('usuario/'.$id));
    }else{
      return redirect()->to(base_url());
    };

  }

  public function show($id = null)
  {
    $user = new usuarioM();

    $data['user'] = $user->where('ID',$id)->first();

    return view('resultado',$data);
  }
}
